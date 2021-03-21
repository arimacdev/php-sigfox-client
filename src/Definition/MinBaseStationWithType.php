<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
/**
 * Minimal information about a BaseStation
 */
class MinBaseStationWithType extends Definition
{
    /** SBS */
    public const RESOURCE_TYPE_SBS = 0;
    /** NAP */
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
     * - `MinBaseStationWithType::RESOURCE_TYPE_SBS`
     * - `MinBaseStationWithType::RESOURCE_TYPE_NAP`
     *
     * @var int
     */
    protected ?int $resourceType = null;
    /** @var string[] */
    protected ?array $actions = null;
    /**
     * @param string $id The base station identifier in hexadecimal
     */
    function setId(?string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The base station identifier in hexadecimal
     */
    function getId() : ?string
    {
        return $this->id;
    }
    /**
     * @param string $name The base station name
     */
    function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The base station name
     */
    function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @param int $resourceType Resource type.
     * - `MinBaseStationWithType::RESOURCE_TYPE_SBS`
     * - `MinBaseStationWithType::RESOURCE_TYPE_NAP`
     */
    function setResourceType(?int $resourceType)
    {
        $this->resourceType = $resourceType;
    }
    /**
     * @return int Resource type.
     * - `MinBaseStationWithType::RESOURCE_TYPE_SBS`
     * - `MinBaseStationWithType::RESOURCE_TYPE_NAP`
     */
    function getResourceType() : ?int
    {
        return $this->resourceType;
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