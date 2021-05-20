<?php

namespace Arimac\Sigfox\GenCode;

use PhpParser\Comment;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr\Assign;
use PhpParser\Node\Expr\BooleanNot;
use PhpParser\Node\Expr\FuncCall;
use PhpParser\Node\Expr\New_;
use PhpParser\Node\Expr\StaticCall;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Name;
use PhpParser\Node\NullableType;
use PhpParser\Node\Param;
use PhpParser\Node\Scalar\String_;
use PhpParser\Node\Stmt\Expression;
use PhpParser\Node\Stmt\If_;
use PhpParser\Node\Stmt\Return_;

class Repository extends Class_
{
    protected array $properties = [];

    public function addFindMethod(
        string $name,
        string $type,
        string $returnType,
        ?string $docComment = null
    ) {
        $returnType = $this->useType($returnType);
        $methodName = "find";
        if (in_array($name, ["year", "month"])) {
            $methodName = $name;
        }

        $args = array_map(function ($property) {
            return new Arg(new Variable("this->" . $property[0]));
        }, $this->properties);
        array_unshift($args, new Arg(new Variable("this->client")));
        $args[] = new Arg(new Variable($name));

        $this->addMethod(
            $methodName,
            [new Param(new Variable($name), null, $type)],
            [new Return_(new New_(
                new Name($returnType),
                $args
            ))],
            $returnType,
            $docComment
        );
    }

    public function addConstructor(array $parameters)
    {
        $this->properties = $parameters;

        $params = [];
        $stmts = [];

        $this->useType("Arimac\\Sigfox\\Client\\Client");
        $this->addProperty(
            "client",
            "Client",
            Helper::normalizeDocComment("The HTTP client", [["internal", null]], 2)
        );
        $params[] = new Param(new Variable("client"), null, "Client");
        $stmts[] = new Assign(
            new Variable("this->client"),
            new Variable("client")
        );

        foreach ($parameters as $param) {
            $params[] = new Param(new Variable($param[0]), null, $param[1]);

            $this->addProperty(
                $param[0],
                $param[1],
                Helper::normalizeDocComment($param[2], [["internal", null]], 2)
            );

            $stmts[] = new Assign(
                new Variable("this->" . $param[0]),
                new Variable($param[0])
            );
        }

        $docblockTags = array_map(function ($parameters) {
            $docComment = $parameters[2] ?? null;
            $name = $parameters[0];
            $type = $parameters[1];
            if ($docComment) {
                return ["param", $type, "\$$name", $docComment];
            } else {
                return ["param", $type, "\$$name", null];
            }
        }, $parameters);
        array_unshift($docblockTags, ["param", "Client", "\$client", "The HTTP client"]);
        array_unshift($docblockTags, ["internal", null]);
        $this->addMethod(
            "__construct",
            $params,
            $stmts,
            null,
            Helper::normalizeDocComment(
                "Creating the repository",
                $docblockTags,
                2
            )
        );
    }

    public function addRepositoryMethod(string $methodName, string $returnType)
    {
        $returnType = $this->useType($returnType);
        $args = array_map(function ($property) {
            return new Arg(new Variable("this->" . $property[0]));
        }, $this->properties);
        array_unshift($args, new Arg(new Variable("this->client")));

        $this->addMethod(
            $methodName,
            [],
            [
                new Return_(new New_(
                    new Name($returnType),
                    $args
                ))
            ],
            $returnType,
            Helper::normalizeDocComment([["return", $returnType]], 2)
        );
    }

