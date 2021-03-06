<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class BaseProvider extends Model
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
     * @var double
     */
    protected ?float $annualCost = null;
    /**
     * Setter for name
     *
     * @param string $name The provider's name
     *
     * @return static To use in method chains
     */
    public function setName(?string $name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Getter for name
     *
     * @return string The provider's name
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Setter for annualCost
     *
     * @param double $annualCost The provider's annual cost. This field can be unset when updating.
     *
     * @return static To use in method chains
     */
    public function setAnnualCost(?float $annualCost)
    {
        $this->annualCost = $annualCost;
        return $this;
    }
    /**
     * Getter for annualCost
     *
     * @return double The provider's annual cost. This field can be unset when updating.
     */
    public function getAnnualCost() : ?float
    {
        return $this->annualCost;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('name' => new PrimitiveSerializer('string'), 'annualCost' => new PrimitiveSerializer('double'));
        return $serializers;
    }
}