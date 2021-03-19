<?php

namespace Arimac\Sigfox\Definition;

/**
 * Defines a contact entity
 */
class BaseContact
{
    /**
     * The contact's name
     */
    protected ?string $name;
    /**
     * The contact's email. This field can be unset when updating.
     */
    protected string $email;
    /**
     * The contact's phone number must be in the international format with no spaces between numbers (+country code - number). This field can be unset when updating.
     */
    protected string $phoneNumber;
    /**
     * The contact's mobile phone number must be in the international format with no spaces between numbers (+country code - number). This field can be unset when updating.
     */
    protected string $mobilePhoneNumber;
    /**
     * The contact's address
     */
    protected string $address;
    /**
     * The contact's description
     */
    protected string $description;
}