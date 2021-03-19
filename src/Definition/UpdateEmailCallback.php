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
    protected string $subject;
    /**
     * The recipient of the email.
     *
     * @var string
     */
    protected string $recipient;
    /**
     * the content of the message.
     *
     * @var string
     */
    protected string $message;
}