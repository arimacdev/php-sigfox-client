<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class BaseGeolocation extends Model
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
     * @return static To use in method chains
     */
    public function setName(?string $name)
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
        $serializers = array('id' => new PrimitiveSerializer('string'), 'name' => new PrimitiveSerializer('string'));
        return $serializers;
    }
}