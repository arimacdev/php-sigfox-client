<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class CoveragesGet extends Definition
{
    protected $required = array('lat', 'lng');
    /**
     * the latitude
     *
     * @var float
     */
    protected float $lat;
    /**
     * the longitude
     *
     * @var float
     */
    protected float $lng;
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
    protected $query = array('lat', 'lng', 'operatorId', 'deviceSituation', 'deviceClassId');
    /**
     * @param float $lat the latitude
     */
    function setLat(float $lat)
    {
        $this->lat = $lat;
    }
    /**
     * @param float $lng the longitude
     */
    function setLng(float $lng)
    {
        $this->lng = $lng;
    }
    /**
     * @param string $operatorId The group id related to the operator to get its coverage result. Is required for root sigfox users.
     */
    function setOperatorId(?string $operatorId)
    {
        $this->operatorId = $operatorId;
    }
    /**
     * @param string $deviceSituation The coverage mode.
     * - OUTDOOR, max link budget
     * - INDOOR, link budget with 20dB margin
     * - UNDERGROUND, link budget with 30dB margin
     */
    function setDeviceSituation(?string $deviceSituation)
    {
        $this->deviceSituation = $deviceSituation;
    }
    /**
     * @param int $deviceClassId The product uplink class from 0 to 3 (0U to 3U).
     */
    function setDeviceClassId(?int $deviceClassId)
    {
        $this->deviceClassId = $deviceClassId;
    }
}