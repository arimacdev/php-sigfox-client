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
     * @var int
     */
    protected ?int $annualCost = null;
    /**
     * Setter for name
     *
     * @param string $name The provider's name
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
     * @return string The provider's name
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Setter for annualCost
     *
     * @param int $annualCost The provider's annual cost. This field can be unset when updating.
     *
     * @return self To use in method chains
     */
    public function setAnnualCost(?int $annualCost) : self
    {
        $this->annualCost = $annualCost;
        return $this;
    }
    /**
     * Getter for annualCost
     *
     * @return int The provider's annual cost. This field can be unset when updating.
     */
    public function getAnnualCost() : int
    {
        return $this->annualCost;
    }
}