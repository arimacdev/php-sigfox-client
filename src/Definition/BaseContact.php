<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
/**
 * Defines a contact entity
 */
class BaseContact extends Definition
{
    /**
     * The contact's name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * The contact's email. This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $email = null;
    /**
     * The contact's phone number must be in the international format with no spaces between numbers (+country code -
     * number). This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $phoneNumber = null;
    /**
     * The contact's mobile phone number must be in the international format with no spaces between numbers (+country
     * code - number). This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $mobilePhoneNumber = null;
    /**
     * The contact's address
     *
     * @var string
     */
    protected ?string $address = null;
    /**
     * The contact's description
     *
     * @var string
     */
    protected ?string $description = null;
    /**
     * @var string[]
     */
    protected ?array $actions = null;
    /**
     * @var string[]
     */
    protected ?array $resources = null;
    /**
     * @internal
     */
    protected array $validations = array('name' => array('required'), 'email' => array('max:250', 'nullable'));
    /**
     * Setter for name
     *
     * @param string $name The contact's name
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
     * @return string The contact's name
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Setter for email
     *
     * @param string $email The contact's email. This field can be unset when updating.
     *
     * @return self To use in method chains
     */
    public function setEmail(?string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * Getter for email
     *
     * @return string The contact's email. This field can be unset when updating.
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * Setter for phoneNumber
     *
     * @param string $phoneNumber The contact's phone number must be in the international format with no spaces
     *                            between numbers (+country code - number). This field can be unset when updating.
     *
     * @return self To use in method chains
     */
    public function setPhoneNumber(?string $phoneNumber) : self
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Getter for phoneNumber
     *
     * @return string The contact's phone number must be in the international format with no spaces between numbers
     *                (+country code - number). This field can be unset when updating.
     */
    public function getPhoneNumber() : ?string
    {
        return $this->phoneNumber;
    }
    /**
     * Setter for mobilePhoneNumber
     *
     * @param string $mobilePhoneNumber The contact's mobile phone number must be in the international format with no
     *                                  spaces between numbers (+country code - number). This field can be unset when
     *                                  updating.
     *
     * @return self To use in method chains
     */
    public function setMobilePhoneNumber(?string $mobilePhoneNumber) : self
    {
        $this->mobilePhoneNumber = $mobilePhoneNumber;
        return $this;
    }
    /**
     * Getter for mobilePhoneNumber
     *
     * @return string The contact's mobile phone number must be in the international format with no spaces between
     *                numbers (+country code - number). This field can be unset when updating.
     */
    public function getMobilePhoneNumber() : ?string
    {
        return $this->mobilePhoneNumber;
    }
    /**
     * Setter for address
     *
     * @param string $address The contact's address
     *
     * @return self To use in method chains
     */
    public function setAddress(?string $address) : self
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Getter for address
     *
     * @return string The contact's address
     */
    public function getAddress() : ?string
    {
        return $this->address;
    }
    /**
     * Setter for description
     *
     * @param string $description The contact's description
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
     * @return string The contact's description
     */
    public function getDescription() : ?string
    {
        return $this->description;
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
    public function getActions() : ?array
    {
        return $this->actions;
    }
    /**
     * Setter for resources
     *
     * @param string[] $resources
     *
     * @return self To use in method chains
     */
    public function setResources(?array $resources) : self
    {
        $this->resources = $resources;
        return $this;
    }
    /**
     * Getter for resources
     *
     * @return string[]
     */
    public function getResources() : ?array
    {
        return $this->resources;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('name' => new PrimitiveSerializer('string'), 'email' => new PrimitiveSerializer('string'), 'phoneNumber' => new PrimitiveSerializer('string'), 'mobilePhoneNumber' => new PrimitiveSerializer('string'), 'address' => new PrimitiveSerializer('string'), 'description' => new PrimitiveSerializer('string'), 'actions' => new ArraySerializer(new PrimitiveSerializer('string')), 'resources' => new ArraySerializer(new PrimitiveSerializer('string')));
        return $serializers;
    }
}