<?php

namespace Arimac\Sigfox;

use Arimac\Sigfox\Serializer\Impl\Model as SerializeModel;
use Arimac\Sigfox\Validator\Validate;

abstract class Model implements SerializeModel, Validate
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
    public function getSerializeMetaData(): array {
        return [];
    }

    /**
     * @internal
     *
     * @inheritdoc
     */
    public function getValidationMetaData(): array {
        return [];
    }

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
