<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\MaxLength;
use Arimac\Sigfox\Validator\Rules\Min;
class BaseDeviceType extends Model
{
    /**
     * DIRECT
     */
    public const DOWNLINK_MODE_DIRECT = 0;
    /**
     * CALLBACK
     */
    public const DOWNLINK_MODE_CALLBACK = 1;
    /**
     * NONE
     */
    public const DOWNLINK_MODE_NONE = 2;
    /**
     * MANAGED
     */
    public const DOWNLINK_MODE_MANAGED = 3;
    /**
     * Regular (raw payload)
     */
    public const PAYLOAD_TYPE_REGULAR = 2;
    /**
     * Custom grammar
     */
    public const PAYLOAD_TYPE_CUSTOM_GRAMMAR = 3;
    /**
     * Geolocation
     */
    public const PAYLOAD_TYPE_GEOLOCATION = 4;
    /**
     * Display in ASCII
     */
    public const PAYLOAD_TYPE_DISPLAY_IN_ASCII = 5;
    /**
     * Radio planning frame
     */
    public const PAYLOAD_TYPE_RADIO_PLANNING_FRAME = 6;
    /**
     * Sensitv2
     */
    public const PAYLOAD_TYPE_SENSITV2 = 9;
    /**
     * The device type's name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * The device type's description
     *
     * @var string
     */
    protected ?string $description = null;
    /**
     * The downlink mode to use for the devices of this device type
     * 
     * - {@see BaseDeviceType::DOWNLINK_MODE_DIRECT}
     * - {@see BaseDeviceType::DOWNLINK_MODE_CALLBACK}
     * - {@see BaseDeviceType::DOWNLINK_MODE_NONE}
     * - {@see BaseDeviceType::DOWNLINK_MODE_MANAGED}
     *
     * @var int
     */
    protected ?int $downlinkMode = null;
    /**
     * Downlink data to be sent to the devices of this device type if the downlinkMode is equal to 0.
     * It must be an 8 byte length message given in hexadecimal string format.
     *
     * @var string
     */
    protected ?string $downlinkDataString = null;
    /**
     * The payload type
     * 
     * - {@see BaseDeviceType::PAYLOAD_TYPE_REGULAR}
     * - {@see BaseDeviceType::PAYLOAD_TYPE_CUSTOM_GRAMMAR}
     * - {@see BaseDeviceType::PAYLOAD_TYPE_GEOLOCATION}
     * - {@see BaseDeviceType::PAYLOAD_TYPE_DISPLAY_IN_ASCII}
     * - {@see BaseDeviceType::PAYLOAD_TYPE_RADIO_PLANNING_FRAME}
     * - {@see BaseDeviceType::PAYLOAD_TYPE_SENSITV2}
     *
     * @var int
     */
    protected ?int $payloadType = null;
    /**
     * The payload configuration. Required if the payload type is Custom, else ignored.
     *
     * @var string
     */
    protected ?string $payloadConfig = null;
    /**
     * Keep alive period in seconds (0 to not keep alive else 1800 second minimum)
     *
     * @var int
     */
    protected ?int $keepAlive = null;
    /**
     * Email address to contact in case of problems occurring while executing a callback. This field can be unset
     * when updating.
     *
     * @var string
     */
    protected ?string $alertEmail = null;
    /**
     * Allows the automatic renewal of devices attached to this device type
     *
     * @var bool
     */
    protected ?bool $automaticRenewal = null;
    /**
     * Setter for name
     *
     * @param string $name The device type's name
     *
     * @return static To use in method chains
     */
    public function setName(?string $name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Getter for name
     *
     * @return string The device type's name
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Setter for description
     *
     * @param string $description The device type's description
     *
     * @return static To use in method chains
     */
    public function setDescription(?string $description)
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Getter for description
     *
     * @return string The device type's description
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Setter for downlinkMode
     *
     * @param int $downlinkMode The downlink mode to use for the devices of this device type
     *                          
     *                          - {@see BaseDeviceType::DOWNLINK_MODE_DIRECT}
     *                          - {@see BaseDeviceType::DOWNLINK_MODE_CALLBACK}
     *                          - {@see BaseDeviceType::DOWNLINK_MODE_NONE}
     *                          - {@see BaseDeviceType::DOWNLINK_MODE_MANAGED}
     *                          
     *
     * @return static To use in method chains
     */
    public function setDownlinkMode(?int $downlinkMode)
    {
        $this->downlinkMode = $downlinkMode;
        return $this;
    }
    /**
     * Getter for downlinkMode
     *
     * @return int The downlink mode to use for the devices of this device type
     *             
     *             - {@see BaseDeviceType::DOWNLINK_MODE_DIRECT}
     *             - {@see BaseDeviceType::DOWNLINK_MODE_CALLBACK}
     *             - {@see BaseDeviceType::DOWNLINK_MODE_NONE}
     *             - {@see BaseDeviceType::DOWNLINK_MODE_MANAGED}
     *             
     */
    public function getDownlinkMode() : ?int
    {
        return $this->downlinkMode;
    }
    /**
     * Setter for downlinkDataString
     *
     * @param string $downlinkDataString Downlink data to be sent to the devices of this device type if the
     *                                   downlinkMode is equal to 0.
     *                                   It must be an 8 byte length message given in hexadecimal string format.
     *                                   
     *
     * @return static To use in method chains
     */
    public function setDownlinkDataString(?string $downlinkDataString)
    {
        $this->downlinkDataString = $downlinkDataString;
        return $this;
    }
    /**
     * Getter for downlinkDataString
     *
     * @return string Downlink data to be sent to the devices of this device type if the downlinkMode is equal to 0.
     *                It must be an 8 byte length message given in hexadecimal string format.
     *                
     */
    public function getDownlinkDataString() : ?string
    {
        return $this->downlinkDataString;
    }
    /**
     * Setter for payloadType
     *
     * @param int $payloadType The payload type
     *                         
     *                         - {@see BaseDeviceType::PAYLOAD_TYPE_REGULAR}
     *                         - {@see BaseDeviceType::PAYLOAD_TYPE_CUSTOM_GRAMMAR}
     *                         - {@see BaseDeviceType::PAYLOAD_TYPE_GEOLOCATION}
     *                         - {@see BaseDeviceType::PAYLOAD_TYPE_DISPLAY_IN_ASCII}
     *                         - {@see BaseDeviceType::PAYLOAD_TYPE_RADIO_PLANNING_FRAME}
     *                         - {@see BaseDeviceType::PAYLOAD_TYPE_SENSITV2}
     *                         
     *
     * @return static To use in method chains
     */
    public function setPayloadType(?int $payloadType)
    {
        $this->payloadType = $payloadType;
        return $this;
    }
    /**
     * Getter for payloadType
     *
     * @return int The payload type
     *             
     *             - {@see BaseDeviceType::PAYLOAD_TYPE_REGULAR}
     *             - {@see BaseDeviceType::PAYLOAD_TYPE_CUSTOM_GRAMMAR}
     *             - {@see BaseDeviceType::PAYLOAD_TYPE_GEOLOCATION}
     *             - {@see BaseDeviceType::PAYLOAD_TYPE_DISPLAY_IN_ASCII}
     *             - {@see BaseDeviceType::PAYLOAD_TYPE_RADIO_PLANNING_FRAME}
     *             - {@see BaseDeviceType::PAYLOAD_TYPE_SENSITV2}
     *             
     */
    public function getPayloadType() : ?int
    {
        return $this->payloadType;
    }
    /**
     * Setter for payloadConfig
     *
     * @param string $payloadConfig The payload configuration. Required if the payload type is Custom, else ignored.
     *
     * @return static To use in method chains
     */
    public function setPayloadConfig(?string $payloadConfig)
    {
        $this->payloadConfig = $payloadConfig;
        return $this;
    }
    /**
     * Getter for payloadConfig
     *
     * @return string The payload configuration. Required if the payload type is Custom, else ignored.
     */
    public function getPayloadConfig() : ?string
    {
        return $this->payloadConfig;
    }
    /**
     * Setter for keepAlive
     *
     * @param int $keepAlive Keep alive period in seconds (0 to not keep alive else 1800 second minimum)
     *
     * @return static To use in method chains
     */
    public function setKeepAlive(?int $keepAlive)
    {
        $this->keepAlive = $keepAlive;
        return $this;
    }
    /**
     * Getter for keepAlive
     *
     * @return int Keep alive period in seconds (0 to not keep alive else 1800 second minimum)
     */
    public function getKeepAlive() : ?int
    {
        return $this->keepAlive;
    }
    /**
     * Setter for alertEmail
     *
     * @param string $alertEmail Email address to contact in case of problems occurring while executing a callback.
     *                           This field can be unset when updating.
     *
     * @return static To use in method chains
     */
    public function setAlertEmail(?string $alertEmail)
    {
        $this->alertEmail = $alertEmail;
        return $this;
    }
    /**
     * Getter for alertEmail
     *
     * @return string Email address to contact in case of problems occurring while executing a callback. This field
     *                can be unset when updating.
     */
    public function getAlertEmail() : ?string
    {
        return $this->alertEmail;
    }
    /**
     * Setter for automaticRenewal
     *
     * @param bool $automaticRenewal Allows the automatic renewal of devices attached to this device type
     *
     * @return static To use in method chains
     */
    public function setAutomaticRenewal(?bool $automaticRenewal)
    {
        $this->automaticRenewal = $automaticRenewal;
        return $this;
    }
    /**
     * Getter for automaticRenewal
     *
     * @return bool Allows the automatic renewal of devices attached to this device type
     */
    public function getAutomaticRenewal() : ?bool
    {
        return $this->automaticRenewal;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('name' => new PrimitiveSerializer('string'), 'description' => new PrimitiveSerializer('string'), 'downlinkMode' => new PrimitiveSerializer('int'), 'downlinkDataString' => new PrimitiveSerializer('string'), 'payloadType' => new PrimitiveSerializer('int'), 'payloadConfig' => new PrimitiveSerializer('string'), 'keepAlive' => new PrimitiveSerializer('int'), 'alertEmail' => new PrimitiveSerializer('string'), 'automaticRenewal' => new PrimitiveSerializer('bool'));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('name' => array(new MaxLength(100)), 'description' => array(new MaxLength(300)), 'keepAlive' => array(new Min(0)), 'alertEmail' => array(new MaxLength(250)));
        return $rules;
    }
}