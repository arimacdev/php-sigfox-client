<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\DeviceConsumption\DeviceConsumptionsItem;
use Arimac\Sigfox\Definition;
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
     * @param int $id Identifier of the device consumption
     */
    function setId(?int $id)
    {
        $this->id = $id;
    }
    /**
     * @return int Identifier of the device consumption
     */
    function getId() : ?int
    {
        return $this->id;
    }
    /**
     * @param DeviceConsumptionsItem[] $deviceConsumptions Consumption of a device
     */
    function setDeviceConsumptions(?array $deviceConsumptions)
    {
        $this->deviceConsumptions = $deviceConsumptions;
    }
    /**
     * @return DeviceConsumptionsItem[] Consumption of a device
     */
    function getDeviceConsumptions() : ?array
    {
        return $this->deviceConsumptions;
    }
}