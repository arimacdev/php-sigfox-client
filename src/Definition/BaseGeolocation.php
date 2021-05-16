<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class BaseGeolocation extends Definition
{
    /**
     * Geolocation payload's id
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * Geolocation payload's name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * Setter for id
     *
     * @param string $id Geolocation payload's id
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
     * @return string Geolocation payload's id
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * Setter for name
     *
     * @param string $name Geolocation payload's name
     *
     * @return self To use in method chains
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Getter for name
     *
     * @return string Geolocation payload's name
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        return array('id' => new PrimitiveSerializer(self::class, 'id', 'string'), 'name' => new PrimitiveSerializer(self::class, 'name', 'string'));
    }
}