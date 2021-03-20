<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\BaseDeviceType;
use Arimac\Sigfox\Definition\MinGroup;
use Arimac\Sigfox\Definition\MinContractInfo;
use Arimac\Sigfox\Definition\MinContractInfo;
use Arimac\Sigfox\Definition\MinContractInfo;
use Arimac\Sigfox\Definition\GeolocPayloadConfig;
/**
 * Defines the device type's properties
 */
class DeviceType extends BaseDeviceType
{
    /** DIRECT */
    public const DOWNLINK_MODE_DIRECT = 0;
    /** CALLBACK */
    public const DOWNLINK_MODE_CALLBACK = 1;
    /** NONE */
    public const DOWNLINK_MODE_NONE = 2;
    /** MANAGED */
    public const DOWNLINK_MODE_MANAGED = 3;
    /** Regular (raw payload) */
    public const PAYLOAD_TYPE_REGULAR = 2;
    /** Custom grammar */
    public const PAYLOAD_TYPE_CUSTOM_GRAMMAR = 3;
    /** Geolocation */
    public const PAYLOAD_TYPE_GEOLOCATION = 4;
    /** Display in ASCII */
    public const PAYLOAD_TYPE_DISPLAY_IN_ASCII = 5;
    /** Radio planning frame */
    public const PAYLOAD_TYPE_RADIO_PLANNING_FRAME = 6;
    /** Sensitv2 */
    public const PAYLOAD_TYPE_SENSITV2 = 9;
    /**
     * The device type's identifier
     *
     * @var string
     */
    protected string $id;
    /**
     * The device type's description
     *
     * @var string
     */
    protected string $description;
    /**
     * The downlink mode to use for the devices of this device type.
     * - `DeviceType::DOWNLINK_MODE_DIRECT`
     * - `DeviceType::DOWNLINK_MODE_CALLBACK`
     * - `DeviceType::DOWNLINK_MODE_NONE`
     * - `DeviceType::DOWNLINK_MODE_MANAGED`
     *
     * @var int
     */
    protected int $downlinkMode;
    /**
     * Downlink data to be sent to the devices of this device type if downlinkMode is equal to 0.
     * It must be an 8 byte length message given in hexadecimal string format.
     *
     * @var string
     */
    protected string $downlinkDataString;
    /**
     * The payload type
     * - `DeviceType::PAYLOAD_TYPE_REGULAR`
     * - `DeviceType::PAYLOAD_TYPE_CUSTOM_GRAMMAR`
     * - `DeviceType::PAYLOAD_TYPE_GEOLOCATION`
     * - `DeviceType::PAYLOAD_TYPE_DISPLAY_IN_ASCII`
     * - `DeviceType::PAYLOAD_TYPE_RADIO_PLANNING_FRAME`
     * - `DeviceType::PAYLOAD_TYPE_SENSITV2`
     *
     * @var int
     */
    protected int $payloadType;
    /**
     * The payload configuration. Required if the payload type is Custom, else ignored.
     *
     * @var string
     */
    protected string $payloadConfig;
    /** @var MinGroup */
    protected MinGroup $group;
    /** @var MinContractInfo */
    protected MinContractInfo $contract;
    /**
     * The list of the contracts associated with the device type
     *
     * @var MinContractInfo[]
     */
    protected array $contracts;
    /**
     * The list of the contracts that were associated with the device type at some point, but are not anymore.
     *
     * @var MinContractInfo[]
     */
    protected array $detachedContracts;
    /** @var GeolocPayloadConfig */
    protected GeolocPayloadConfig $geolocPayloadConfig;
    /**
     * Date of the creation of this device type (in milliseconds)
     *
     * @var int
     */
    protected int $creationTime;
    /**
     * Identifier of the user who created this device type
     *
     * @var string
     */
    protected string $createdBy;
    /**
     * Date of the last edition of this device type (in milliseconds)
     *
     * @var int
     */
    protected int $lastEditionTime;
    /**
     * Identifier of the user who last edited this device type
     *
     * @var string
     */
    protected string $lastEditedBy;
    /**
     * Allows the automatic renewal of devices attached to this device type
     *
     * @var bool
     */
    protected bool $automaticRenewal;
    /**
     * @param string id The device type's identifier
     */
    function setId(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The device type's identifier
     */
    function getId() : string
    {
        return $this->id;
    }
    /**
     * @param string description The device type's description
     */
    function setDescription(string $description)
    {
        $this->description = $description;
    }
    /**
     * @return string The device type's description
     */
    function getDescription() : string
    {
        return $this->description;
    }
    /**
     * @param int downlinkMode The downlink mode to use for the devices of this device type.
     * - `DeviceType::DOWNLINK_MODE_DIRECT`
     * - `DeviceType::DOWNLINK_MODE_CALLBACK`
     * - `DeviceType::DOWNLINK_MODE_NONE`
     * - `DeviceType::DOWNLINK_MODE_MANAGED`
     */
    function setDownlinkMode(int $downlinkMode)
    {
        $this->downlinkMode = $downlinkMode;
    }
    /**
     * @return int The downlink mode to use for the devices of this device type.
     * - `DeviceType::DOWNLINK_MODE_DIRECT`
     * - `DeviceType::DOWNLINK_MODE_CALLBACK`
     * - `DeviceType::DOWNLINK_MODE_NONE`
     * - `DeviceType::DOWNLINK_MODE_MANAGED`
     */
    function getDownlinkMode() : int
    {
        return $this->downlinkMode;
    }
    /**
     * @param string downlinkDataString Downlink data to be sent to the devices of this device type if downlinkMode is equal to 0.
     * It must be an 8 byte length message given in hexadecimal string format.
     */
    function setDownlinkDataString(string $downlinkDataString)
    {
        $this->downlinkDataString = $downlinkDataString;
    }
    /**
     * @return string Downlink data to be sent to the devices of this device type if downlinkMode is equal to 0.
     * It must be an 8 byte length message given in hexadecimal string format.
     */
    function getDownlinkDataString() : string
    {
        return $this->downlinkDataString;
    }
    /**
     * @param int payloadType The payload type
     * - `DeviceType::PAYLOAD_TYPE_REGULAR`
     * - `DeviceType::PAYLOAD_TYPE_CUSTOM_GRAMMAR`
     * - `DeviceType::PAYLOAD_TYPE_GEOLOCATION`
     * - `DeviceType::PAYLOAD_TYPE_DISPLAY_IN_ASCII`
     * - `DeviceType::PAYLOAD_TYPE_RADIO_PLANNING_FRAME`
     * - `DeviceType::PAYLOAD_TYPE_SENSITV2`
     */
    function setPayloadType(int $payloadType)
    {
        $this->payloadType = $payloadType;
    }
    /**
     * @return int The payload type
     * - `DeviceType::PAYLOAD_TYPE_REGULAR`
     * - `DeviceType::PAYLOAD_TYPE_CUSTOM_GRAMMAR`
     * - `DeviceType::PAYLOAD_TYPE_GEOLOCATION`
     * - `DeviceType::PAYLOAD_TYPE_DISPLAY_IN_ASCII`
     * - `DeviceType::PAYLOAD_TYPE_RADIO_PLANNING_FRAME`
     * - `DeviceType::PAYLOAD_TYPE_SENSITV2`
     */
    function getPayloadType() : int
    {
        return $this->payloadType;
    }
    /**
     * @param string payloadConfig The payload configuration. Required if the payload type is Custom, else ignored.
     */
    function setPayloadConfig(string $payloadConfig)
    {
        $this->payloadConfig = $payloadConfig;
    }
    /**
     * @return string The payload configuration. Required if the payload type is Custom, else ignored.
     */
    function getPayloadConfig() : string
    {
        return $this->payloadConfig;
    }
    /**
     * @param MinGroup group
     */
    function setGroup(MinGroup $group)
    {
        $this->group = $group;
    }
    /**
     * @return MinGroup group
     */
    function getGroup() : MinGroup
    {
        return $this->group;
    }
    /**
     * @param MinContractInfo contract
     */
    function setContract(MinContractInfo $contract)
    {
        $this->contract = $contract;
    }
    /**
     * @return MinContractInfo contract
     */
    function getContract() : MinContractInfo
    {
        return $this->contract;
    }
    /**
     * @param MinContractInfo[] contracts The list of the contracts associated with the device type
     */
    function setContracts(array $contracts)
    {
        $this->contracts = $contracts;
    }
    /**
     * @return MinContractInfo[] The list of the contracts associated with the device type
     */
    function getContracts() : array
    {
        return $this->contracts;
    }
    /**
     * @param MinContractInfo[] detachedContracts The list of the contracts that were associated with the device type at some point, but are not anymore.
     */
    function setDetachedContracts(array $detachedContracts)
    {
        $this->detachedContracts = $detachedContracts;
    }
    /**
     * @return MinContractInfo[] The list of the contracts that were associated with the device type at some point, but are not anymore.
     */
    function getDetachedContracts() : array
    {
        return $this->detachedContracts;
    }
    /**
     * @param GeolocPayloadConfig geolocPayloadConfig
     */
    function setGeolocPayloadConfig(GeolocPayloadConfig $geolocPayloadConfig)
    {
        $this->geolocPayloadConfig = $geolocPayloadConfig;
    }
    /**
     * @return GeolocPayloadConfig geolocPayloadConfig
     */
    function getGeolocPayloadConfig() : GeolocPayloadConfig
    {
        return $this->geolocPayloadConfig;
    }
    /**
     * @param int creationTime Date of the creation of this device type (in milliseconds)
     */
    function setCreationTime(int $creationTime)
    {
        $this->creationTime = $creationTime;
    }
    /**
     * @return int Date of the creation of this device type (in milliseconds)
     */
    function getCreationTime() : int
    {
        return $this->creationTime;
    }
    /**
     * @param string createdBy Identifier of the user who created this device type
     */
    function setCreatedBy(string $createdBy)
    {
        $this->createdBy = $createdBy;
    }
    /**
     * @return string Identifier of the user who created this device type
     */
    function getCreatedBy() : string
    {
        return $this->createdBy;
    }
    /**
     * @param int lastEditionTime Date of the last edition of this device type (in milliseconds)
     */
    function setLastEditionTime(int $lastEditionTime)
    {
        $this->lastEditionTime = $lastEditionTime;
    }
    /**
     * @return int Date of the last edition of this device type (in milliseconds)
     */
    function getLastEditionTime() : int
    {
        return $this->lastEditionTime;
    }
    /**
     * @param string lastEditedBy Identifier of the user who last edited this device type
     */
    function setLastEditedBy(string $lastEditedBy)
    {
        $this->lastEditedBy = $lastEditedBy;
    }
    /**
     * @return string Identifier of the user who last edited this device type
     */
    function getLastEditedBy() : string
    {
        return $this->lastEditedBy;
    }
    /**
     * @param bool automaticRenewal Allows the automatic renewal of devices attached to this device type
     */
    function setAutomaticRenewal(bool $automaticRenewal)
    {
        $this->automaticRenewal = $automaticRenewal;
    }
    /**
     * @return bool Allows the automatic renewal of devices attached to this device type
     */
    function getAutomaticRenewal() : bool
    {
        return $this->automaticRenewal;
    }
}