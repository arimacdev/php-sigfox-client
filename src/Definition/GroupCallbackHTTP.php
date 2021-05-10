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
     * Setter for url
     *
     * @param string $url The URL called when this message has been processed
     *
     * @return self To use in method chains
     */
    public function setUrl(?string $url) : self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * Getter for url
     *
     * @return string The URL called when this message has been processed
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * Setter for headers
     *
     * @param array $headers The headers sent in the request. If no header is defined, this field is not present.
     *
     * @return self To use in method chains
     */
    public function setHeaders(?array $headers) : self
    {
        $this->headers = $headers;
        return $this;
    }
    /**
     * Getter for headers
     *
     * @return array The headers sent in the request. If no header is defined, this field is not present.
     */
    public function getHeaders() : array
    {
        return $this->headers;
    }
    /**
     * Setter for body
     *
     * @param string $body The body of the request, if any. It is only present if the request method is POST.
     *
     * @return self To use in method chains
     */
    public function setBody(?string $body) : self
    {
        $this->body = $body;
        return $this;
    }
    /**
     * Getter for body
     *
     * @return string The body of the request, if any. It is only present if the request method is POST.
     */
    public function getBody() : string
    {
        return $this->body;
    }
    /**
     * Setter for contentType
     *
     * @param string $contentType The content type of the request. It is only present if the request is a POST.
     *
     * @return self To use in method chains
     */
    public function setContentType(?string $contentType) : self
    {
        $this->contentType = $contentType;
        return $this;
    }
    /**
     * Getter for contentType
     *
     * @return string The content type of the request. It is only present if the request is a POST.
     */
    public function getContentType() : string
    {
        return $this->contentType;
    }
    /**
     * Setter for method
     *
     * @param string $method The HTTP method, currently only GET, POST or PUT.
     *
     * @return self To use in method chains
     */
    public function setMethod(?string $method) : self
    {
        $this->method = $method;
        return $this;
    }
    /**
     * Getter for method
     *
     * @return string The HTTP method, currently only GET, POST or PUT.
     */
    public function getMethod() : string
    {
        return $this->method;
    }
    /**
     * Setter for error
     *
     * @param string $error If there was an error, for instance if the body is JSON and could not be evaluated.
     *
     * @return self To use in method chains
     */
    public function setError(?string $error) : self
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Getter for error
     *
     * @return string If there was an error, for instance if the body is JSON and could not be evaluated.
     */
    public function getError() : string
    {
        return $this->error;
    }
}