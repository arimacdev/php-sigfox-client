<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\BaseDeviceType;
use Arimac\Sigfox\Definition\ContractId;
/**
 * Defines the device type's properties
 */
class DeviceTypeUpdate extends BaseDeviceType
{
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
    /** DIRECT */
    public const DOWNLINK_MODE_DIRECT = 0;
    /** CALLBACK */
    public const DOWNLINK_MODE_CALLBACK = 1;
    /** NONE */
    public const DOWNLINK_MODE_NONE = 2;
    /** MANAGED */
    public const DOWNLINK_MODE_MANAGED = 3;
    /**
     * The payload type
     * - `DeviceTypeUpdate::PAYLOAD_TYPE_REGULAR`
     * - `DeviceTypeUpdate::PAYLOAD_TYPE_CUSTOM_GRAMMAR`
     * - `DeviceTypeUpdate::PAYLOAD_TYPE_GEOLOCATION`
     * - `DeviceTypeUpdate::PAYLOAD_TYPE_DISPLAY_IN_ASCII`
     * - `DeviceTypeUpdate::PAYLOAD_TYPE_RADIO_PLANNING_FRAME`
     * - `DeviceTypeUpdate::PAYLOAD_TYPE_SENSITV2`
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
    /**
     * The downlink mode to use for the devices of this device type.
     * - `DeviceTypeUpdate::DOWNLINK_MODE_DIRECT`
     * - `DeviceTypeUpdate::DOWNLINK_MODE_CALLBACK`
     * - `DeviceTypeUpdate::DOWNLINK_MODE_NONE`
     * - `DeviceTypeUpdate::DOWNLINK_MODE_MANAGED`
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
     * The device types's description
     *
     * @var string
     */
    protected string $description;
    /**
     * The device type's contract identifier (must be on the same group than the device type)
     *
     * @var string
     */
    protected string $contractId;
    /**
     * The device type's contract identifiers (must be on the same group than the device type)
     *
     * @var ContractId[]
     */
    protected array $contracts;
    /**
     * The geoloc payload configuration identifier. Required if the payload type is Geolocation, else ignored.
     *
     * @var string
     */
    protected string $geolocPayloadConfigId;
    /**
     * Allows the automatic renewal of devices attached to this device type
     *
     * @var bool
     */
    protected bool $automaticRenewal;
    /**
     * @param int payloadType The payload type
     * - `DeviceTypeUpdate::PAYLOAD_TYPE_REGULAR`
     * - `DeviceTypeUpdate::PAYLOAD_TYPE_CUSTOM_GRAMMAR`
     * - `DeviceTypeUpdate::PAYLOAD_TYPE_GEOLOCATION`
     * - `DeviceTypeUpdate::PAYLOAD_TYPE_DISPLAY_IN_ASCII`
     * - `DeviceTypeUpdate::PAYLOAD_TYPE_RADIO_PLANNING_FRAME`
     * - `DeviceTypeUpdate::PAYLOAD_TYPE_SENSITV2`
     */
    function setPayloadType(int $payloadType)
    {
        $this->payloadType = $payloadType;
    }
    /**
     * @return int The payload type
     * - `DeviceTypeUpdate::PAYLOAD_TYPE_REGULAR`
     * - `DeviceTypeUpdate::PAYLOAD_TYPE_CUSTOM_GRAMMAR`
     * - `DeviceTypeUpdate::PAYLOAD_TYPE_GEOLOCATION`
     * - `DeviceTypeUpdate::PAYLOAD_TYPE_DISPLAY_IN_ASCII`
     * - `DeviceTypeUpdate::PAYLOAD_TYPE_RADIO_PLANNING_FRAME`
     * - `DeviceTypeUpdate::PAYLOAD_TYPE_SENSITV2`
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
     * @param int downlinkMode The downlink mode to use for the devices of this device type.
     * - `DeviceTypeUpdate::DOWNLINK_MODE_DIRECT`
     * - `DeviceTypeUpdate::DOWNLINK_MODE_CALLBACK`
     * - `DeviceTypeUpdate::DOWNLINK_MODE_NONE`
     * - `DeviceTypeUpdate::DOWNLINK_MODE_MANAGED`
     */
    function setDownlinkMode(int $downlinkMode)
    {
        $this->downlinkMode = $downlinkMode;
    }
    /**
     * @return int The downlink mode to use for the devices of this device type.
     * - `DeviceTypeUpdate::DOWNLINK_MODE_DIRECT`
     * - `DeviceTypeUpdate::DOWNLINK_MODE_CALLBACK`
     * - `DeviceTypeUpdate::DOWNLINK_MODE_NONE`
     * - `DeviceTypeUpdate::DOWNLINK_MODE_MANAGED`
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
     * @param string description The device types's description
     */
    function setDescription(string $description)
    {
        $this->description = $description;
    }
    /**
     * @return string The device types's description
     */
    function getDescription() : string
    {
        return $this->description;
    }
    /**
     * @param string contractId The device type's contract identifier (must be on the same group than the device type)
     */
    function setContractId(string $contractId)
    {
        $this->contractId = $contractId;
    }
    /**
     * @return string The device type's contract identifier (must be on the same group than the device type)
     */
    function getContractId() : string
    {
        return $this->contractId;
    }
    /**
     * @param ContractId[] contracts The device type's contract identifiers (must be on the same group than the device type)
     */
    function setContracts(array $contracts)
    {
        $this->contracts = $contracts;
    }
    /**
     * @return ContractId[] The device type's contract identifiers (must be on the same group than the device type)
     */
    function getContracts() : array
    {
        return $this->contracts;
    }
    /**
     * @param string geolocPayloadConfigId The geoloc payload configuration identifier. Required if the payload type is Geolocation, else ignored.
     */
    function setGeolocPayloadConfigId(string $geolocPayloadConfigId)
    {
        $this->geolocPayloadConfigId = $geolocPayloadConfigId;
    }
    /**
     * @return string The geoloc payload configuration identifier. Required if the payload type is Geolocation, else ignored.
     */
    function getGeolocPayloadConfigId() : string
    {
        return $this->geolocPayloadConfigId;
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