    public function addRequestMethod(
        string $methodName,
        string $requestMethod,
        string $endpoint,
        $response = null,
        bool $responseTypeNullable,
        $request = null,
        array $errors = [],
        ?string $description = null
    ) {
        if (is_object($request)) {
            $requestType = $request ? $request->getName() : null;
            $requestProperties = $request ? $request->getProperties() : [];
        } else {
            $requestType = $request;
            $requestProperties = [];
        }
        if (is_object($response)) {
            $responseType = $response ? $response->getName() : null;
            $responseProperties = $response ? $response->getProperties() : [];
        } else {
            $responseType = $response;
            $responseProperties = [];
        }
        $isPaginated = isset($responseProperties["paging"]);

        $endpoint = new String_($endpoint);
        // Binding all URL parameters
        // Helper::bindUrlParams("url", $this->pathParam, ...)
        if (count($this->properties)) {
            $params = [$endpoint];
            foreach ($this->properties as $property) {
                $name = $property[0];
                array_push($params, new Variable("this->$name"));
            }
            $this->useType("Arimac\\Sigfox\\Helper");
            $endpoint = new StaticCall(new Name("Helper"), "bindUrlParams", $params);
        }

        $args = [
            new String_($requestMethod),
            $endpoint,
        ];

        $params = [];
        $stmts = [];

        $docBlockTags = [];

        // Taking the inner property value as the argument if the request has only one property.
        if (count($requestProperties) == 1 && $requestType) {
            $propertyName = array_keys($requestProperties)[0];

            $type = $requestProperties[$propertyName][0];
            $required = $requestProperties[$propertyName][1];
            $paramDescription = $requestProperties[$propertyName][2];

            $usedType = $this->useType($type);

            array_push($docBlockTags, ["param", $usedType . ($required ? "" : "|undefined"), "\$$propertyName", $paramDescription]);

            $phpType = Helper::toPHPValue($usedType);

            $requestType = $this->useType($requestType);

            if (!$required) {
                $phpType = new NullableType($phpType);
            }
            $param = $this->factory->param($propertyName);
            $param->setType($phpType);
            $params[] = $param;
            // $request = new MyRequest()
            array_push($stmts, new Assign(new Variable("request"), $this->factory->new($requestType)));
            // $request->setMyParam($myParam);
            array_push($stmts, $this->factory->methodCall(
                new Variable("request"),
                "set" . ucfirst($propertyName),
                [$this->factory->var($propertyName)]
            ));
            array_push($args, new Variable("request"));
        } else if (isset($requestType)) {
            $requestType = $this->useType($requestType);
            array_push($docBlockTags, ["param", $requestType, "\$request", "The query and body parameters to pass"]);

            $required = false;
            foreach ($requestProperties as $propertyName => $attrs) {
                $required = $required || $attrs[1];
            }

            $param = $this->factory->param("request");
            if (!$required) {
                $param->setDefault($this->factory->val(null));
                if ($isPaginated) {
                    $stmts[] = new If_(
                        new BooleanNot(
                            $this->factory->funcCall(
                                "isset",
                                [$this->factory->var("request")]
                            )
                        ),
                        [
                            "stmts" => [
                                new Expression(new Assign(
                                    $this->factory->var("request"),
                                    $this->factory->new($requestType)
                                )),
                                new Expression($this->factory->methodCall(
                                    $this->factory->var("request"),
                                    "setLimit",
                                    [
                                        $this->factory->val(100)
                                    ]
                                )),
                                new Expression($this->factory->methodCall(
                                    $this->factory->var("request"),
                                    "setOffset",
                                    [
                                        $this->factory->val(0)
                                    ]
                                ))
                            ]
                        ]
                    );
                }
                $requestType = new NullableType($requestType);
            }
            $param->setType($requestType);
            $params[] = $param;
            array_push($args, new Variable("request"));
        } else {
            array_push($args, $this->factory->val(null));
        }
        if (isset($responseType)) {
            $responseType = $this->useType($responseType);
            array_push($args, $this->factory->classConstFetch($responseType, "class"));
        } else {
            array_push($args, $this->factory->val(null));
        }

        // Adding the SerializeException as a @throws tag to doc block
        if ($requestType) {
            $serializeException = $this->useType("Arimac\\Sigfox\\Exception\\SerializeException");
            array_push($docBlockTags, ["throws", $serializeException, "If request object failed to serialize to a JSON serializable type."]);
        }

        // Adding UnexpectedResponseException to the doc block
        $unexpectedException = $this->useType("Arimac\\Sigfox\\Exception\\UnexpectedResponseException");
        array_push($docBlockTags, ["throws", $unexpectedException, "If server returned an unexpected status code."]);

        // Adding all expected HTTP responses to the doc block and $client->call method
        $astErrors = [];
        foreach ($errors as $statusCode => $className) {
            $className = $this->useType($className);
            array_push($docBlockTags, ["throws", $className, "If server returned a HTTP " . $statusCode . " error."]);
            $astErrors[$statusCode] = $this->factory->classConstFetch($className, "class");
        }
        if ($isPaginated) {
            $stmts[] = new Assign(new Variable("errors"), $this->factory->val($astErrors));
            $args[] = $this->factory->var("errors");
        } else {
            array_push($args, $this->factory->val($astErrors));
        }

        $clientCall = new FuncCall(new Name("\$this->client->call"), $args);
        // Returning the response from the method if the request is expecting for a response
        if(count($responseProperties)===1&&!$responseTypeNullable) {
            $propertyName = array_keys($responseProperties)[0];
            $type = $responseProperties[$propertyName][0];
            $required = $responseProperties[$propertyName][1];
            $paramDescription = $responseProperties[$propertyName][2];

            $type = $this->useType($type);
            array_push($docBlockTags, ["return", $type, $paramDescription]);
            $stmts[] = new Expression(new Assign($this->factory->var("response"), $clientCall),[
                // Ignoring type errors
                "comments"=>[
                    new Comment("/** @var $responseType **/")
                ]
            ]);
            $getter = "get".ucfirst($propertyName);
            $stmts[] = new Return_(
                $this->factory->methodCall(
                    $this->factory->var("response"),
                    $getter
                )
            );
            $responseType = $type;
            if(!$required){
                $responseType = new NullableType($responseType);
            }
             
        }else if ($isPaginated) {
            $model = $this->useType("Arimac\\Sigfox\\Model");
            $paginatedResponse = $this->useType("Arimac\\Sigfox\\Response\\Paginated\\PaginatedResponse");
            $stmts[] = new Expression(new Assign($this->factory->var("response"), $clientCall),[
                // Ignoring type errors
                "comments"=>[
                    new Comment("/** @var $model&$paginatedResponse **/")
                ]
            ]);
            $arrType = $responseProperties["data"][0];
            $itemType = substr($arrType, 0, strlen($arrType) - 2);
            $itemType = $this->useType($itemType);
            $paginateResponse = $this->useType("Arimac\\Sigfox\\Response\\Paginated\\PaginateResponse");
            array_push($docBlockTags, ["return", "$paginateResponse<$itemType,$responseType>", null]);
            $responseType = $paginateResponse;
            $stmts[] = new Return_(
                $this->factory->new($paginateResponse, [
                    $this->factory->propertyFetch(
                        $this->factory->var("this"),
                        "client"
                    ),
                    $this->factory->var("request"),
                    $this->factory->var("response"),
                    $this->factory->var("errors")
                ])
            );
        } else if ($responseType) {
            // Setting the return type if request expecting for a response
            array_push($docBlockTags, ["return", $responseType, null]);

            // Adding DeserializeException to the docblock
            $deserializeException = $this->useType("Arimac\\Sigfox\\Exception\\DeserializeException");
            array_push($docBlockTags, ["throws", $deserializeException, "If failed to deserialize response body as a response object."]);

            $stmts[] = new Return_($clientCall);
            if ($responseTypeNullable) {
                $responseType = new NullableType($responseType);
            }
        } else {
            $stmts[] = $clientCall;
            $responseType = "void";
        }

        $this->addMethod($methodName, $params, $stmts, $responseType, Helper::normalizeDocComment($description, $docBlockTags, 2));
    }

    public function getProperties(): array
    {
        return $this->properties;
    }
}
