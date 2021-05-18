<?php

namespace Arimac\Sigfox\Test\Unit\Validatable;

use Arimac\Sigfox\Validator\Rules\Child;
use Arimac\Sigfox\Validator\Rules\ChildSet;

class FooParent extends Foo {
    protected ?array $childs = null;

    protected ?Foo $parent = null;

    public function setChilds(?array $childs){
        $this->childs = $childs;
    }

    public function getChilds(): ?array {
        return $this->childs;
    }

    public function setParent(?Foo $parent){
        $this->parent = $parent;
    }

    public function getParent(): ?Foo {
        return $this->parent;
    }

    public function getValidationMetaData(): array
    {
        $rules = parent::getValidationMetaData();
        $rules["childs"] = [new ChildSet];
        $rules["parent"] = [new Child];
        return $rules;
    }
}
