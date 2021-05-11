<?php

namespace Arimac\Sigfox\Serializer\Impl;

interface Definition {
    /**
     * Returning all meta data to serialize and deserialize objects
     *
     * @return Serializer[]
     */
    function getSerializeMetaData(): array;

    /**
     * Returning the weather the class is extendable or not
     *
     * @return bool
     */
    function isExtendable(): bool;
}
