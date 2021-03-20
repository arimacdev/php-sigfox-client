<?php

namespace Arimac\Sigfox\Definition;

class BaseProvider
{
    /**
     * The provider's name
     *
     * @var string
     */
    protected string $name;
    /**
     * The provider's annual cost. This field can be unset when updating.
     *
     * @var int
     */
    protected int $annualCost;
    /**
     * @param string name The provider's name
     */
    function setName(string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The provider's name
     */
    function getName() : string
    {
        return $this->name;
    }
    /**
     * @param int annualCost The provider's annual cost. This field can be unset when updating.
     */
    function setAnnualCost(int $annualCost)
    {
        $this->annualCost = $annualCost;
    }
    /**
     * @return int The provider's annual cost. This field can be unset when updating.
     */
    function getAnnualCost() : int
    {
        return $this->annualCost;
    }
}