<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
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
     * @var int
     */
    protected ?int $plannedPower = null;
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
    protected $serialize = array(new ClassSerializer(self::class, 'baseStation', MinBaseStationWithType::class), new PrimitiveSerializer(self::class, 'plannedPower', 'int'), new PrimitiveSerializer(self::class, 'data', 'string'), new PrimitiveSerializer(self::class, 'operator', 'string'), new PrimitiveSerializer(self::class, 'country', 'string'));
    /**
     * Setter for baseStation
     *
     * @param MinBaseStationWithType $baseStation base station to send downlink message
     *
     * @return self To use in method chains
     */
    public function setBaseStation(?MinBaseStationWithType $baseStation) : self
    {
        $this->baseStation = $baseStation;
        return $this;
    }
    /**
     * Getter for baseStation
     *
     * @return MinBaseStationWithType base station to send downlink message
     */
    public function getBaseStation() : MinBaseStationWithType
    {
        return $this->baseStation;
    }
    /**
     * Setter for plannedPower
     *
     * @param int $plannedPower planned downlink power as it was computed by the backend
     *
     * @return self To use in method chains
     */
    public function setPlannedPower(?int $plannedPower) : self
    {
        $this->plannedPower = $plannedPower;
        return $this;
    }
    /**
     * Getter for plannedPower
     *
     * @return int planned downlink power as it was computed by the backend
     */
    public function getPlannedPower() : int
    {
        return $this->plannedPower;
    }
    /**
     * Setter for data
     *
     * @param string $data response content, hex encoded
     *
     * @return self To use in method chains
     */
    public function setData(?string $data) : self
    {
        $this->data = $data;
        return $this;
    }
    /**
     * Getter for data
     *
     * @return string response content, hex encoded
     */
    public function getData() : string
    {
        return $this->data;
    }
    /**
     * Setter for operator
     *
     * @param string $operator name of the first operator which received the message as roaming
     *
     * @return self To use in method chains
     */
    public function setOperator(?string $operator) : self
    {
        $this->operator = $operator;
        return $this;
    }
    /**
     * Getter for operator
     *
     * @return string name of the first operator which received the message as roaming
     */
    public function getOperator() : string
    {
        return $this->operator;
    }
    /**
     * Setter for country
     *
     * @param string $country country of the operator
     *
     * @return self To use in method chains
     */
    public function setCountry(?string $country) : self
    {
        $this->country = $country;
        return $this;
    }
    /**
     * Getter for country
     *
     * @return string country of the operator
     */
    public function getCountry() : string
    {
        return $this->country;
    }
}