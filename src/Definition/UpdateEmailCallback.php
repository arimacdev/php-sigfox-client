<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\UpdateCallback;
/**
 * Defines the properties needed to create an email callback
 */
class UpdateEmailCallback extends UpdateCallback
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
     * @param string $subject The subject of the email.
     */
    function setSubject(?string $subject)
    {
        $this->subject = $subject;
    }
    /**
     * @return string The subject of the email.
     */
    function getSubject() : ?string
    {
        return $this->subject;
    }
    /**
     * @param string $recipient The recipient of the email.
     */
    function setRecipient(?string $recipient)
    {
        $this->recipient = $recipient;
    }
    /**
     * @return string The recipient of the email.
     */
    function getRecipient() : ?string
    {
        return $this->recipient;
    }
    /**
     * @param string $message the content of the message.
     */
    function setMessage(?string $message)
    {
        $this->message = $message;
    }
    /**
     * @return string the content of the message.
     */
    function getMessage() : ?string
    {
        return $this->message;
    }
}