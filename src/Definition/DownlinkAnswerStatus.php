<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\MinBaseStationWithType;
use Arimac\Sigfox\Definition;
class DownlinkAnswerStatus extends Definition
{
    /**
     * base station to send downlink message
     *
     * @var MinBaseStationWithType
     */
    protected ?MinBaseStationWithType $baseStation = null;
    /**
     * planned downlink power as it was computed by the backend
     *
     * @var float
     */
    protected ?float $plannedPower = null;
    /**
     * response content, hex encoded
     *
     * @var string
     */
    protected ?string $data = null;
    /**
     * name of the first operator which received the message as roaming
     *
     * @var string
     */
    protected ?string $operator = null;
    /**
     * country of the operator
     *
     * @var string
     */
    protected ?string $country = null;
    protected $objects = array('baseStation' => '\\Arimac\\Sigfox\\Definition\\MinBaseStationWithType');
    /**
     * @param MinBaseStationWithType $baseStation base station to send downlink message
     */
    function setBaseStation(?MinBaseStationWithType $baseStation)
    {
        $this->baseStation = $baseStation;
    }
    /**
     * @return MinBaseStationWithType base station to send downlink message
     */
    function getBaseStation() : ?MinBaseStationWithType
    {
        return $this->baseStation;
    }
    /**
     * @param float $plannedPower planned downlink power as it was computed by the backend
     */
    function setPlannedPower(?float $plannedPower)
    {
        $this->plannedPower = $plannedPower;
    }
    /**
     * @return float planned downlink power as it was computed by the backend
     */
    function getPlannedPower() : ?float
    {
        return $this->plannedPower;
    }
    /**
     * @param string $data response content, hex encoded
     */
    function setData(?string $data)
    {
        $this->data = $data;
    }
    /**
     * @return string response content, hex encoded
     */
    function getData() : ?string
    {
        return $this->data;
    }
    /**
     * @param string $operator name of the first operator which received the message as roaming
     */
    function setOperator(?string $operator)
    {
        $this->operator = $operator;
    }
    /**
     * @return string name of the first operator which received the message as roaming
     */
    function getOperator() : ?string
    {
        return $this->operator;
    }
    /**
     * @param string $country country of the operator
     */
    function setCountry(?string $country)
    {
        $this->country = $country;
    }
    /**
     * @return string country of the operator
     */
    function getCountry() : ?string
    {
        return $this->country;
    }
}