<?php

namespace Arimac\Sigfox\Serializer\Impl;

use Arimac\Sigfox\Serializer\Serializer;

interface Generic {
    static function serialize(Serializer $itemSerializer, $value): self;

    static function deserialize(Serializer $itemSerializer, $value): self;
}
