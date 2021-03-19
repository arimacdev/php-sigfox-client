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
    protected string $subject;
    /**
     * The body of the mail which have been sent
     *
     * @var string
     */
    protected string $message;
}