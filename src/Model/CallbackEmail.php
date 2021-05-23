<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Callback of type Email
 */
trait CallbackEmail
{
    /**
     * The subject of the email to be sent
     *
     * @var string
     */
    protected ?string $subject = null;
    /**
     * The body of the email to be sent
     *
     * @var string
     */
    protected ?string $message = null;
    /**
     * Setter for subject
     *
     * @param string $subject The subject of the email to be sent
     *
     * @return static To use in method chains
     */
    public function setSubject(?string $subject)
    {
        $this->subject = $subject;
        return $this;
    }
    /**
     * Getter for subject
     *
     * @return string The subject of the email to be sent
     */
    public function getSubject() : ?string
    {
        return $this->subject;
    }
    /**
     * Setter for message
     *
     * @param string $message The body of the email to be sent
     *
     * @return static To use in method chains
     */
    public function setMessage(?string $message)
    {
        $this->message = $message;
        return $this;
    }
    /**
     * Getter for message
     *
     * @return string The body of the email to be sent
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaDataCallbackEmail() : array
    {
        $serializers = array('subject' => new PrimitiveSerializer('string'), 'message' => new PrimitiveSerializer('string'));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaDataCallbackEmail() : array
    {
        $rules = array();
        return $rules;
    }
}