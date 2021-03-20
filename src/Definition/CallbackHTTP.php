<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\object;
/**
 * Callback of type HTTP
 */
class CallbackHTTP
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
     * The content type of the request. It is only present if the request is POST.
     *
     * @var string
     */
    protected string $contentType;
    /**
     * The HTTP method, currently GET, POST or PUT.
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
    /**
     * @param string url The URL called when this message has been processed
     */
    function setUrl(string $url)
    {
        $this->url = $url;
    }
    /**
     * @return string The URL called when this message has been processed
     */
    function getUrl() : string
    {
        return $this->url;
    }
    /**
     * @param object headers The headers sent in the request. If no header is defined, this field is not present.
     */
    function setHeaders(object $headers)
    {
        $this->headers = $headers;
    }
    /**
     * @return object The headers sent in the request. If no header is defined, this field is not present.
     */
    function getHeaders() : object
    {
        return $this->headers;
    }
    /**
     * @param string body The body of the request, if any. It is only present if the request method is POST.
     */
    function setBody(string $body)
    {
        $this->body = $body;
    }
    /**
     * @return string The body of the request, if any. It is only present if the request method is POST.
     */
    function getBody() : string
    {
        return $this->body;
    }
    /**
     * @param string contentType The content type of the request. It is only present if the request is POST.
     */
    function setContentType(string $contentType)
    {
        $this->contentType = $contentType;
    }
    /**
     * @return string The content type of the request. It is only present if the request is POST.
     */
    function getContentType() : string
    {
        return $this->contentType;
    }
    /**
     * @param string method The HTTP method, currently GET, POST or PUT.
     */
    function setMethod(string $method)
    {
        $this->method = $method;
    }
    /**
     * @return string The HTTP method, currently GET, POST or PUT.
     */
    function getMethod() : string
    {
        return $this->method;
    }
    /**
     * @param string error If there was an error, for instance if the body is JSON and could not be evaluated.
     */
    function setError(string $error)
    {
        $this->error = $error;
    }
    /**
     * @return string If there was an error, for instance if the body is JSON and could not be evaluated.
     */
    function getError() : string
    {
        return $this->error;
    }
}