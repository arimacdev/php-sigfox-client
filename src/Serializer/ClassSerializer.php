<?php

namespace Arimac\Sigfox\Serializer;

class ClassSerializer extends Serializer {
    protected string $name;

    public function __construct(string $className, string $propertyName, string $name)
    {
        parent::__construct($className, $propertyName);
        $this->propertyName = $propertyName;
        $this->name = $name;
    }
}
