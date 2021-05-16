<?php

namespace Arimac\Sigfox\Definition;

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
     * @return self To use in method chains
     */
    public function setSubject(?string $subject) : self
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
     * @return self To use in method chains
     */
    public function setRecipient(?string $recipient) : self
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
     * @return self To use in method chains
     */
    public function setMessage(?string $message) : self
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
        return array('subject' => new PrimitiveSerializer(self::class, 'subject', 'string'), 'recipient' => new PrimitiveSerializer(self::class, 'recipient', 'string'), 'message' => new PrimitiveSerializer(self::class, 'message', 'string'));
    }
}