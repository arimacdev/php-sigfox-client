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
}