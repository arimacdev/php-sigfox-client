<?php

namespace Arimac\Sigfox\Response\Generated;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class DeviceTypesCreateResponse extends Definition
{
    /**
     * The new created device type's identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * Setter for id
     *
     * @param string $id The new created device type's identifier
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
     * @return string The new created device type's identifier
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('id' => new PrimitiveSerializer(self::class, 'id', 'string'));
    }
}