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
        foreach ($parameters as $param) {
            $params[] = new Param(new Variable($param[0]), null, $param[1]);

            $this->addProperty($param[0], $param[1], $param[2]?Helper::normalizeDocComment($param[2],2):null);

            $stmts[] = new Assign(
                new Variable("this->" . $param[0]),
                new Variable($param[0])
            );
        }

        $this->addMethod(
            "__construct",
            $params,
            $stmts,
            null,
            Helper::normalizeDocComment(
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
                }, $parameters),
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
        ?string $requestType = null,
        ?string $docComment = null
    ) {

        $endpoint = new String_($endpoint);
        if (count($this->properties)) {
            $params = [$endpoint];
            foreach ($this->properties as $property) {
                $name = $property[0];
                array_push($params, new Variable("this->$name"));
            }
            $endpoint = new FuncCall(new Name("\$this->bind"), $params);
        }

        $args = [
            new String_($requestMethod),
            $endpoint,
        ];

        $params = [];

        if (isset($requestType)) {
            $requestType = $this->useType($requestType);
            $param = $this->factory->param("request");
            $param->setType($this->useType($requestType));
            $params[] = $param;
            array_push($args, new Variable("request"));
        } else {
            array_push($args, $this->factory->val(null));
        }
        if(isset($responseType)){
            $responseType = $this->useType($responseType);
            array_push($args, $this->factory->classConstFetch($responseType, "class"));
        }

        $stmts = [new Return_(new FuncCall(new Name("\$this->client->request"), $args))];


        $this->addMethod($methodName, $params, $stmts, $responseType, $docComment);
    }

    public function getProperties(): array
    {
        return $this->properties;
    }
}
