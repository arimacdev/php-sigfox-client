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
            Helper::normalizeDocComment("The HTTP client", [["internal", null]], 2),
            null,
            false
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
                Helper::normalizeDocComment($param[2], [["internal", null]], 2),
                null,
                false
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
            /** @var Request $request **/
            $requestType = $request ? $request->getName() : null;
            $requestProperties = $request ? $request->getProperties() : [];
        } else {
            $requestType = $request;
            $requestProperties = [];
        }
        if (is_object($response)) {
            /** @var Response $response **/
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

            $requestVariableName = $propertyName === "request" ? "coreRequest" : "request";

            $usedType = $this->useType($type);
            $docBlockType = $usedType;


            if (substr($type, strlen($type) - 2) !== "[]" && $usedType !== $type) {
                $docBlockType .= "|array";

                $stmts[] = new If_(
                    $this->factory->funcCall("is_array", [$this->factory->var($propertyName)]),
                    [
                        "stmts" => [
                            new Expression(new Assign(
                                $this->factory->var($propertyName),
                                $this->factory->staticCall($usedType, "from", [$this->factory->var($propertyName)])
                            ), [
                                "comments" => [
                                    new Comment("/** @var $usedType **/")
                                ]
                            ])
                        ]
                    ]
                );
            }
            if (!$required) {
                $docBlockType .= "|null";
            }
            array_push($docBlockTags, ["param", $docBlockType, "\$$propertyName", $paramDescription]);

            $phpType = Helper::toPHPValue($usedType);

            $requestType = $this->useType($requestType);

            if (!$required) {
                $phpType = new NullableType($phpType);
            }
            $param = $this->factory->param($propertyName);
            $params[] = $param;
            // $request = new MyRequest()
            array_push($stmts, new Assign(new Variable($requestVariableName), $this->factory->new($requestType)));
            // $request->setMyParam($myParam);
            array_push($stmts, $this->factory->methodCall(
                new Variable($requestVariableName),
                "set" . ucfirst($propertyName),
                [$this->factory->var($propertyName)]
            ));
            array_push($args, new Variable($requestVariableName));
        } else if (isset($requestType)) {
            $usedType = $this->useType($requestType);
            $docBlockType = $usedType;

            $required = false;
            foreach ($requestProperties as $propertyName => $attrs) {
                $required = $required || $attrs[1];
            }

            if ( substr($usedType, strlen($usedType) - 2) !== "[]"&& $requestType!==$usedType) {
                $docBlockType.="|array";
                $stmts[] = new If_(
                    $this->factory->funcCall("is_array", [$this->factory->var("request")]),
                    [
                        "stmts" => [
                            new Expression(new Assign(
                                $this->factory->var("request"),
                                $this->factory->staticCall($usedType, "from", [$this->factory->var("request")])
                            ), [
                                "comments" => [
                                    new Comment("/** @var $usedType **/")
                                ]
                            ])
                        ]
                    ]
                );
            }

            if(!$required){
                $docBlockType .= "|null";
            }

            array_push($docBlockTags, ["param", $docBlockType, "\$request", "The query and body parameters to pass"]);

            $param = $this->factory->param("request");
            if (!$required) {
                $param->setDefault($this->factory->val(null));
            }
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
        $serializeException = $this->useType("Arimac\\Sigfox\\Exception\\SerializeException");
        array_push($docBlockTags, ["throws", $serializeException, "If request object failed to serialize to a JSON serializable type."]);

        // Adding UnexpectedResponseException to the doc block
        $unexpectedException = $this->useType("Arimac\\Sigfox\\Exception\\UnexpectedResponseException");
        array_push($docBlockTags, ["throws", $unexpectedException, "If server returned an unexpected status code."]);

        // Adding generic HTTP exception
        $responseException = $this->useType("Arimac\\Sigfox\\Exception\\Response\\ResponseException");
        $docBlockTags[] = ["throws", $responseException, "If server returned any expected HTTP error"];

        // ValidationException
        $validationException = $this->useType("Arimac\\Sigfox\\Exception\\ValidationException");
        $docBlockTags[] = [
            "throws",
            $validationException,
            "If request could not be validated according to pre validation rules."
        ];

        // Adding all expected HTTP responses to the doc block and $client->call method
        $astErrors = [];
        $docErrors = [];
        foreach ($errors as $statusCode => $className) {
            $className = $this->useType($className);
            $docErrors[] = $className;
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
        if (count($responseProperties) === 1 && !$responseTypeNullable) {
            $propertyName = array_keys($responseProperties)[0];
            $type = $responseProperties[$propertyName][0];
            $required = $responseProperties[$propertyName][1];
            $paramDescription = $responseProperties[$propertyName][2];

            $type = $this->useType($type);
            array_push($docBlockTags, ["return", $type, $paramDescription]);
            $stmts[] = new Expression(new Assign($this->factory->var("response"), $clientCall), [
                // Ignoring type errors
                "comments" => [
                    new Comment("/** @var $responseType **/")
                ]
            ]);
            $getter = "get" . ucfirst($propertyName);
            $stmts[] = new Return_(
                $this->factory->methodCall(
                    $this->factory->var("response"),
                    $getter
                )
            );
            $responseType = Helper::toPHPValue($type);
            if (!$required) {
                $responseType = new NullableType($responseType);
            }
        } else if ($isPaginated) {
            $model = $this->useType("Arimac\\Sigfox\\Model");
            $paginatedResponse = $this->useType("Arimac\\Sigfox\\Response\\Paginated\\PaginatedResponse");
            $stmts[] = new Expression(new Assign($this->factory->var("response"), $clientCall), [
                // Ignoring type errors
                "comments" => [
                    new Comment("/** @var $model&$paginatedResponse **/")
                ]
            ]);
            $arrType = $responseProperties["data"][0];
            $itemType = substr($arrType, 0, strlen($arrType) - 2);
            $itemType = $this->useType($itemType);
            $paginateResponse = $this->useType("Arimac\\Sigfox\\Response\\Paginated\\PaginateResponse");
            $errors = implode(" | ", $docErrors);
            array_push($docBlockTags, ["psalm-type", "E=" . $errors]);
            array_push($docBlockTags, ["psalm-return", "$paginateResponse<$itemType,$responseType,E>"]);
            array_push(
                $docBlockTags,
                [
                    "return",
                    "$paginateResponse<$itemType,$responseType>",
                    "First generic parameter is the item type and the second type is the original response type."
                ]
            );
            $responseType = $paginateResponse;
            $stmts[] = new Return_(
                $this->factory->new($paginateResponse, [
                    $this->factory->propertyFetch(
                        $this->factory->var("this"),
                        "client"
                    ),
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
