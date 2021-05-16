<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
/**
 * Minimal information about a BaseStation
 */
class MinBaseStationWithType extends Definition
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
     * @return self To use in method chains
     */
    public function setId(?string $id) : self
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
     * @return self To use in method chains
     */
    public function setResourceType(?int $resourceType) : self
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
     */
    public function getSerializeMetaData() : array
    {
        return array('id' => new PrimitiveSerializer(self::class, 'id', 'string'), 'name' => new PrimitiveSerializer(self::class, 'name', 'string'), 'resourceType' => new PrimitiveSerializer(self::class, 'resourceType', 'int'), 'actions' => new ArraySerializer(self::class, 'actions', new PrimitiveSerializer(self::class, 'actions', 'string')));
    }
}