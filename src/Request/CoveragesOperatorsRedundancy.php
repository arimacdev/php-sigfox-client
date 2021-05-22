<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
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
     * @var double
     */
    protected ?float $lat = null;
    /**
     * the longitude
     *
     * @var double
     */
    protected ?float $lng = null;
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
     * Setter for lat
     *
     * @param double $lat the latitude
     *
     * @return static To use in method chains
     */
    public function setLat(?float $lat)
    {
        $this->lat = $lat;
        return $this;
    }
    /**
     * Getter for lat
     *
     * @internal
     *
     * @return double the latitude
     */
    public function getLat() : ?float
    {
        return $this->lat;
    }
    /**
     * Setter for lng
     *
     * @param double $lng the longitude
     *
     * @return static To use in method chains
     */
    public function setLng(?float $lng)
    {
        $this->lng = $lng;
        return $this;
    }
    /**
     * Getter for lng
     *
     * @internal
     *
     * @return double the longitude
     */
    public function getLng() : ?float
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
     * @return static To use in method chains
     */
    public function setOperatorId(?string $operatorId)
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
     * @return static To use in method chains
     */
    public function setDeviceSituation(?string $deviceSituation)
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
     * @return static To use in method chains
     */
    public function setDeviceClassId(?int $deviceClassId)
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
        $serializers = array('lat' => new PrimitiveSerializer('double'), 'lng' => new PrimitiveSerializer('double'), 'operatorId' => new PrimitiveSerializer('string'), 'deviceSituation' => new PrimitiveSerializer('string'), 'deviceClassId' => new PrimitiveSerializer('int'));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('lat' => array(new Required()), 'lng' => array(new Required()));
        return $rules;
    }
}