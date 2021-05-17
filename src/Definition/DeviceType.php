<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
/**
 * Defines the device type's properties
 */
class DeviceType extends BaseDeviceType
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
     * The device type's identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * The device type's description
     *
     * @var string
     */
    protected ?string $description = null;
    /**
     * The downlink mode to use for the devices of this device type.
     * 
     * - {@see DeviceType::DOWNLINK_MODE_DIRECT}
     * - {@see DeviceType::DOWNLINK_MODE_CALLBACK}
     * - {@see DeviceType::DOWNLINK_MODE_NONE}
     * - {@see DeviceType::DOWNLINK_MODE_MANAGED}
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
     * The payload type
     * 
     * - {@see DeviceType::PAYLOAD_TYPE_REGULAR}
     * - {@see DeviceType::PAYLOAD_TYPE_CUSTOM_GRAMMAR}
     * - {@see DeviceType::PAYLOAD_TYPE_GEOLOCATION}
     * - {@see DeviceType::PAYLOAD_TYPE_DISPLAY_IN_ASCII}
     * - {@see DeviceType::PAYLOAD_TYPE_RADIO_PLANNING_FRAME}
     * - {@see DeviceType::PAYLOAD_TYPE_SENSITV2}
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
     * @var MinGroup
     */
    protected ?MinGroup $group = null;
    /**
     * @var MinContractInfo
     */
    protected ?MinContractInfo $contract = null;
    /**
     * The list of the contracts associated with the device type
     *
     * @var MinContractInfo[]
     */
    protected ?array $contracts = null;
    /**
     * The list of the contracts that were associated with the device type at some point, but are not anymore.
     *
     * @var MinContractInfo[]
     */
    protected ?array $detachedContracts = null;
    /**
     * @var GeolocPayloadConfig
     */
    protected ?GeolocPayloadConfig $geolocPayloadConfig = null;
    /**
     * Date of the creation of this device type (in milliseconds)
     *
     * @var int
     */
    protected ?int $creationTime = null;
    /**
     * Identifier of the user who created this device type
     *
     * @var string
     */
    protected ?string $createdBy = null;
    /**
     * Date of the last edition of this device type (in milliseconds)
     *
     * @var int
     */
    protected ?int $lastEditionTime = null;
    /**
     * Identifier of the user who last edited this device type
     *
     * @var string
     */
    protected ?string $lastEditedBy = null;
    /**
     * Allows the automatic renewal of devices attached to this device type
     *
     * @var bool
     */
    protected ?bool $automaticRenewal = null;
    /**
     * @internal
     */
    protected array $validations = array('description' => array('max:300', 'nullable'));
    /**
     * Setter for id
     *
     * @param string $id The device type's identifier
     *
     * @return self To use in method chains
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return string The device type's identifier
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * Setter for description
     *
     * @param string $description The device type's description
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
     * @return string The device type's description
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Setter for downlinkMode
     *
     * @param int $downlinkMode The downlink mode to use for the devices of this device type.
     *                          
     *                          - {@see DeviceType::DOWNLINK_MODE_DIRECT}
     *                          - {@see DeviceType::DOWNLINK_MODE_CALLBACK}
     *                          - {@see DeviceType::DOWNLINK_MODE_NONE}
     *                          - {@see DeviceType::DOWNLINK_MODE_MANAGED}
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
     *             - {@see DeviceType::DOWNLINK_MODE_DIRECT}
     *             - {@see DeviceType::DOWNLINK_MODE_CALLBACK}
     *             - {@see DeviceType::DOWNLINK_MODE_NONE}
     *             - {@see DeviceType::DOWNLINK_MODE_MANAGED}
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
     * Setter for payloadType
     *
     * @param int $payloadType The payload type
     *                         
     *                         - {@see DeviceType::PAYLOAD_TYPE_REGULAR}
     *                         - {@see DeviceType::PAYLOAD_TYPE_CUSTOM_GRAMMAR}
     *                         - {@see DeviceType::PAYLOAD_TYPE_GEOLOCATION}
     *                         - {@see DeviceType::PAYLOAD_TYPE_DISPLAY_IN_ASCII}
     *                         - {@see DeviceType::PAYLOAD_TYPE_RADIO_PLANNING_FRAME}
     *                         - {@see DeviceType::PAYLOAD_TYPE_SENSITV2}
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
     *             - {@see DeviceType::PAYLOAD_TYPE_REGULAR}
     *             - {@see DeviceType::PAYLOAD_TYPE_CUSTOM_GRAMMAR}
     *             - {@see DeviceType::PAYLOAD_TYPE_GEOLOCATION}
     *             - {@see DeviceType::PAYLOAD_TYPE_DISPLAY_IN_ASCII}
     *             - {@see DeviceType::PAYLOAD_TYPE_RADIO_PLANNING_FRAME}
     *             - {@see DeviceType::PAYLOAD_TYPE_SENSITV2}
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
     * Setter for group
     *
     * @param MinGroup $group
     *
     * @return self To use in method chains
     */
    public function setGroup(?MinGroup $group) : self
    {
        $this->group = $group;
        return $this;
    }
    /**
     * Getter for group
     *
     * @return MinGroup
     */
    public function getGroup() : ?MinGroup
    {
        return $this->group;
    }
    /**
     * Setter for contract
     *
     * @param MinContractInfo $contract
     *
     * @return self To use in method chains
     */
    public function setContract(?MinContractInfo $contract) : self
    {
        $this->contract = $contract;
        return $this;
    }
    /**
     * Getter for contract
     *
     * @return MinContractInfo
     */
    public function getContract() : ?MinContractInfo
    {
        return $this->contract;
    }
    /**
     * Setter for contracts
     *
     * @param MinContractInfo[] $contracts The list of the contracts associated with the device type
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
     * @return MinContractInfo[] The list of the contracts associated with the device type
     */
    public function getContracts() : ?array
    {
        return $this->contracts;
    }
    /**
     * Setter for detachedContracts
     *
     * @param MinContractInfo[] $detachedContracts The list of the contracts that were associated with the device
     *                                             type at some point, but are not anymore.
     *
     * @return self To use in method chains
     */
    public function setDetachedContracts(?array $detachedContracts) : self
    {
        $this->detachedContracts = $detachedContracts;
        return $this;
    }
    /**
     * Getter for detachedContracts
     *
     * @return MinContractInfo[] The list of the contracts that were associated with the device type at some point,
     *                           but are not anymore.
     */
    public function getDetachedContracts() : ?array
    {
        return $this->detachedContracts;
    }
    /**
     * Setter for geolocPayloadConfig
     *
     * @param GeolocPayloadConfig $geolocPayloadConfig
     *
     * @return self To use in method chains
     */
    public function setGeolocPayloadConfig(?GeolocPayloadConfig $geolocPayloadConfig) : self
    {
        $this->geolocPayloadConfig = $geolocPayloadConfig;
        return $this;
    }
    /**
     * Getter for geolocPayloadConfig
     *
     * @return GeolocPayloadConfig
     */
    public function getGeolocPayloadConfig() : ?GeolocPayloadConfig
    {
        return $this->geolocPayloadConfig;
    }
    /**
     * Setter for creationTime
     *
     * @param int $creationTime Date of the creation of this device type (in milliseconds)
     *
     * @return self To use in method chains
     */
    public function setCreationTime(?int $creationTime) : self
    {
        $this->creationTime = $creationTime;
        return $this;
    }
    /**
     * Getter for creationTime
     *
     * @return int Date of the creation of this device type (in milliseconds)
     */
    public function getCreationTime() : ?int
    {
        return $this->creationTime;
    }
    /**
     * Setter for createdBy
     *
     * @param string $createdBy Identifier of the user who created this device type
     *
     * @return self To use in method chains
     */
    public function setCreatedBy(?string $createdBy) : self
    {
        $this->createdBy = $createdBy;
        return $this;
    }
    /**
     * Getter for createdBy
     *
     * @return string Identifier of the user who created this device type
     */
    public function getCreatedBy() : ?string
    {
        return $this->createdBy;
    }
    /**
     * Setter for lastEditionTime
     *
     * @param int $lastEditionTime Date of the last edition of this device type (in milliseconds)
     *
     * @return self To use in method chains
     */
    public function setLastEditionTime(?int $lastEditionTime) : self
    {
        $this->lastEditionTime = $lastEditionTime;
        return $this;
    }
    /**
     * Getter for lastEditionTime
     *
     * @return int Date of the last edition of this device type (in milliseconds)
     */
    public function getLastEditionTime() : ?int
    {
        return $this->lastEditionTime;
    }
    /**
     * Setter for lastEditedBy
     *
     * @param string $lastEditedBy Identifier of the user who last edited this device type
     *
     * @return self To use in method chains
     */
    public function setLastEditedBy(?string $lastEditedBy) : self
    {
        $this->lastEditedBy = $lastEditedBy;
        return $this;
    }
    /**
     * Getter for lastEditedBy
     *
     * @return string Identifier of the user who last edited this device type
     */
    public function getLastEditedBy() : ?string
    {
        return $this->lastEditedBy;
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
        $serializers = array('id' => new PrimitiveSerializer('string'), 'description' => new PrimitiveSerializer('string'), 'downlinkMode' => new PrimitiveSerializer('int'), 'downlinkDataString' => new PrimitiveSerializer('string'), 'payloadType' => new PrimitiveSerializer('int'), 'payloadConfig' => new PrimitiveSerializer('string'), 'group' => new ClassSerializer(MinGroup::class), 'contract' => new ClassSerializer(MinContractInfo::class), 'contracts' => new ArraySerializer(new ClassSerializer(MinContractInfo::class)), 'detachedContracts' => new ArraySerializer(new ClassSerializer(MinContractInfo::class)), 'geolocPayloadConfig' => new ClassSerializer(GeolocPayloadConfig::class), 'creationTime' => new PrimitiveSerializer('int'), 'createdBy' => new PrimitiveSerializer('string'), 'lastEditionTime' => new PrimitiveSerializer('int'), 'lastEditedBy' => new PrimitiveSerializer('string'), 'automaticRenewal' => new PrimitiveSerializer('bool'));
        $serializers = array_merge($serializers, parent::getSerializeMetaData());
        return $serializers;
    }
}