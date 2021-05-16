<?php

namespace Arimac\Sigfox\GenCode;

use PhpParser\Node\Arg;
use PhpParser\Node\Expr\Assign;
use PhpParser\Node\Expr\FuncCall;
use PhpParser\Node\Expr\New_;
use PhpParser\Node\Expr\StaticCall;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Name;
use PhpParser\Node\NullableType;
use PhpParser\Node\Param;
use PhpParser\Node\Scalar\String_;
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
            Helper::normalizeDocComment("The HTTP client", [["internal", null]],2)
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
                Helper::normalizeDocComment($param[2], [["internal", null]],2)
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
                        return ["param", $type, "\$$name",$docComment];
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
        ?string $responseType = null,
        bool $responseTypeNullable,
        ?string $requestType = null,
        array $errors = [],
        ?string $description = null,
        array $properties = []
    ) {

        $endpoint = new String_($endpoint);
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

        if(count($properties)==1&&$requestType){
            $propertyName = array_keys($properties)[0];

            $type = $properties[$propertyName][0];
            $required = $properties[$propertyName][1];
            $paramDescription = $properties[$propertyName][2];

            $usedType = $this->useType($type);

            array_push($docBlockTags, ["param", $usedType.($required?"":"|undefined"), "\$$propertyName", $paramDescription]);
            
            $phpType = Helper::toPHPValue($usedType);

            $requestType = $this->useType($requestType);

            if(!$required){
                $phpType = new NullableType($phpType);
            }
            $param = $this->factory->param($propertyName);
            $param->setType($phpType);
            $params[] = $param;
            array_push($stmts, new Assign(new Variable("request"), $this->factory->new($requestType)));
            array_push($stmts, $this->factory->methodCall(
                new Variable("request"), 
                "set".ucfirst($propertyName), 
                [$this->factory->var($propertyName)]
            ));
            array_push($args, new Variable("request"));
        } else if (isset($requestType)) {
            $requestType = $this->useType($requestType);
            array_push($docBlockTags, ["param", $requestType, "\$request", "The query and body parameters to pass"]);

            $required = false;
            foreach($properties as $propertyName=>$attrs){
                $required = $required || $attrs[1];
            }

            $param = $this->factory->param("request");
            if(!$required){
                $requestType = new NullableType($requestType);
                $param->setDefault($this->factory->val(null));
            }
            $param->setType($requestType);
            $params[] = $param;
            array_push($args, new Variable("request"));
        } else {
            array_push($args, $this->factory->val(null));
        }
        if(isset($responseType)){
            $responseType = $this->useType($responseType);
            array_push($docBlockTags, ["return", $responseType]);
            array_push($args, $this->factory->classConstFetch($responseType, "class"));

            $deserializeException = $this->useType("Arimac\\Sigfox\\Exception\\DeserializeException");
            array_push($docBlockTags, ["throws", $deserializeException, "If failed to deserialize response body as a response object."]);
        } else {
            array_push($args, $this->factory->val(null));
        }

        if($requestType){
            $serializeException = $this->useType("Arimac\\Sigfox\\Exception\\SerializeException");
            array_push($docBlockTags, ["throws", $serializeException, "If request object failed to serialize to a JSON serializable type."]);
        }

        $unexpectedException = $this->useType("Arimac\\Sigfox\\Exception\\UnexpectedResponseException");
        array_push($docBlockTags, ["throws", $unexpectedException, "If server returned an unexpected status code."]);

        $astErrors = [];
        foreach($errors as $statusCode => $className){
            $className = $this->useType($className);
            array_push($docBlockTags, ["throws", $className, "If server returned a HTTP ".$statusCode." error."]);
            $astErrors[$statusCode] = $this->factory->classConstFetch($className, "class");
        }
        array_push($args, $this->factory->val($astErrors));

        if($responseType){
            $stmts[] = new Return_(new FuncCall(new Name("\$this->client->call"), $args));
            if($responseTypeNullable){
                $responseType = new NullableType($responseType);
            }
        } else {
            $stmts[] = new FuncCall(new Name("\$this->client->call"), $args);
            $responseType = "void";
        }

        $this->addMethod($methodName, $params, $stmts, $responseType, Helper::normalizeDocComment($description, $docBlockTags, 2));
    }

    public function getProperties(): array
    {
        return $this->properties;
    }
}
