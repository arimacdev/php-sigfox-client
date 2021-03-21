<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
/**
 * Defines a product or modem certificate type entity
 */
class Certificate extends Definition
{
    /**
     * The product certificate's identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * The product certificate's name
     *
     * @var string
     */
    protected ?string $key = null;
    /**
     * @param string $id The product certificate's identifier
     */
    function setId(?string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The product certificate's identifier
     */
    function getId() : ?string
    {
        return $this->id;
    }
    /**
     * @param string $key The product certificate's name
     */
    function setKey(?string $key)
    {
        $this->key = $key;
    }
    /**
     * @return string The product certificate's name
     */
    function getKey() : ?string
    {
        return $this->key;
    }
}