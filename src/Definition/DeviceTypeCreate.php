<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\BaseDeviceType;
use Arimac\Sigfox\Definition\ContractId;
/**
 * Defines the device type's properties that can or lust be be included during creation
 */
class DeviceTypeCreate extends BaseDeviceType
{
    /**
     * The device type's group identifier
     *
     * @var string
     */
    protected string $groupId;
    /**
     * The device type's contract identifier
     *
     * @var string
     */
    protected ?string $contractId;
    /**
     * The device type's contract identifiers
     *
     * @var ContractId[]
     */
    protected array $contracts;
    /**
     * The geoloc payload configuration identifier. Required if the payload type is Geolocation, else ignored.
     *
     * @var string
     */
    protected ?string $geolocPayloadConfigId;
}