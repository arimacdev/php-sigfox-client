<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\UpdateCallback;
/**
 * Defines the properties needed to create a batch url callback
 */
class UpdatebatchUrlCallback extends UpdateCallback
{
    /**
     * The callback's url
     *
     * @var string
     */
    protected string $url;
    /**
     * The http method used to send a callback
     *
     * @var string
     */
    protected string $httpMethod;
    /**
     * The line pattern representing a message.
     *
     * @var string
     */
    protected string $linePattern;
}