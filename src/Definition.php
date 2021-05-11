<?php

namespace Arimac\Sigfox;

use Arimac\Sigfox\Serializer\Impl\Definition as SerializeDefinition;

class Definition implements SerializeDefinition
{

    protected array $required = [];

    protected array $validations = [];

    protected array $serialize = [];

    protected bool $extendable = false;

    function getSerializeMetaData(): array
    {
        return $this->serialize;
    }

    function isExtendable(): bool
    {
        return $this->extendable;
    }
}
