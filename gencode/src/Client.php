<?php

namespace Arimac\Sigfox\GenCode;

use PhpParser\Node\Expr\New_;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt\Return_;

class Client extends Class_ {
    protected $methods = [];

    public function setBaseUrl(string $url){
        $this->addMethod(
            "getBaseUrl",
            [],
            [new Return_($this->factory->val($url))],
            "string",
            Helper::normalizeDocComment([["inheritdoc", null], ["internal", null]], 2)
        );
    }

    public function addRepositoryMethod(string $methodName, string $returnType)
    {
        if(in_array($methodName, $this->methods)){
            return;
        }
        array_push($this->methods, $methodName);
        $returnType = $this->useType($returnType);

        $this->addMethod(
            $methodName,
            [],
            [
                new Return_(new New_(
                    new Name($returnType),
                    [$this->factory->propertyFetch(new Variable("this"), "client")]
                ))
            ],
            $returnType,
            Helper::normalizeDocComment([["return", $returnType]], 2)
        );
    }

}
