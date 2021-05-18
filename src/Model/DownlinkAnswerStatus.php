<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\Child;
class DownlinkAnswerStatus extends Model
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
     * @var double
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
    public function getBaseStation() : ?MinBaseStationWithType
    {
        return $this->baseStation;
    }
    /**
     * Setter for plannedPower
     *
     * @param double $plannedPower planned downlink power as it was computed by the backend
     *
     * @return self To use in method chains
     */
    public function setPlannedPower(?float $plannedPower) : self
    {
        $this->plannedPower = $plannedPower;
        return $this;
    }
    /**
     * Getter for plannedPower
     *
     * @return double planned downlink power as it was computed by the backend
     */
    public function getPlannedPower() : ?float
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
    public function getData() : ?string
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
    public function getOperator() : ?string
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
    public function getCountry() : ?string
    {
        return $this->country;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('baseStation' => new ClassSerializer(MinBaseStationWithType::class), 'plannedPower' => new PrimitiveSerializer('double'), 'data' => new PrimitiveSerializer('string'), 'operator' => new PrimitiveSerializer('string'), 'country' => new PrimitiveSerializer('string'));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('baseStation' => array(new Child()));
        return $rules;
    }
}