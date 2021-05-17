<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\DeviceConsumption\DeviceConsumptionsItem;
use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
/**
 * The consumption for this device
 */
class DeviceConsumption extends Definition
{
    /**
     * Identifier of the device consumption
     *
     * @var int
     */
    protected ?int $id = null;
    /**
     * Consumption of a device
     *
     * @var DeviceConsumptionsItem[]
     */
    protected ?array $deviceConsumptions = null;
    /**
     * Setter for id
     *
     * @param int $id Identifier of the device consumption
     *
     * @return self To use in method chains
     */
    public function setId(?int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return int Identifier of the device consumption
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * Setter for deviceConsumptions
     *
     * @param DeviceConsumptionsItem[] $deviceConsumptions Consumption of a device
     *
     * @return self To use in method chains
     */
    public function setDeviceConsumptions(?array $deviceConsumptions) : self
    {
        $this->deviceConsumptions = $deviceConsumptions;
        return $this;
    }
    /**
     * Getter for deviceConsumptions
     *
     * @return DeviceConsumptionsItem[] Consumption of a device
     */
    public function getDeviceConsumptions() : ?array
    {
        return $this->deviceConsumptions;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('id' => new PrimitiveSerializer('int'), 'deviceConsumptions' => new ArraySerializer(new ClassSerializer(DeviceConsumptionsItem::class)));
        return $serializers;
    }
}