<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\MinMetaRole;
/**
 * Defines a role entity
 */
class MinRole
{
    /**
     * The role's identifier
     *
     * @var string
     */
    protected string $id;
    /**
     * The role's name
     *
     * @var string
     */
    protected string $name;
    /**
     * The roles's path sorted by descending ancestor (direct parent to farest parent)
     *
     * @var MinMetaRole[]
     */
    protected array $path;
    /**
     * @param string id The role's identifier
     */
    function setId(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The role's identifier
     */
    function getId() : string
    {
        return $this->id;
    }
    /**
     * @param string name The role's name
     */
    function setName(string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The role's name
     */
    function getName() : string
    {
        return $this->name;
    }
    /**
     * @param MinMetaRole[] path The roles's path sorted by descending ancestor (direct parent to farest parent)
     */
    function setPath(array $path)
    {
        $this->path = $path;
    }
    /**
     * @return MinMetaRole[] The roles's path sorted by descending ancestor (direct parent to farest parent)
     */
    function getPath() : array
    {
        return $this->path;
    }
}