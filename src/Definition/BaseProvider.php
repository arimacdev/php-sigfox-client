<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
class BaseProvider extends Definition
{
    /**
     * The provider's name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * The provider's annual cost. This field can be unset when updating.
     *
     * @var float
     */
    protected ?float $annualCost = null;
    /**
     * @param string $name The provider's name
     */
    function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The provider's name
     */
    function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @param float $annualCost The provider's annual cost. This field can be unset when updating.
     */
    function setAnnualCost(?float $annualCost)
    {
        $this->annualCost = $annualCost;
    }
    /**
     * @return float The provider's annual cost. This field can be unset when updating.
     */
    function getAnnualCost() : ?float
    {
        return $this->annualCost;
    }
}