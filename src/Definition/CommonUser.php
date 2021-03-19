<?php

namespace Arimac\Sigfox\Definition;

/**
 * Generic information about a User
 */
class CommonUser
{
    /**
     * The user's first name
     */
    protected string $firstName;
    /**
     * The user's last name
     */
    protected string $lastName;
    /**
     * The user's timezone
     */
    protected string $timezone;
}