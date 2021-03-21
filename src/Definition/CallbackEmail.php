<?php

namespace Arimac\Sigfox\Definition;

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
     * @param string $subject The subject of the email to be sent
     */
    function setSubject(?string $subject)
    {
        $this->subject = $subject;
    }
    /**
     * @return string The subject of the email to be sent
     */
    function getSubject() : ?string
    {
        return $this->subject;
    }
    /**
     * @param string $message The body of the email to be sent
     */
    function setMessage(?string $message)
    {
        $this->message = $message;
    }
    /**
     * @return string The body of the email to be sent
     */
    function getMessage() : ?string
    {
        return $this->message;
    }
}