<?php

namespace Arimac\Sigfox\Definition\AvailableEntitiesResponse;

use Arimac\Sigfox\Definition\AvailableEntitiesResponse\OperatorsItem\OperatorForecastsItem;
use Arimac\Sigfox\Definition;
class OperatorsItem extends Definition
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
     * The standard capability of the operator (0 for BAND800, 1 for BAND900), used to choose the device class attenuation value.
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
    /** @var string[] */
    protected ?array $actions = null;
    /**
     * @param string $operatorId The identifier of the operator.
     */
    function setOperatorId(?string $operatorId)
    {
        $this->operatorId = $operatorId;
    }
    /**
     * @return string The identifier of the operator.
     */
    function getOperatorId() : ?string
    {
        return $this->operatorId;
    }
    /**
     * @param string $operatorName The name of the operator.
     */
    function setOperatorName(?string $operatorName)
    {
        $this->operatorName = $operatorName;
    }
    /**
     * @return string The name of the operator.
     */
    function getOperatorName() : ?string
    {
        return $this->operatorName;
    }
    /**
     * @param int $operatorMinDb The minimal sensitivity for the operator (in dBm).
     */
    function setOperatorMinDb(?int $operatorMinDb)
    {
        $this->operatorMinDb = $operatorMinDb;
    }
    /**
     * @return int The minimal sensitivity for the operator (in dBm).
     */
    function getOperatorMinDb() : ?int
    {
        return $this->operatorMinDb;
    }
    /**
     * @param int $operatorMaxDb The maximal sensitivity for the operator (in dBm).
     */
    function setOperatorMaxDb(?int $operatorMaxDb)
    {
        $this->operatorMaxDb = $operatorMaxDb;
    }
    /**
     * @return int The maximal sensitivity for the operator (in dBm).
     */
    function getOperatorMaxDb() : ?int
    {
        return $this->operatorMaxDb;
    }
    /**
     * @param int $operatorStandard The standard capability of the operator (0 for BAND800, 1 for BAND900), used to choose the device class attenuation value.
     */
    function setOperatorStandard(?int $operatorStandard)
    {
        $this->operatorStandard = $operatorStandard;
    }
    /**
     * @return int The standard capability of the operator (0 for BAND800, 1 for BAND900), used to choose the device class attenuation value.
     */
    function getOperatorStandard() : ?int
    {
        return $this->operatorStandard;
    }
    /**
     * @param OperatorForecastsItem[] $operatorForecasts Array of all the operator forecast radio planning infos.
     */
    function setOperatorForecasts(?array $operatorForecasts)
    {
        $this->operatorForecasts = $operatorForecasts;
    }
    /**
     * @return OperatorForecastsItem[] Array of all the operator forecast radio planning infos.
     */
    function getOperatorForecasts() : ?array
    {
        return $this->operatorForecasts;
    }
    /**
     * @param string[] actions
     */
    function setActions(?array $actions)
    {
        $this->actions = $actions;
    }
    /**
     * @return string[] actions
     */
    function getActions() : ?array
    {
        return $this->actions;
    }
}