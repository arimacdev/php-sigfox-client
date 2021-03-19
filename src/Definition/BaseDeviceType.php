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
     */
    protected string $name;
    /**
     * The device type's description
     */
    protected string $description;
    /**
     * The downlink mode to use for the devices of this device type
     * - `BaseDeviceType::DOWNLINK_MODE_DIRECT`
     * - `BaseDeviceType::DOWNLINK_MODE_CALLBACK`
     * - `BaseDeviceType::DOWNLINK_MODE_NONE`
     * - `BaseDeviceType::DOWNLINK_MODE_MANAGED`
     */
    protected int $downlinkMode;
    /**
     * Downlink data to be sent to the devices of this device type if the downlinkMode is equal to 0.
     * It must be an 8 byte length message given in hexadecimal string format.
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
     */
    protected int $payloadType;
    /**
     * The payload configuration. Required if the payload type is Custom, else ignored.
     */
    protected string $payloadConfig;
    /**
     * Keep alive period in seconds (0 to not keep alive else 1800 second minimum)
     */
    protected int $keepAlive;
    /**
     * Email address to contact in case of problems occurring while executing a callback. This field can be unset when updating.
     */
    protected string $alertEmail;
    /**
     * Allows the automatic renewal of devices attached to this device type
     */
    protected bool $automaticRenewal;
}