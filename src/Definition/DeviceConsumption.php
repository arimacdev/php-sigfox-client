<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\DeviceConsumption\DeviceConsumptionsItemItem;
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
     * @var DeviceConsumption\DeviceConsumptionsItemItem
     */
    protected ?DeviceConsumption\DeviceConsumptionsItemItem $deviceConsumptions = null;
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
     * @param DeviceConsumption\DeviceConsumptionsItemItem $deviceConsumptions Consumption of a device
     */
    function setDeviceConsumptions(?DeviceConsumption\DeviceConsumptionsItemItem $deviceConsumptions)
    {
        $this->deviceConsumptions = $deviceConsumptions;
    }
    /**
     * @return DeviceConsumption\DeviceConsumptionsItemItem Consumption of a device
     */
    function getDeviceConsumptions() : ?DeviceConsumption\DeviceConsumptionsItemItem
    {
        return $this->deviceConsumptions;
    }
}