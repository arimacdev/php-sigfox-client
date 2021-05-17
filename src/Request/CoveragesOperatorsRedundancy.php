<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Get operator coverage redundancy for a selected latitude and longitude,
 * for specific device situation.
 * For more information please refer to the [Global Coverage API
 * article](https://support.sigfox.com/docs/global-coverage-api).
 */
class CoveragesOperatorsRedundancy extends Request
{
    /**
     * the latitude
     *
     * @var int
     */
    protected ?int $lat = null;
    /**
     * the longitude
     *
     * @var int
     */
    protected ?int $lng = null;
    /**
     * The group id related to the operator to get its coverage result. Is required for root sigfox users.
     *
     * @var string
     */
    protected ?string $operatorId = null;
    /**
     * The coverage mode.
     * - OUTDOOR, max link budget
     * - INDOOR, link budget with 20dB margin
     * - UNDERGROUND, link budget with 30dB margin
     *
     * @var string
     */
    protected ?string $deviceSituation = null;
    /**
     * The product uplink class from 0 to 3 (0U to 3U).
     *
     * @var int
     */
    protected ?int $deviceClassId = null;
    /**
     * @internal
     */
    protected array $query = array('lat', 'lng', 'operatorId', 'deviceSituation', 'deviceClassId');
    /**
     * @internal
     */
    protected array $validations = array('lat' => array('required'), 'lng' => array('required'));
    /**
     * Setter for lat
     *
     * @param int $lat the latitude
     *
     * @return self To use in method chains
     */
    public function setLat(?int $lat) : self
    {
        $this->lat = $lat;
        return $this;
    }
    /**
     * Getter for lat
     *
     * @internal
     *
     * @return int the latitude
     */
    public function getLat() : ?int
    {
        return $this->lat;
    }
    /**
     * Setter for lng
     *
     * @param int $lng the longitude
     *
     * @return self To use in method chains
     */
    public function setLng(?int $lng) : self
    {
        $this->lng = $lng;
        return $this;
    }
    /**
     * Getter for lng
     *
     * @internal
     *
     * @return int the longitude
     */
    public function getLng() : ?int
    {
        return $this->lng;
    }
    /**
     * Setter for operatorId
     *
     * @param string $operatorId The group id related to the operator to get its coverage result. Is required for
     *                           root sigfox users.
     *                           
     *
     * @return self To use in method chains
     */
    public function setOperatorId(?string $operatorId) : self
    {
        $this->operatorId = $operatorId;
        return $this;
    }
    /**
     * Getter for operatorId
     *
     * @internal
     *
     * @return string The group id related to the operator to get its coverage result. Is required for root sigfox
     *                users.
     *                
     */
    public function getOperatorId() : ?string
    {
        return $this->operatorId;
    }
    /**
     * Setter for deviceSituation
     *
     * @param string $deviceSituation The coverage mode.
     *                                - OUTDOOR, max link budget
     *                                - INDOOR, link budget with 20dB margin
     *                                - UNDERGROUND, link budget with 30dB margin
     *                                
     *
     * @return self To use in method chains
     */
    public function setDeviceSituation(?string $deviceSituation) : self
    {
        $this->deviceSituation = $deviceSituation;
        return $this;
    }
    /**
     * Getter for deviceSituation
     *
     * @internal
     *
     * @return string The coverage mode.
     *                - OUTDOOR, max link budget
     *                - INDOOR, link budget with 20dB margin
     *                - UNDERGROUND, link budget with 30dB margin
     *                
     */
    public function getDeviceSituation() : ?string
    {
        return $this->deviceSituation;
    }
    /**
     * Setter for deviceClassId
     *
     * @param int $deviceClassId The product uplink class from 0 to 3 (0U to 3U).
     *
     * @return self To use in method chains
     */
    public function setDeviceClassId(?int $deviceClassId) : self
    {
        $this->deviceClassId = $deviceClassId;
        return $this;
    }
    /**
     * Getter for deviceClassId
     *
     * @internal
     *
     * @return int The product uplink class from 0 to 3 (0U to 3U).
     */
    public function getDeviceClassId() : ?int
    {
        return $this->deviceClassId;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('lat' => new PrimitiveSerializer('int'), 'lng' => new PrimitiveSerializer('int'), 'operatorId' => new PrimitiveSerializer('string'), 'deviceSituation' => new PrimitiveSerializer('string'), 'deviceClassId' => new PrimitiveSerializer('int'));
        return $serializers;
    }
}