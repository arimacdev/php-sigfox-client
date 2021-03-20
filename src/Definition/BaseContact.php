<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\Actions;
use Arimac\Sigfox\Definition\Resources;
/**
 * Defines a contact entity
 */
class BaseContact
{
    /**
     * The contact's name
     *
     * @var string
     */
    protected string $name;
    /**
     * The contact's email. This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $email;
    /**
     * The contact's phone number must be in the international format with no spaces between numbers (+country code - number). This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $phoneNumber;
    /**
     * The contact's mobile phone number must be in the international format with no spaces between numbers (+country code - number). This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $mobilePhoneNumber;
    /**
     * The contact's address
     *
     * @var string
     */
    protected ?string $address;
    /**
     * The contact's description
     *
     * @var string
     */
    protected ?string $description;
    /** @var Actions */
    protected ?Actions $actions;
    /** @var Resources */
    protected ?Resources $resources;
    /**
     * @param string name The contact's name
     */
    function setName(string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The contact's name
     */
    function getName() : string
    {
        return $this->name;
    }
    /**
     * @param string email The contact's email. This field can be unset when updating.
     */
    function setEmail(?string $email)
    {
        $this->email = $email;
    }
    /**
     * @return string The contact's email. This field can be unset when updating.
     */
    function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * @param string phoneNumber The contact's phone number must be in the international format with no spaces between numbers (+country code - number). This field can be unset when updating.
     */
    function setPhoneNumber(?string $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }
    /**
     * @return string The contact's phone number must be in the international format with no spaces between numbers (+country code - number). This field can be unset when updating.
     */
    function getPhoneNumber() : ?string
    {
        return $this->phoneNumber;
    }
    /**
     * @param string mobilePhoneNumber The contact's mobile phone number must be in the international format with no spaces between numbers (+country code - number). This field can be unset when updating.
     */
    function setMobilePhoneNumber(?string $mobilePhoneNumber)
    {
        $this->mobilePhoneNumber = $mobilePhoneNumber;
    }
    /**
     * @return string The contact's mobile phone number must be in the international format with no spaces between numbers (+country code - number). This field can be unset when updating.
     */
    function getMobilePhoneNumber() : ?string
    {
        return $this->mobilePhoneNumber;
    }
    /**
     * @param string address The contact's address
     */
    function setAddress(?string $address)
    {
        $this->address = $address;
    }
    /**
     * @return string The contact's address
     */
    function getAddress() : ?string
    {
        return $this->address;
    }
    /**
     * @param string description The contact's description
     */
    function setDescription(?string $description)
    {
        $this->description = $description;
    }
    /**
     * @return string The contact's description
     */
    function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * @param Actions actions
     */
    function setActions(?Actions $actions)
    {
        $this->actions = $actions;
    }
    /**
     * @return Actions actions
     */
    function getActions() : ?Actions
    {
        return $this->actions;
    }
    /**
     * @param Resources resources
     */
    function setResources(?Resources $resources)
    {
        $this->resources = $resources;
    }
    /**
     * @return Resources resources
     */
    function getResources() : ?Resources
    {
        return $this->resources;
    }
}