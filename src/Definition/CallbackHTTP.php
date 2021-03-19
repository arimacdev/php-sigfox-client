<?php

namespace Arimac\Sigfox\Definition;

/**
 * Callback of type HTTP
 */
class CallbackHTTP
{
    /**
     * The URL called when this message has been processed
     */
    protected string $url;
    /**
     * The headers sent in the request. If no header is defined, this field is not present.
     */
    protected object $headers;
    /**
     * The body of the request, if any. It is only present if the request method is POST.
     */
    protected string $body;
    /**
     * The content type of the request. It is only present if the request is POST.
     */
    protected string $contentType;
    /**
     * The HTTP method, currently GET, POST or PUT.
     */
    protected string $method;
    /**
     * If there was an error, for instance if the body is JSON and could not be evaluated.
     */
    protected string $error;
}