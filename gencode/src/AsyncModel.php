<?php

namespace Arimac\Sigfox\GenCode;

use PhpParser\Node\Stmt\Return_;

class AsyncModel extends Class_ {
    public function __construct(string $namespaceName, string $name, ?string $docComment = null)
    {
        parent::__construct($namespaceName, $name, $docComment);
        $this->extend("Arimac\\Sigfox\\Response\\Async\\AsyncModel");
    }
    public function setErrors(array $errors){
        $astErrors = [];
            foreach ($errors as $statusCode => $className) {
                $className = $this->useType($className);
                $astErrors[(int)$statusCode] = $this->factory->classConstFetch($className, "class");
            }
        $this->addMethod(
            "getErrors",
            [],
            [
                new Return_(
                    $this->factory->val($astErrors)
                )
            ],
            "array"
        );
    } 

    public function setEndpoint(string $endpoint){
        $this->addMethod(
            "getEndpoint",
            [],
            [
                new Return_(
                    $this->factory->val($endpoint)
                )
            ],
            "string"
        );
    }

    public function setResponseType(string $responseType){
        $responseType = $this->useType($responseType);
        $this->addMethod(
            "getResponseType",
            [],
            [
                new Return_(
                    $this->factory->classConstFetch($responseType, "class")
                )
            ],
            "string"
        );
    }
}
