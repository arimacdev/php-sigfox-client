<?php

namespace Arimac\Sigfox\Definition;

/**
 * Callback of email type
 */
trait GroupCallbackEmail
{
    /**
     * the subject of the mail which have been sent
     *
     * @var string
     */
    protected ?string $subject = null;
    /**
     * The body of the mail which have been sent
     *
     * @var string
     */
    protected ?string $message = null;
    /**
     * @param string $subject the subject of the mail which have been sent
     */
    function setSubject(?string $subject)
    {
        $this->subject = $subject;
    }
    /**
     * @return string the subject of the mail which have been sent
     */
    function getSubject() : ?string
    {
        return $this->subject;
    }
    /**
     * @param string $message The body of the mail which have been sent
     */
    function setMessage(?string $message)
    {
        $this->message = $message;
    }
    /**
     * @return string The body of the mail which have been sent
     */
    function getMessage() : ?string
    {
        return $this->message;
    }
}