<?php

namespace Arimac\Sigfox;

use Arimac\Sigfox\Serializer\Impl\Definition as SerializeDefinition;

abstract class Definition implements SerializeDefinition
{

    protected array $required = [];

    protected array $validations = [];

    protected bool $extendable = false;

    /**
     * @inheritdoc
     */
    public abstract function getSerializeMetaData(): array;

    /**
     * @inheritdoc
     */
    function isExtendable(): bool
    {
        return $this->extendable;
    }
}
