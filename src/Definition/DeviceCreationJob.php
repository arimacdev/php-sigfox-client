<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonDevice;
use Arimac\Sigfox\Definition\SingleDeviceFields;
class DeviceCreationJob extends SingleDeviceFields
{
    /**
     * The device type's identifier this device is affected
     *
     * @var string
     */
    protected string $deviceTypeId;
    /**
     * The device's PAC (Porting Access Code)
     *
     * @var string
     */
    protected string $pac;
    /**
     * Set to true if the device is a prototype
     *
     * @var bool
     */
    protected ?bool $prototype;
    /**
     * Subscribtion to automatic token renewal
     *
     * @var bool
     */
    protected ?bool $automaticRenewal;
    /**
     * The device is activable and can take a token
     *
     * @var bool
     */
    protected ?bool $activable;
    /**
     * The device's provided latitude
     *
     * @var int
     */
    protected ?int $lat;
    /**
     * The device's provided longitude
     *
     * @var int
     */
    protected ?int $lng;
}