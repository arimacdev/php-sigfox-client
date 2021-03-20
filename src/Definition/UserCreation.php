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
    /**
     * @param string email The user's email
     */
    function setEmail(string $email)
    {
        $this->email = $email;
    }
    /**
     * @return string The user's email
     */
    function getEmail() : string
    {
        return $this->email;
    }
    /**
     * @param bool sendWelcomeEmail Send an email to the user to create/change is password
     */
    function setSendWelcomeEmail(bool $sendWelcomeEmail)
    {
        $this->sendWelcomeEmail = $sendWelcomeEmail;
    }
    /**
     * @return bool Send an email to the user to create/change is password
     */
    function getSendWelcomeEmail() : bool
    {
        return $this->sendWelcomeEmail;
    }
}