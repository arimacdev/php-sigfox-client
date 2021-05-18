<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
use Arimac\Sigfox\Validator\Rules\MaxLength;
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
    public function getEmail() : ?string
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
    public function getSendWelcomeEmail() : ?bool
    {
        return $this->sendWelcomeEmail;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('email' => new PrimitiveSerializer('string'), 'sendWelcomeEmail' => new PrimitiveSerializer('bool'));
        $serializers = array_merge($serializers, parent::getSerializeMetaData());
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('email' => array(new Required(), new MaxLength(250)));
        $rules = array_merge($rules, parent::getValidationMetaData());
        return $rules;
    }
}