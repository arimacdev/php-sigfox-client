<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\object;
class DownlinkAnswerStatus
{
    /**
     * base station to send downlink message
     *
     * @var object
     */
    protected object $baseStation;
    /**
     * planned downlink power as it was computed by the backend
     *
     * @var int
     */
    protected int $plannedPower;
    /**
     * response content, hex encoded
     *
     * @var string
     */
    protected string $data;
    /**
     * name of the first operator which received the message as roaming
     *
     * @var string
     */
    protected string $operator;
    /**
     * country of the operator
     *
     * @var string
     */
    protected string $country;
    /**
     * @param object baseStation base station to send downlink message
     */
    function setBaseStation(object $baseStation)
    {
        $this->baseStation = $baseStation;
    }
    /**
     * @return object base station to send downlink message
     */
    function getBaseStation() : object
    {
        return $this->baseStation;
    }
    /**
     * @param int plannedPower planned downlink power as it was computed by the backend
     */
    function setPlannedPower(int $plannedPower)
    {
        $this->plannedPower = $plannedPower;
    }
    /**
     * @return int planned downlink power as it was computed by the backend
     */
    function getPlannedPower() : int
    {
        return $this->plannedPower;
    }
    /**
     * @param string data response content, hex encoded
     */
    function setData(string $data)
    {
        $this->data = $data;
    }
    /**
     * @return string response content, hex encoded
     */
    function getData() : string
    {
        return $this->data;
    }
    /**
     * @param string operator name of the first operator which received the message as roaming
     */
    function setOperator(string $operator)
    {
        $this->operator = $operator;
    }
    /**
     * @return string name of the first operator which received the message as roaming
     */
    function getOperator() : string
    {
        return $this->operator;
    }
    /**
     * @param string country country of the operator
     */
    function setCountry(string $country)
    {
        $this->country = $country;
    }
    /**
     * @return string country of the operator
     */
    function getCountry() : string
    {
        return $this->country;
    }
}