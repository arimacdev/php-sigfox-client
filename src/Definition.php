<?php

namespace Arimac\Sigfox;

use Arimac\Sigfox\Serializer\Impl\Definition as SerializeDefinition;

abstract class Definition implements SerializeDefinition
{

    /**
     * @internal
     */
    protected array $required = [];

    /**
     * @internal
     */
    protected array $validations = [];

    /**
     * @internal
     */
    protected bool $extendable = false;

    /**
     * @internal
     *
     * @inheritdoc
     */
    public abstract function getSerializeMetaData(): array;

    /**
     * @internal
     *
     * @inheritdoc
     */
    function isExtendable(): bool
    {
        return $this->extendable;
    }
}
