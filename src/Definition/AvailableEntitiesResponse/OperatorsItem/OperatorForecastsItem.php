<?php

namespace Arimac\Sigfox\Definition\AvailableEntitiesResponse\OperatorsItem;

use Arimac\Sigfox\Definition;
class OperatorForecastsItem extends Definition
{
    /**
     * The identifier of the radio planning.
     *
     * @var int
     */
    protected ?int $id = null;
    /**
     * The name of the simulation.
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * Setter for id
     *
     * @param int $id The identifier of the radio planning.
     *
     * @return self To use in method chains
     */
    public function setId(?int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return int The identifier of the radio planning.
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * Setter for name
     *
     * @param string $name The name of the simulation.
     *
     * @return self To use in method chains
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Getter for name
     *
     * @return string The name of the simulation.
     */
    public function getName() : string
    {
        return $this->name;
    }
}