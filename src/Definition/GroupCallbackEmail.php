<?php

namespace Arimac\Sigfox\Definition;

/**
 * Callback of email type
 */
class GroupCallbackEmail
{
    /**
     * the subject of the mail which have been sent
     */
    protected string $subject;
    /**
     * The body of the mail which have been sent
     */
    protected string $message;
}