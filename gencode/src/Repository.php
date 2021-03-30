<?php

namespace Arimac\Sigfox\GenCode;

use PhpParser\Node\Arg;
use PhpParser\Node\Expr\Assign;
use PhpParser\Node\Expr\FuncCall;
use PhpParser\Node\Expr\New_;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Scalar\String_;
use PhpParser\Node\Stmt\ClassMethod;
use PhpParser\Node\Stmt\Function_;
use PhpParser\Node\Stmt\Return_;

class Repository extends ClassExt
{

    protected array $properties = [];

    public function addFindMethod(
        string $name,
        string $type,
        string $returnType,
        ?string $message = null
    ) {
        $methodName = "find";
        if(in_array($name,["year", "month"])){
            $methodName = $name;
        }
        $method = $this->factory->method($methodName);
        $method->addParam(new Param(new Variable($name), null, $type));
        $method->setReturnType($returnType);
        $method->makePublic();

        $args = array_map(function ($property) {
            return new Arg(new Variable("this->" . $property[0]));
        }, $this->properties);
        $args[] = new Arg(new Variable($name));
        $method->addStmt(new Return_(new New_(
            new Name($returnType),
            $args
        )));
        if ($message) {
            $method->setDocComment($this->formatDocComment(
                "method",
                null,
                [
                    ["param", "$type \$$name $message"],
                    ["return", "$returnType"]
                ]
            ));
        }
        $this->class->addStmt($method);
    }

    public function addConstructor(array $parameters)
    {
        $this->properties = $parameters;

        $method = $this->factory->method("__construct");
        foreach ($parameters as $param) {
            $method->addParam(new Param(new Variable($param[0]), null, $param[1]));
            $property = $this->factory->property($param[0]);
            $property->setType($param[1]);
            if (isset($param[2])) {
                $property->setDocComment($this->formatDocComment(
                    "property",
                    $param[2]
                ));
            }
            $property->makeProtected();
            $this->class->addStmt($property);

            $method->addStmt(new Assign(
                new Variable("this->" . $param[0]),
                new Variable($param[0])
            ));
        }
        $method->setDocComment($this->formatDocComment(
            "method",
            "Creating the repository",
            array_map(function ($parameters) {
                $docComment = $parameters[2] ?? null;
                $name = $parameters[0];
                $type = $parameters[1];
                if ($docComment) {
                    return ["param", "$type \$$name $docComment"];
                } else {
                    return ["param", "$type \$$name"];
                }
            }, $parameters)
        ));
        $this->class->addStmt($method);
    }

    public function addRepositoryMethod(string $methodName, string $returnType)
    {
        $method = $this->factory->method($methodName);
        $method->setReturnType($returnType);
        $method->makePublic();

        $args = array_map(function ($property) {
            return new Arg(new Variable("this->" . $property[0]));
        }, $this->properties);
        $method->addStmt(new Return_(new New_(
            new Name($returnType),
            $args
        )));
        $method->setDocComment($this->formatDocComment(
            "method",
            null,
            [
                ["return", "$returnType"]
            ]
        ));
        $this->class->addStmt($method);
    }

    public function addRequestMethod(
        string $methodName, 
        string $requestMethod, 
        string $endpoint,
        string $requestType,
        string $responseType,
        ?string $message = null
    ){
        $method = $this->factory->method($methodName);
        $param = $this->factory->param("request");
        $param->setType($requestType);
        $method->addParam($param);
        $method->setReturnType($responseType);
        $method->setDocComment($this->formatDocComment("request", $message, [
            ["param", "$requestType \$request"],
            ["return", $responseType]
        ]));

        $stmt = new Return_(new FuncCall(new Name("\$this->client->request"),[
            new String_($requestMethod),
            new String_($endpoint),
            new Variable("request"),
            new String_($responseType)
        ]));

        $method->addStmt($stmt);

        $this->class->addStmt($method);
        
    }

    public function getProperties(): array
    {
        return $this->properties;
    }
}
