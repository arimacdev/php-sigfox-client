<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Defines the properties needed to create a batch url callback
 */
class EmailCallback extends Callback
{
    /**
     * The subject of the email.
     *
     * @var string
     */
    protected ?string $subject = null;
    /**
     * The recipient of the email.
     *
     * @var string
     */
    protected ?string $recipient = null;
    /**
     * the content of the message.
     *
     * @var string
     */
    protected ?string $message = null;
    /**
     * Setter for subject
     *
     * @param string $subject The subject of the email.
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
     * @return string The subject of the email.
     */
    public function getSubject() : ?string
    {
        return $this->subject;
    }
    /**
     * Setter for recipient
     *
     * @param string $recipient The recipient of the email.
     *
     * @return static To use in method chains
     */
    public function setRecipient(?string $recipient)
    {
        $this->recipient = $recipient;
        return $this;
    }
    /**
     * Getter for recipient
     *
     * @return string The recipient of the email.
     */
    public function getRecipient() : ?string
    {
        return $this->recipient;
    }
    /**
     * Setter for message
     *
     * @param string $message the content of the message.
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
     * @return string the content of the message.
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
    public function getSerializeMetaData() : array
    {
        $serializers = array('subject' => new PrimitiveSerializer('string'), 'recipient' => new PrimitiveSerializer('string'), 'message' => new PrimitiveSerializer('string'));
        $serializers = array_merge($serializers, parent::getSerializeMetaData());
        return $serializers;
    }
}