<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Defines a telecommunication standard entity
 */
class MinStandard extends Model
{
    /**
     * The telecommunication standard identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * The telecommunication standard name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * Setter for id
     *
     * @param string $id The telecommunication standard identifier
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
     * @return string The telecommunication standard identifier
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * Setter for name
     *
     * @param string $name The telecommunication standard name
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
     * @return string The telecommunication standard name
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