<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
/**
 * Defines a profile entity
 */
class MinProfile extends Definition
{
    /**
     * The profile's identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * The profile's name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * @var string[]
     */
    protected ?array $actions = null;
    /**
     * Setter for id
     *
     * @param string $id The profile's identifier
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
     * @return string The profile's identifier
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Setter for name
     *
     * @param string $name The profile's name
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
     * @return string The profile's name
     */
    public function getName() : string
    {
        return $this->name;
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
    public function getActions() : array
    {
        return $this->actions;
    }
}