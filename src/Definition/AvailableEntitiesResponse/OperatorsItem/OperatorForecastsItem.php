<?php

namespace Arimac\Sigfox\Definition\AvailableEntitiesResponse\OperatorsItem;

use Arimac\Sigfox\Definition;
class OperatorForecastsItem extends Definition
{
    /**
     * The identifier of the radio planning.
     *
     * @var float
     */
    protected ?float $id = null;
    /**
     * The name of the simulation.
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * @param float $id The identifier of the radio planning.
     */
    function setId(?float $id)
    {
        $this->id = $id;
    }
    /**
     * @return float The identifier of the radio planning.
     */
    function getId() : ?float
    {
        return $this->id;
    }
    /**
     * @param string $name The name of the simulation.
     */
    function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The name of the simulation.
     */
    function getName() : ?string
    {
        return $this->name;
    }
}