<?php

namespace Arimac\Sigfox\Definition;

/**
 * Defines a meta role entity
 */
class MinMetaRole
{
    /**
     * The meta role's identifier
     *
     * @var string
     */
    protected string $id;
    /**
     * The meta role's name
     *
     * @var string
     */
    protected string $name;
    /**
     * @param string id The meta role's identifier
     */
    function setId(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The meta role's identifier
     */
    function getId() : string
    {
        return $this->id;
    }
    /**
     * @param string name The meta role's name
     */
    function setName(string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The meta role's name
     */
    function getName() : string
    {
        return $this->name;
    }
}