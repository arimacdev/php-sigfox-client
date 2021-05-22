<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class DeviceUpdateJob extends Model
{
    use SingleDeviceFields;
    /**
     * The device's name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * Setter for name
     *
     * @param string $name The device's name
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
     * @return string The device's name
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
        $serializers = array('name' => new PrimitiveSerializer('string'));
        $serializers = array_merge($serializers, $this->getSerializeMetaDataSingleDeviceFields());
        return $serializers;
    }
}