<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
/**
 * Defines the common properties of a certificate
 */
class CommonCertificate extends Definition
{
    /**
     * ongoing
     */
    public const STATUS_ONGOING = 0;
    /**
     * finalized
     */
    public const STATUS_FINALIZED = 1;
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
    protected ?string $name = null;
    /**
     * The certificate's status code
     *
     * @var self::STATUS_*
     */
    protected ?int $status = null;
    /**
     * The certificate's key
     *
     * @var string
     */
    protected ?string $key = null;
    /**
     * @var MinGroup
     */
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
    protected $serialize = array('manufacturer' => MinGroup::class);
    /**
     * Setter for id
     *
     * @param string $id The certificate's identifier
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
     * @return string The certificate's identifier
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Setter for name
     *
     * @param string $name The certificate's name
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
     * @return string The certificate's name
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Setter for status
     *
     * @param self::STATUS_* $status The certificate's status code
     *
     * @return self To use in method chains
     */
    public function setStatus(?int $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Getter for status
     *
     * @return self::STATUS_* The certificate's status code
     */
    public function getStatus() : int
    {
        return $this->status;
    }
    /**
     * Setter for key
     *
     * @param string $key The certificate's key
     *
     * @return self To use in method chains
     */
    public function setKey(?string $key) : self
    {
        $this->key = $key;
        return $this;
    }
    /**
     * Getter for key
     *
     * @return string The certificate's key
     */
    public function getKey() : string
    {
        return $this->key;
    }
    /**
     * Setter for manufacturer
     *
     * @param MinGroup $manufacturer
     *
     * @return self To use in method chains
     */
    public function setManufacturer(?MinGroup $manufacturer) : self
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }
    /**
     * Getter for manufacturer
     *
     * @return MinGroup
     */
    public function getManufacturer() : MinGroup
    {
        return $this->manufacturer;
    }
    /**
     * Setter for version
     *
     * @param string $version The certificate's version
     *
     * @return self To use in method chains
     */
    public function setVersion(?string $version) : self
    {
        $this->version = $version;
        return $this;
    }
    /**
     * Getter for version
     *
     * @return string The certificate's version
     */
    public function getVersion() : string
    {
        return $this->version;
    }
    /**
     * Setter for description
     *
     * @param string $description The certificate description
     *
     * @return self To use in method chains
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Getter for description
     *
     * @return string The certificate description
     */
    public function getDescription() : string
    {
        return $this->description;
    }
}