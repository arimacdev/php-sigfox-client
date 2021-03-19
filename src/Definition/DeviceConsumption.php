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
}