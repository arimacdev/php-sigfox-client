<?php

namespace Arimac\Sigfox\Definition;

class BaseDeviceType
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
     * The device type's name
     *
     * @var string
     */
    protected string $name;
    /**
     * The device type's description
     *
     * @var string
     */
    protected string $description;
    /**
     * The downlink mode to use for the devices of this device type
     * - `BaseDeviceType::DOWNLINK_MODE_DIRECT`
     * - `BaseDeviceType::DOWNLINK_MODE_CALLBACK`
     * - `BaseDeviceType::DOWNLINK_MODE_NONE`
     * - `BaseDeviceType::DOWNLINK_MODE_MANAGED`
     *
     * @var int
     */
    protected int $downlinkMode;
    /**
     * Downlink data to be sent to the devices of this device type if the downlinkMode is equal to 0.
     * It must be an 8 byte length message given in hexadecimal string format.
     *
     * @var string
     */
    protected string $downlinkDataString;
    /**
     * The payload type
     * - `BaseDeviceType::PAYLOAD_TYPE_REGULAR`
     * - `BaseDeviceType::PAYLOAD_TYPE_CUSTOM_GRAMMAR`
     * - `BaseDeviceType::PAYLOAD_TYPE_GEOLOCATION`
     * - `BaseDeviceType::PAYLOAD_TYPE_DISPLAY_IN_ASCII`
     * - `BaseDeviceType::PAYLOAD_TYPE_RADIO_PLANNING_FRAME`
     * - `BaseDeviceType::PAYLOAD_TYPE_SENSITV2`
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
     * Keep alive period in seconds (0 to not keep alive else 1800 second minimum)
     *
     * @var int
     */
    protected int $keepAlive;
    /**
     * Email address to contact in case of problems occurring while executing a callback. This field can be unset when updating.
     *
     * @var string
     */
    protected string $alertEmail;
    /**
     * Allows the automatic renewal of devices attached to this device type
     *
     * @var bool
     */
    protected bool $automaticRenewal;
    /**
     * @param string name The device type's name
     */
    function setName(string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The device type's name
     */
    function getName() : string
    {
        return $this->name;
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
     * @param int downlinkMode The downlink mode to use for the devices of this device type
     * - `BaseDeviceType::DOWNLINK_MODE_DIRECT`
     * - `BaseDeviceType::DOWNLINK_MODE_CALLBACK`
     * - `BaseDeviceType::DOWNLINK_MODE_NONE`
     * - `BaseDeviceType::DOWNLINK_MODE_MANAGED`
     */
    function setDownlinkMode(int $downlinkMode)
    {
        $this->downlinkMode = $downlinkMode;
    }
    /**
     * @return int The downlink mode to use for the devices of this device type
     * - `BaseDeviceType::DOWNLINK_MODE_DIRECT`
     * - `BaseDeviceType::DOWNLINK_MODE_CALLBACK`
     * - `BaseDeviceType::DOWNLINK_MODE_NONE`
     * - `BaseDeviceType::DOWNLINK_MODE_MANAGED`
     */
    function getDownlinkMode() : int
    {
        return $this->downlinkMode;
    }
    /**
     * @param string downlinkDataString Downlink data to be sent to the devices of this device type if the downlinkMode is equal to 0.
     * It must be an 8 byte length message given in hexadecimal string format.
     */
    function setDownlinkDataString(string $downlinkDataString)
    {
        $this->downlinkDataString = $downlinkDataString;
    }
    /**
     * @return string Downlink data to be sent to the devices of this device type if the downlinkMode is equal to 0.
     * It must be an 8 byte length message given in hexadecimal string format.
     */
    function getDownlinkDataString() : string
    {
        return $this->downlinkDataString;
    }
    /**
     * @param int payloadType The payload type
     * - `BaseDeviceType::PAYLOAD_TYPE_REGULAR`
     * - `BaseDeviceType::PAYLOAD_TYPE_CUSTOM_GRAMMAR`
     * - `BaseDeviceType::PAYLOAD_TYPE_GEOLOCATION`
     * - `BaseDeviceType::PAYLOAD_TYPE_DISPLAY_IN_ASCII`
     * - `BaseDeviceType::PAYLOAD_TYPE_RADIO_PLANNING_FRAME`
     * - `BaseDeviceType::PAYLOAD_TYPE_SENSITV2`
     */
    function setPayloadType(int $payloadType)
    {
        $this->payloadType = $payloadType;
    }
    /**
     * @return int The payload type
     * - `BaseDeviceType::PAYLOAD_TYPE_REGULAR`
     * - `BaseDeviceType::PAYLOAD_TYPE_CUSTOM_GRAMMAR`
     * - `BaseDeviceType::PAYLOAD_TYPE_GEOLOCATION`
     * - `BaseDeviceType::PAYLOAD_TYPE_DISPLAY_IN_ASCII`
     * - `BaseDeviceType::PAYLOAD_TYPE_RADIO_PLANNING_FRAME`
     * - `BaseDeviceType::PAYLOAD_TYPE_SENSITV2`
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
     * @param int keepAlive Keep alive period in seconds (0 to not keep alive else 1800 second minimum)
     */
    function setKeepAlive(int $keepAlive)
    {
        $this->keepAlive = $keepAlive;
    }
    /**
     * @return int Keep alive period in seconds (0 to not keep alive else 1800 second minimum)
     */
    function getKeepAlive() : int
    {
        return $this->keepAlive;
    }
    /**
     * @param string alertEmail Email address to contact in case of problems occurring while executing a callback. This field can be unset when updating.
     */
    function setAlertEmail(string $alertEmail)
    {
        $this->alertEmail = $alertEmail;
    }
    /**
     * @return string Email address to contact in case of problems occurring while executing a callback. This field can be unset when updating.
     */
    function getAlertEmail() : string
    {
        return $this->alertEmail;
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