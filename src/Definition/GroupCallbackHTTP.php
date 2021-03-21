<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
/**
 * Callback of HTTP type
 */
class GroupCallbackHTTP extends Definition
{
    /**
     * The URL called when this message has been processed
     *
     * @var string
     */
    protected ?string $url = null;
    /**
     * The headers sent in the request. If no header is defined, this field is not present.
     *
     * @var array
     */
    protected ?array $headers = null;
    /**
     * The body of the request, if any. It is only present if the request method is POST.
     *
     * @var string
     */
    protected ?string $body = null;
    /**
     * The content type of the request. It is only present if the request is a POST.
     *
     * @var string
     */
    protected ?string $contentType = null;
    /**
     * The HTTP method, currently only GET, POST or PUT.
     *
     * @var string
     */
    protected ?string $method = null;
    /**
     * If there was an error, for instance if the body is JSON and could not be evaluated.
     *
     * @var string
     */
    protected ?string $error = null;
    /**
     * @param string $url The URL called when this message has been processed
     */
    function setUrl(?string $url)
    {
        $this->url = $url;
    }
    /**
     * @return string The URL called when this message has been processed
     */
    function getUrl() : ?string
    {
        return $this->url;
    }
    /**
     * @param array $headers The headers sent in the request. If no header is defined, this field is not present.
     */
    function setHeaders(?array $headers)
    {
        $this->headers = $headers;
    }
    /**
     * @return array The headers sent in the request. If no header is defined, this field is not present.
     */
    function getHeaders() : ?array
    {
        return $this->headers;
    }
    /**
     * @param string $body The body of the request, if any. It is only present if the request method is POST.
     */
    function setBody(?string $body)
    {
        $this->body = $body;
    }
    /**
     * @return string The body of the request, if any. It is only present if the request method is POST.
     */
    function getBody() : ?string
    {
        return $this->body;
    }
    /**
     * @param string $contentType The content type of the request. It is only present if the request is a POST.
     */
    function setContentType(?string $contentType)
    {
        $this->contentType = $contentType;
    }
    /**
     * @return string The content type of the request. It is only present if the request is a POST.
     */
    function getContentType() : ?string
    {
        return $this->contentType;
    }
    /**
     * @param string $method The HTTP method, currently only GET, POST or PUT.
     */
    function setMethod(?string $method)
    {
        $this->method = $method;
    }
    /**
     * @return string The HTTP method, currently only GET, POST or PUT.
     */
    function getMethod() : ?string
    {
        return $this->method;
    }
    /**
     * @param string $error If there was an error, for instance if the body is JSON and could not be evaluated.
     */
    function setError(?string $error)
    {
        $this->error = $error;
    }
    /**
     * @return string If there was an error, for instance if the body is JSON and could not be evaluated.
     */
    function getError() : ?string
    {
        return $this->error;
    }
}