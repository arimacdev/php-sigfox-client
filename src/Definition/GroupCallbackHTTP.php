<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\object;
/**
 * Callback of HTTP type
 */
class GroupCallbackHTTP
{
    /**
     * The URL called when this message has been processed
     *
     * @var string
     */
    protected string $url;
    /**
     * The headers sent in the request. If no header is defined, this field is not present.
     *
     * @var object
     */
    protected object $headers;
    /**
     * The body of the request, if any. It is only present if the request method is POST.
     *
     * @var string
     */
    protected string $body;
    /**
     * The content type of the request. It is only present if the request is a POST.
     *
     * @var string
     */
    protected string $contentType;
    /**
     * The HTTP method, currently only GET, POST or PUT.
     *
     * @var string
     */
    protected string $method;
    /**
     * If there was an error, for instance if the body is JSON and could not be evaluated.
     *
     * @var string
     */
    protected string $error;
}