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
    protected string $subject;
    /**
     * The body of the email to be sent
     *
     * @var string
     */
    protected string $message;
}