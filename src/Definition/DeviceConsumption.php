<?php

namespace Arimac\Sigfox\Definition;

/**
 * The consumption for this device
 */
class DeviceConsumption
{
    /**
     * Identifier of the device consumption
     *
     * @var int
     */
    protected int $id;
    /**
     * Consumption of a device
     *
     * @var array
     */
    protected array $deviceConsumptions;
    /**
     * @param int id Identifier of the device consumption
     */
    function setId(int $id)
    {
        $this->id = $id;
    }
    /**
     * @return int Identifier of the device consumption
     */
    function getId() : int
    {
        return $this->id;
    }
    /**
     * @param array deviceConsumptions Consumption of a device
     */
    function setDeviceConsumptions(array $deviceConsumptions)
    {
        $this->deviceConsumptions = $deviceConsumptions;
    }
    /**
     * @return array Consumption of a device
     */
    function getDeviceConsumptions() : array
    {
        return $this->deviceConsumptions;
    }
}