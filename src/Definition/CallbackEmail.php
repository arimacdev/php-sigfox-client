<?php

namespace Arimac\Sigfox\Definition;

/**
 * Callback of type Email
 */
class CallbackEmail
{
    /**
     * The subject of the email to be sent
     */
    protected string $subject;
    /**
     * The body of the email to be sent
     */
    protected string $message;
}