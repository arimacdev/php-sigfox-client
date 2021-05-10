<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
/**
 * Defines a role entity
 */
class MinRole extends Definition
{
    /**
     * The role's identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * The role's name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * The roles's path sorted by descending ancestor (direct parent to farest parent)
     *
     * @var MinMetaRole[]
     */
    protected ?array $path = null;
    /**
     * Setter for id
     *
     * @param string $id The role's identifier
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
     * @return string The role's identifier
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Setter for name
     *
     * @param string $name The role's name
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
     * @return string The role's name
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Setter for path
     *
     * @param MinMetaRole[] $path The roles's path sorted by descending ancestor (direct parent to farest parent)
     *
     * @return self To use in method chains
     */
    public function setPath(?array $path) : self
    {
        $this->path = $path;
        return $this;
    }
    /**
     * Getter for path
     *
     * @return MinMetaRole[] The roles's path sorted by descending ancestor (direct parent to farest parent)
     */
    public function getPath() : array
    {
        return $this->path;
    }
}