<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
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
    protected ?string $email = null;
    /**
     * Send an email to the user to create/change is password
     *
     * @var bool
     */
    protected ?bool $sendWelcomeEmail = null;
    protected $serialize = array(new PrimitiveSerializer(self::class, 'email', 'string'), new PrimitiveSerializer(self::class, 'sendWelcomeEmail', 'bool'));
    protected $validations = array('email' => array('required', 'max:250'));
    /**
     * Setter for email
     *
     * @param string $email The user's email
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
     * @return string The user's email
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * Setter for sendWelcomeEmail
     *
     * @param bool $sendWelcomeEmail Send an email to the user to create/change is password
     *
     * @return self To use in method chains
     */
    public function setSendWelcomeEmail(?bool $sendWelcomeEmail) : self
    {
        $this->sendWelcomeEmail = $sendWelcomeEmail;
        return $this;
    }
    /**
     * Getter for sendWelcomeEmail
     *
     * @return bool Send an email to the user to create/change is password
     */
    public function getSendWelcomeEmail() : bool
    {
        return $this->sendWelcomeEmail;
    }
}