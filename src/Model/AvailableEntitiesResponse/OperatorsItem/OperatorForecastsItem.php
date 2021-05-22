<?php

namespace Arimac\Sigfox\Model\AvailableEntitiesResponse\OperatorsItem;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class OperatorForecastsItem extends Model
{
    /**
     * The identifier of the radio planning.
     *
     * @var double
     */
    protected ?float $id = null;
    /**
     * The name of the simulation.
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * Setter for id
     *
     * @param double $id The identifier of the radio planning.
     *
     * @return static To use in method chains
     */
    public function setId(?float $id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return double The identifier of the radio planning.
     */
    public function getId() : ?float
    {
        return $this->id;
    }
    /**
     * Setter for name
     *
     * @param string $name The name of the simulation.
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
     * @return string The name of the simulation.
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('id' => new PrimitiveSerializer('double'), 'name' => new PrimitiveSerializer('string'));
        return $serializers;
    }
}