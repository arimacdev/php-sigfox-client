<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\MinGroup;
use Arimac\Sigfox\Definition;
/**
 * Defines the common properties of a certificate
 */
class CommonCertificate extends Definition
{
    protected $required = array('name');
    /**
     * The certificate's identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * The certificate's name
     *
     * @var string
     */
    protected string $name;
    /**
     * The certificate's status code (0 -> ongoing, 1 -> finalized)
     *
     * @var int
     */
    protected ?int $status = null;
    /**
     * The certificate's key
     *
     * @var string
     */
    protected ?string $key = null;
    /** @var MinGroup */
    protected ?MinGroup $manufacturer = null;
    /**
     * The certificate's version
     *
     * @var string
     */
    protected ?string $version = null;
    /**
     * The certificate description
     *
     * @var string
     */
    protected ?string $description = null;
    protected $objects = array('manufacturer' => '\\Arimac\\Sigfox\\Definition\\MinGroup');
    /**
     * @param string $id The certificate's identifier
     */
    function setId(?string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The certificate's identifier
     */
    function getId() : ?string
    {
        return $this->id;
    }
    /**
     * @param string $name The certificate's name
     */
    function setName(string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The certificate's name
     */
    function getName() : string
    {
        return $this->name;
    }
    /**
     * @param int $status The certificate's status code (0 -> ongoing, 1 -> finalized)
     */
    function setStatus(?int $status)
    {
        $this->status = $status;
    }
    /**
     * @return int The certificate's status code (0 -> ongoing, 1 -> finalized)
     */
    function getStatus() : ?int
    {
        return $this->status;
    }
    /**
     * @param string $key The certificate's key
     */
    function setKey(?string $key)
    {
        $this->key = $key;
    }
    /**
     * @return string The certificate's key
     */
    function getKey() : ?string
    {
        return $this->key;
    }
    /**
     * @param MinGroup manufacturer
     */
    function setManufacturer(?MinGroup $manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }
    /**
     * @return MinGroup manufacturer
     */
    function getManufacturer() : ?MinGroup
    {
        return $this->manufacturer;
    }
    /**
     * @param string $version The certificate's version
     */
    function setVersion(?string $version)
    {
        $this->version = $version;
    }
    /**
     * @return string The certificate's version
     */
    function getVersion() : ?string
    {
        return $this->version;
    }
    /**
     * @param string $description The certificate description
     */
    function setDescription(?string $description)
    {
        $this->description = $description;
    }
    /**
     * @return string The certificate description
     */
    function getDescription() : ?string
    {
        return $this->description;
    }
}