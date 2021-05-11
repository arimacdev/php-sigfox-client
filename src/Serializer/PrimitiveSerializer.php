<?php

namespace Arimac\Sigfox\Serializer;

class PrimitiveSerializer extends Serializer {
    protected string $type;

    public function __construct(string $classname, string $propertyName, string $type)
    {
        parent::__construct($classname, $propertyName);
        $this->type = $type;
    }
}
