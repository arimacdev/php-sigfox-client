<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\UserUpdate;
/**
 * User information for creation
 */
class UserCreation extends UserUpdate
{
    /**
     * The user's email
     *
     * @var string
     */
    protected string $email;
    /**
     * Send an email to the user to create/change is password
     *
     * @var bool
     */
    protected bool $sendWelcomeEmail;
}