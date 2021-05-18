<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Validator\Rules\ChildSet;
/**
 * Defines the device type's properties
 */
class DeviceTypeUpdate extends BaseDeviceType
{
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
     * The payload type
     * 
     * - {@see DeviceTypeUpdate::PAYLOAD_TYPE_REGULAR}
     * - {@see DeviceTypeUpdate::PAYLOAD_TYPE_CUSTOM_GRAMMAR}
     * - {@see DeviceTypeUpdate::PAYLOAD_TYPE_GEOLOCATION}
     * - {@see DeviceTypeUpdate::PAYLOAD_TYPE_DISPLAY_IN_ASCII}
     * - {@see DeviceTypeUpdate::PAYLOAD_TYPE_RADIO_PLANNING_FRAME}
     * - {@see DeviceTypeUpdate::PAYLOAD_TYPE_SENSITV2}
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
     * The downlink mode to use for the devices of this device type.
     * 
     * - {@see DeviceTypeUpdate::DOWNLINK_MODE_DIRECT}
     * - {@see DeviceTypeUpdate::DOWNLINK_MODE_CALLBACK}
     * - {@see DeviceTypeUpdate::DOWNLINK_MODE_NONE}
     * - {@see DeviceTypeUpdate::DOWNLINK_MODE_MANAGED}
     *
     * @var int
     */
    protected ?int $downlinkMode = null;
    /**
     * Downlink data to be sent to the devices of this device type if downlinkMode is equal to 0.
     * It must be an 8 byte length message given in hexadecimal string format.
     *
     * @var string
     */
    protected ?string $downlinkDataString = null;
    /**
     * The device types's description
     *
     * @var string
     */
    protected ?string $description = null;
    /**
     * The device type's contract identifier (must be on the same group than the device type)
     *
     * @var string
     */
    protected ?string $contractId = null;
    /**
     * The device type's contract identifiers (must be on the same group than the device type)
     *
     * @var ContractId[]
     */
    protected ?array $contracts = null;
    /**
     * The geoloc payload configuration identifier. Required if the payload type is Geolocation, else ignored.
     *
     * @var string
     */
    protected ?string $geolocPayloadConfigId = null;
    /**
     * Allows the automatic renewal of devices attached to this device type
     *
     * @var bool
     */
    protected ?bool $automaticRenewal = null;
    /**
     * Setter for payloadType
     *
     * @param int $payloadType The payload type
     *                         
     *                         - {@see DeviceTypeUpdate::PAYLOAD_TYPE_REGULAR}
     *                         - {@see DeviceTypeUpdate::PAYLOAD_TYPE_CUSTOM_GRAMMAR}
     *                         - {@see DeviceTypeUpdate::PAYLOAD_TYPE_GEOLOCATION}
     *                         - {@see DeviceTypeUpdate::PAYLOAD_TYPE_DISPLAY_IN_ASCII}
     *                         - {@see DeviceTypeUpdate::PAYLOAD_TYPE_RADIO_PLANNING_FRAME}
     *                         - {@see DeviceTypeUpdate::PAYLOAD_TYPE_SENSITV2}
     *                         
     *
     * @return self To use in method chains
     */
    public function setPayloadType(?int $payloadType) : self
    {
        $this->payloadType = $payloadType;
        return $this;
    }
    /**
     * Getter for payloadType
     *
     * @return int The payload type
     *             
     *             - {@see DeviceTypeUpdate::PAYLOAD_TYPE_REGULAR}
     *             - {@see DeviceTypeUpdate::PAYLOAD_TYPE_CUSTOM_GRAMMAR}
     *             - {@see DeviceTypeUpdate::PAYLOAD_TYPE_GEOLOCATION}
     *             - {@see DeviceTypeUpdate::PAYLOAD_TYPE_DISPLAY_IN_ASCII}
     *             - {@see DeviceTypeUpdate::PAYLOAD_TYPE_RADIO_PLANNING_FRAME}
     *             - {@see DeviceTypeUpdate::PAYLOAD_TYPE_SENSITV2}
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
     * @return self To use in method chains
     */
    public function setPayloadConfig(?string $payloadConfig) : self
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
     * Setter for downlinkMode
     *
     * @param int $downlinkMode The downlink mode to use for the devices of this device type.
     *                          
     *                          - {@see DeviceTypeUpdate::DOWNLINK_MODE_DIRECT}
     *                          - {@see DeviceTypeUpdate::DOWNLINK_MODE_CALLBACK}
     *                          - {@see DeviceTypeUpdate::DOWNLINK_MODE_NONE}
     *                          - {@see DeviceTypeUpdate::DOWNLINK_MODE_MANAGED}
     *                          
     *
     * @return self To use in method chains
     */
    public function setDownlinkMode(?int $downlinkMode) : self
    {
        $this->downlinkMode = $downlinkMode;
        return $this;
    }
    /**
     * Getter for downlinkMode
     *
     * @return int The downlink mode to use for the devices of this device type.
     *             
     *             - {@see DeviceTypeUpdate::DOWNLINK_MODE_DIRECT}
     *             - {@see DeviceTypeUpdate::DOWNLINK_MODE_CALLBACK}
     *             - {@see DeviceTypeUpdate::DOWNLINK_MODE_NONE}
     *             - {@see DeviceTypeUpdate::DOWNLINK_MODE_MANAGED}
     *             
     */
    public function getDownlinkMode() : ?int
    {
        return $this->downlinkMode;
    }
    /**
     * Setter for downlinkDataString
     *
     * @param string $downlinkDataString Downlink data to be sent to the devices of this device type if downlinkMode
     *                                   is equal to 0.
     *                                   It must be an 8 byte length message given in hexadecimal string format.
     *                                   
     *
     * @return self To use in method chains
     */
    public function setDownlinkDataString(?string $downlinkDataString) : self
    {
        $this->downlinkDataString = $downlinkDataString;
        return $this;
    }
    /**
     * Getter for downlinkDataString
     *
     * @return string Downlink data to be sent to the devices of this device type if downlinkMode is equal to 0.
     *                It must be an 8 byte length message given in hexadecimal string format.
     *                
     */
    public function getDownlinkDataString() : ?string
    {
        return $this->downlinkDataString;
    }
    /**
     * Setter for description
     *
     * @param string $description The device types's description
     *
     * @return self To use in method chains
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Getter for description
     *
     * @return string The device types's description
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Setter for contractId
     *
     * @param string $contractId The device type's contract identifier (must be on the same group than the device
     *                           type)
     *
     * @return self To use in method chains
     */
    public function setContractId(?string $contractId) : self
    {
        $this->contractId = $contractId;
        return $this;
    }
    /**
     * Getter for contractId
     *
     * @return string The device type's contract identifier (must be on the same group than the device type)
     */
    public function getContractId() : ?string
    {
        return $this->contractId;
    }
    /**
     * Setter for contracts
     *
     * @param ContractId[] $contracts The device type's contract identifiers (must be on the same group than the
     *                                device type)
     *
     * @return self To use in method chains
     */
    public function setContracts(?array $contracts) : self
    {
        $this->contracts = $contracts;
        return $this;
    }
    /**
     * Getter for contracts
     *
     * @return ContractId[] The device type's contract identifiers (must be on the same group than the device type)
     */
    public function getContracts() : ?array
    {
        return $this->contracts;
    }
    /**
     * Setter for geolocPayloadConfigId
     *
     * @param string $geolocPayloadConfigId The geoloc payload configuration identifier. Required if the payload type
     *                                      is Geolocation, else ignored.
     *
     * @return self To use in method chains
     */
    public function setGeolocPayloadConfigId(?string $geolocPayloadConfigId) : self
    {
        $this->geolocPayloadConfigId = $geolocPayloadConfigId;
        return $this;
    }
    /**
     * Getter for geolocPayloadConfigId
     *
     * @return string The geoloc payload configuration identifier. Required if the payload type is Geolocation, else
     *                ignored.
     */
    public function getGeolocPayloadConfigId() : ?string
    {
        return $this->geolocPayloadConfigId;
    }
    /**
     * Setter for automaticRenewal
     *
     * @param bool $automaticRenewal Allows the automatic renewal of devices attached to this device type
     *
     * @return self To use in method chains
     */
    public function setAutomaticRenewal(?bool $automaticRenewal) : self
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
        $serializers = array('payloadType' => new PrimitiveSerializer('int'), 'payloadConfig' => new PrimitiveSerializer('string'), 'downlinkMode' => new PrimitiveSerializer('int'), 'downlinkDataString' => new PrimitiveSerializer('string'), 'description' => new PrimitiveSerializer('string'), 'contractId' => new PrimitiveSerializer('string'), 'contracts' => new ArraySerializer(new ClassSerializer(ContractId::class)), 'geolocPayloadConfigId' => new PrimitiveSerializer('string'), 'automaticRenewal' => new PrimitiveSerializer('bool'));
        $serializers = array_merge($serializers, parent::getSerializeMetaData());
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('contracts' => array(new ChildSet()));
        $rules = array_merge($rules, parent::getValidationMetaData());
        return $rules;
    }
}