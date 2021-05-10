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
     * Setter for subject
     *
     * @param string $subject The subject of the email to be sent
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
     * @return string The subject of the email to be sent
     */
    public function getSubject() : string
    {
        return $this->subject;
    }
    /**
     * Setter for message
     *
     * @param string $message The body of the email to be sent
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
     * @return string The body of the email to be sent
     */
    public function getMessage() : string
    {
        return $this->message;
    }
}