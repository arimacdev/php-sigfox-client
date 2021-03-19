<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CreateCallback;
/**
 * Defines the properties needed to create a batch url callback
 */
class CreateEmailCallback extends CreateCallback
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