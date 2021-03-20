<?php

namespace Arimac\Sigfox\Definition;

class BaseGeolocation
{
    /**
     * Geolocation payload's id
     *
     * @var string
     */
    protected string $id;
    /**
     * Geolocation payload's name
     *
     * @var string
     */
    protected string $name;
    /**
     * @param string id Geolocation payload's id
     */
    function setId(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string Geolocation payload's id
     */
    function getId() : string
    {
        return $this->id;
    }
    /**
     * @param string name Geolocation payload's name
     */
    function setName(string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string Geolocation payload's name
     */
    function getName() : string
    {
        return $this->name;
    }
}