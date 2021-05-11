<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Defines a product or modem certificate type entity
 */
class Certificate extends Definition
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
    protected $serialize = array(new PrimitiveSerializer(self::class, 'id', 'string'), new PrimitiveSerializer(self::class, 'key', 'string'));
    /**
     * Setter for id
     *
     * @param string $id The product certificate's identifier
     *
     * @return self To use in method chains
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return string The product certificate's identifier
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Setter for key
     *
     * @param string $key The product certificate's name
     *
     * @return self To use in method chains
     */
    public function setKey(?string $key) : self
    {
        $this->key = $key;
        return $this;
    }
    /**
     * Getter for key
     *
     * @return string The product certificate's name
     */
    public function getKey() : string
    {
        return $this->key;
    }
}