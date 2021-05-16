<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
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
    protected ?string $groupId = null;
    /**
     * The device type's contract identifier
     *
     * @var string
     */
    protected ?string $contractId = null;
    /**
     * The device type's contract identifiers
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
     * @internal
     */
    protected array $validations = array('groupId' => array('required'), 'contracts' => array('required'), 'geolocPayloadConfigId' => array('required'));
    /**
     * Setter for groupId
     *
     * @param string $groupId The device type's group identifier
     *
     * @return self To use in method chains
     */
    public function setGroupId(?string $groupId) : self
    {
        $this->groupId = $groupId;
        return $this;
    }
    /**
     * Getter for groupId
     *
     * @return string The device type's group identifier
     */
    public function getGroupId() : ?string
    {
        return $this->groupId;
    }
    /**
     * Setter for contractId
     *
     * @param string $contractId The device type's contract identifier
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
     * @return string The device type's contract identifier
     */
    public function getContractId() : ?string
    {
        return $this->contractId;
    }
    /**
     * Setter for contracts
     *
     * @param ContractId[] $contracts The device type's contract identifiers
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
     * @return ContractId[] The device type's contract identifiers
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
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        return array('groupId' => new PrimitiveSerializer(self::class, 'groupId', 'string'), 'contractId' => new PrimitiveSerializer(self::class, 'contractId', 'string'), 'contracts' => new ArraySerializer(self::class, 'contracts', new ClassSerializer(self::class, 'contracts', ContractId::class)), 'geolocPayloadConfigId' => new PrimitiveSerializer(self::class, 'geolocPayloadConfigId', 'string'));
    }
}