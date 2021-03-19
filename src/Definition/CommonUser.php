<?php

namespace Arimac\Sigfox\Definition;

/**
 * Generic information about a User
 */
class CommonUser
{
    /**
     * The user's first name
     *
     * @var string
     */
    protected string $firstName;
    /**
     * The user's last name
     *
     * @var string
     */
    protected string $lastName;
    /**
     * The user's timezone
     *
     * @var string
     */
    protected string $timezone;
}