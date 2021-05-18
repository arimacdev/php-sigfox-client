<?php

namespace Arimac\Sigfox\Model\AvailableEntitiesResponse;

use Arimac\Sigfox\Model\AvailableEntitiesResponse\OperatorsItem\OperatorForecastsItem;
use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Validator\Rules\ChildSet;
class OperatorsItem extends Model
{
    /**
     * The identifier of the operator.
     *
     * @var string
     */
    protected ?string $operatorId = null;
    /**
     * The name of the operator.
     *
     * @var string
     */
    protected ?string $operatorName = null;
    /**
     * The minimal sensitivity for the operator (in dBm).
     *
     * @var int
     */
    protected ?int $operatorMinDb = null;
    /**
     * The maximal sensitivity for the operator (in dBm).
     *
     * @var int
     */
    protected ?int $operatorMaxDb = null;
    /**
     * The standard capability of the operator (0 for BAND800, 1 for BAND900), used to choose the device class
     * attenuation value.
     *
     * @var int
     */
    protected ?int $operatorStandard = null;
    /**
     * Array of all the operator forecast radio planning infos.
     *
     * @var OperatorForecastsItem[]
     */
    protected ?array $operatorForecasts = null;
    /**
     * @var string[]
     */
    protected ?array $actions = null;
    /**
     * Setter for operatorId
     *
     * @param string $operatorId The identifier of the operator.
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
     * @return string The identifier of the operator.
     */
    public function getOperatorId() : ?string
    {
        return $this->operatorId;
    }
    /**
     * Setter for operatorName
     *
     * @param string $operatorName The name of the operator.
     *
     * @return self To use in method chains
     */
    public function setOperatorName(?string $operatorName) : self
    {
        $this->operatorName = $operatorName;
        return $this;
    }
    /**
     * Getter for operatorName
     *
     * @return string The name of the operator.
     */
    public function getOperatorName() : ?string
    {
        return $this->operatorName;
    }
    /**
     * Setter for operatorMinDb
     *
     * @param int $operatorMinDb The minimal sensitivity for the operator (in dBm).
     *
     * @return self To use in method chains
     */
    public function setOperatorMinDb(?int $operatorMinDb) : self
    {
        $this->operatorMinDb = $operatorMinDb;
        return $this;
    }
    /**
     * Getter for operatorMinDb
     *
     * @return int The minimal sensitivity for the operator (in dBm).
     */
    public function getOperatorMinDb() : ?int
    {
        return $this->operatorMinDb;
    }
    /**
     * Setter for operatorMaxDb
     *
     * @param int $operatorMaxDb The maximal sensitivity for the operator (in dBm).
     *
     * @return self To use in method chains
     */
    public function setOperatorMaxDb(?int $operatorMaxDb) : self
    {
        $this->operatorMaxDb = $operatorMaxDb;
        return $this;
    }
    /**
     * Getter for operatorMaxDb
     *
     * @return int The maximal sensitivity for the operator (in dBm).
     */
    public function getOperatorMaxDb() : ?int
    {
        return $this->operatorMaxDb;
    }
    /**
     * Setter for operatorStandard
     *
     * @param int $operatorStandard The standard capability of the operator (0 for BAND800, 1 for BAND900), used to
     *                              choose the device class attenuation value.
     *
     * @return self To use in method chains
     */
    public function setOperatorStandard(?int $operatorStandard) : self
    {
        $this->operatorStandard = $operatorStandard;
        return $this;
    }
    /**
     * Getter for operatorStandard
     *
     * @return int The standard capability of the operator (0 for BAND800, 1 for BAND900), used to choose the device
     *             class attenuation value.
     */
    public function getOperatorStandard() : ?int
    {
        return $this->operatorStandard;
    }
    /**
     * Setter for operatorForecasts
     *
     * @param OperatorForecastsItem[] $operatorForecasts Array of all the operator forecast radio planning infos.
     *
     * @return self To use in method chains
     */
    public function setOperatorForecasts(?array $operatorForecasts) : self
    {
        $this->operatorForecasts = $operatorForecasts;
        return $this;
    }
    /**
     * Getter for operatorForecasts
     *
     * @return OperatorForecastsItem[] Array of all the operator forecast radio planning infos.
     */
    public function getOperatorForecasts() : ?array
    {
        return $this->operatorForecasts;
    }
    /**
     * Setter for actions
     *
     * @param string[] $actions
     *
     * @return self To use in method chains
     */
    public function setActions(?array $actions) : self
    {
        $this->actions = $actions;
        return $this;
    }
    /**
     * Getter for actions
     *
     * @return string[]
     */
    public function getActions() : ?array
    {
        return $this->actions;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('operatorId' => new PrimitiveSerializer('string'), 'operatorName' => new PrimitiveSerializer('string'), 'operatorMinDb' => new PrimitiveSerializer('int'), 'operatorMaxDb' => new PrimitiveSerializer('int'), 'operatorStandard' => new PrimitiveSerializer('int'), 'operatorForecasts' => new ArraySerializer(new ClassSerializer(OperatorForecastsItem::class)), 'actions' => new ArraySerializer(new PrimitiveSerializer('string')));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('operatorForecasts' => array(new ChildSet()));
        return $rules;
    }
}