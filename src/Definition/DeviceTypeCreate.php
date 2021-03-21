<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\BaseDeviceType;
use Arimac\Sigfox\Definition\ContractId;
/**
 * Defines the device type's properties that can or lust be be included during creation
 */
class DeviceTypeCreate extends BaseDeviceType
{
    protected $required = array('contracts', 'groupId');
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
    protected ?string $contractId = null;
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
    protected ?string $geolocPayloadConfigId = null;
    /**
     * @param string $groupId The device type's group identifier
     */
    function setGroupId(string $groupId)
    {
        $this->groupId = $groupId;
    }
    /**
     * @return string The device type's group identifier
     */
    function getGroupId() : string
    {
        return $this->groupId;
    }
    /**
     * @param string $contractId The device type's contract identifier
     */
    function setContractId(?string $contractId)
    {
        $this->contractId = $contractId;
    }
    /**
     * @return string The device type's contract identifier
     */
    function getContractId() : ?string
    {
        return $this->contractId;
    }
    /**
     * @param ContractId[] $contracts The device type's contract identifiers
     */
    function setContracts(array $contracts)
    {
        $this->contracts = $contracts;
    }
    /**
     * @return ContractId[] The device type's contract identifiers
     */
    function getContracts() : array
    {
        return $this->contracts;
    }
    /**
     * @param string $geolocPayloadConfigId The geoloc payload configuration identifier. Required if the payload type is Geolocation, else ignored.
     */
    function setGeolocPayloadConfigId(?string $geolocPayloadConfigId)
    {
        $this->geolocPayloadConfigId = $geolocPayloadConfigId;
    }
    /**
     * @return string The geoloc payload configuration identifier. Required if the payload type is Geolocation, else ignored.
     */
    function getGeolocPayloadConfigId() : ?string
    {
        return $this->geolocPayloadConfigId;
    }
}