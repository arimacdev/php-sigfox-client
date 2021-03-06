<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Defines a product or modem certificate type entity
 */
class Certificate extends Model
{
    /**
     * The product certificate's identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * The product certificate's name
     *
     * @var string
     */
    protected ?string $key = null;
    /**
     * Setter for id
     *
     * @param string $id The product certificate's identifier
     *
     * @return static To use in method chains
     */
    public function setId(?string $id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return string The product certificate's identifier
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * Setter for key
     *
     * @param string $key The product certificate's name
     *
     * @return static To use in method chains
     */
    public function setKey(?string $key)
    {
        $this->key = $key;
        return $this;
    }
    /**
     * Getter for key
     *
     * @return string The product certificate's name
     */
    public function getKey() : ?string
    {
        return $this->key;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('id' => new PrimitiveSerializer('string'), 'key' => new PrimitiveSerializer('string'));
        return $serializers;
    }
}