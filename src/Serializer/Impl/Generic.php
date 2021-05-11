<?php

namespace Arimac\Sigfox\Serializer\Impl;

use Arimac\Sigfox\Serializer\Serializer;

interface Generic {
    static function serialize(string $className, string $propertyName, Serializer $itemSerializer, $value): self;

    static function deserialize(string $className, string $propertyName, Serializer $itemSerializer, $value): self;
}
