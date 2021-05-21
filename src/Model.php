<?php

namespace Arimac\Sigfox;

use Arimac\Sigfox\Exception\DeserializeException;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\Impl\Model as SerializeModel;
use Arimac\Sigfox\Validator\Validate;

class Model implements SerializeModel, Validate
{
    /**
     * Initializing a model from an array
     *
     * @throws DeserializeException If provided an invalid type to a property
     *
     * @param array|null $params Pass this parameter if you want to initial
     *                           property value from an array. See API
     *                           reference for all property names and types
     *
     * @return static
     */
    public static function from(array $params)
    {
        $serializer = new ClassSerializer(static::class);
        $obj = $serializer->deserialize($params);
        return $obj;
    }

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
