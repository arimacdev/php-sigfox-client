<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
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
    protected $serialize = array(new PrimitiveSerializer(self::class, 'subject', 'string'), new PrimitiveSerializer(self::class, 'message', 'string'));
    /**
     * Setter for subject
     *
     * @param string $subject the subject of the mail which have been sent
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
     * @return string the subject of the mail which have been sent
     */
    public function getSubject() : string
    {
        return $this->subject;
    }
    /**
     * Setter for message
     *
     * @param string $message The body of the mail which have been sent
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
     * @return string The body of the mail which have been sent
     */
    public function getMessage() : string
    {
        return $this->message;
    }
}