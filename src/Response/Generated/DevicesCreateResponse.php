<?php

namespace Arimac\Sigfox\Response\Generated;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class DevicesCreateResponse extends Model
{
    /**
     * The device's identifier (hexadecimal format)
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * Setter for id
     *
     * @internal
     *
     * @param string $id The device's identifier (hexadecimal format)
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
     * @return string The device's identifier (hexadecimal format)
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('id' => new PrimitiveSerializer('string'));
        return $serializers;
    }
}