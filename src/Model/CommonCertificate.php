<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
use Arimac\Sigfox\Validator\Rules\Child;
/**
 * Defines the common properties of a certificate
 */
class CommonCertificate extends Model
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
     * - {@see CommonCertificate::STATUS_ONGOING}
     * - {@see CommonCertificate::STATUS_FINALIZED}
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
    /**
     * Setter for id
     *
     * @param string $id The certificate's identifier
     *
     * @return static To use in method chains
     */
    public function setId(?string $id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return string The certificate's identifier
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * Setter for name
     *
     * @param string $name The certificate's name
     *
     * @return static To use in method chains
     */
    public function setName(?string $name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Getter for name
     *
     * @return string The certificate's name
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Setter for status
     *
     * @param int $status The certificate's status code
     *                    
     *                    - {@see CommonCertificate::STATUS_ONGOING}
     *                    - {@see CommonCertificate::STATUS_FINALIZED}
     *                    
     *
     * @return static To use in method chains
     */
    public function setStatus(?int $status)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Getter for status
     *
     * @return int The certificate's status code
     *             
     *             - {@see CommonCertificate::STATUS_ONGOING}
     *             - {@see CommonCertificate::STATUS_FINALIZED}
     *             
     */
    public function getStatus() : ?int
    {
        return $this->status;
    }
    /**
     * Setter for key
     *
     * @param string $key The certificate's key
     *
     * @return static To use in method chains
     */
    public function setKey(?string $key)
    {
        $this->key = $key;
        return $this;
    }
    /**
     * Getter for key
     *
     * @return string The certificate's key
     */
    public function getKey() : ?string
    {
        return $this->key;
    }
    /**
     * Setter for manufacturer
     *
     * @param MinGroup $manufacturer
     *
     * @return static To use in method chains
     */
    public function setManufacturer(?MinGroup $manufacturer)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }
    /**
     * Getter for manufacturer
     *
     * @return MinGroup
     */
    public function getManufacturer() : ?MinGroup
    {
        return $this->manufacturer;
    }
    /**
     * Setter for version
     *
     * @param string $version The certificate's version
     *
     * @return static To use in method chains
     */
    public function setVersion(?string $version)
    {
        $this->version = $version;
        return $this;
    }
    /**
     * Getter for version
     *
     * @return string The certificate's version
     */
    public function getVersion() : ?string
    {
        return $this->version;
    }
    /**
     * Setter for description
     *
     * @param string $description The certificate description
     *
     * @return static To use in method chains
     */
    public function setDescription(?string $description)
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Getter for description
     *
     * @return string The certificate description
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('id' => new PrimitiveSerializer('string'), 'name' => new PrimitiveSerializer('string'), 'status' => new PrimitiveSerializer('int'), 'key' => new PrimitiveSerializer('string'), 'manufacturer' => new ClassSerializer(MinGroup::class), 'version' => new PrimitiveSerializer('string'), 'description' => new PrimitiveSerializer('string'));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('name' => array(new Required()), 'manufacturer' => array(new Child()));
        return $rules;
    }
}