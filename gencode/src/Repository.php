<?php

namespace Arimac\Sigfox\GenCode;

use PhpParser\Node\Arg;
use PhpParser\Node\Expr\Assign;
use PhpParser\Node\Expr\New_;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
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
        $method = $this->factory->method("find");
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

    public function getProperties(): array
    {
        return $this->properties;
    }
}
