<?php

namespace Arimac\Sigfox\Serializer\Impl;

use Arimac\Sigfox\Serializer\Serializer;

interface Model {
    /**
     * Returning all meta data to serialize and deserialize objects
     *
     * @internal
     *
     * @return Serializer[]
     */
    function getSerializeMetaData(): array;

    /**
     * Returning the weather the class is extendable or not
     *
     * @internal
     *
     * @return bool
     */
    function isExtendable(): bool;
}
