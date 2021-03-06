<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
/**
 * Minimal information about a BaseStation
 */
class MinBaseStationWithType extends Model
{
    /**
     * SBS
     */
    public const RESOURCE_TYPE_SBS = 0;
    /**
     * NAP
     */
    public const RESOURCE_TYPE_NAP = 1;
    /**
     * The base station identifier in hexadecimal
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * The base station name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * Resource type.
     * 
     * - {@see MinBaseStationWithType::RESOURCE_TYPE_SBS}
     * - {@see MinBaseStationWithType::RESOURCE_TYPE_NAP}
     *
     * @var int
     */
    protected ?int $resourceType = null;
    /**
     * @var string[]
     */
    protected ?array $actions = null;
    /**
     * Setter for id
     *
     * @param string $id The base station identifier in hexadecimal
     *
     * @return static To use in method chains
     */
    public function setId(?string $id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return string The base station identifier in hexadecimal
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * Setter for name
     *
     * @param string $name The base station name
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
     * @return string The base station name
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Setter for resourceType
     *
     * @param int $resourceType Resource type.
     *                          
     *                          - {@see MinBaseStationWithType::RESOURCE_TYPE_SBS}
     *                          - {@see MinBaseStationWithType::RESOURCE_TYPE_NAP}
     *                          
     *
     * @return static To use in method chains
     */
    public function setResourceType(?int $resourceType)
    {
        $this->resourceType = $resourceType;
        return $this;
    }
    /**
     * Getter for resourceType
     *
     * @return int Resource type.
     *             
     *             - {@see MinBaseStationWithType::RESOURCE_TYPE_SBS}
     *             - {@see MinBaseStationWithType::RESOURCE_TYPE_NAP}
     *             
     */
    public function getResourceType() : ?int
    {
        return $this->resourceType;
    }
    /**
     * Setter for actions
     *
     * @param string[] $actions
     *
     * @return static To use in method chains
     */
    public function setActions(?array $actions)
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
        $serializers = array('id' => new PrimitiveSerializer('string'), 'name' => new PrimitiveSerializer('string'), 'resourceType' => new PrimitiveSerializer('int'), 'actions' => new ArraySerializer(new PrimitiveSerializer('string')));
        return $serializers;
    }
}