<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Callback of type HTTP
 */
class CallbackHTTP extends Model
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
     * The content type of the request. It is only present if the request is POST.
     *
     * @var string
     */
    protected ?string $contentType = null;
    /**
     * The HTTP method, currently GET, POST or PUT.
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
     * @return static To use in method chains
     */
    public function setUrl(?string $url)
    {
        $this->url = $url;
        return $this;
    }
    /**
     * Getter for url
     *
     * @return string The URL called when this message has been processed
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
    /**
     * Setter for headers
     *
     * @param array $headers The headers sent in the request. If no header is defined, this field is not present.
     *
     * @return static To use in method chains
     */
    public function setHeaders(?array $headers)
    {
        $this->headers = $headers;
        return $this;
    }
    /**
     * Getter for headers
     *
     * @return array The headers sent in the request. If no header is defined, this field is not present.
     */
    public function getHeaders() : ?array
    {
        return $this->headers;
    }
    /**
     * Setter for body
     *
     * @param string $body The body of the request, if any. It is only present if the request method is POST.
     *
     * @return static To use in method chains
     */
    public function setBody(?string $body)
    {
        $this->body = $body;
        return $this;
    }
    /**
     * Getter for body
     *
     * @return string The body of the request, if any. It is only present if the request method is POST.
     */
    public function getBody() : ?string
    {
        return $this->body;
    }
    /**
     * Setter for contentType
     *
     * @param string $contentType The content type of the request. It is only present if the request is POST.
     *
     * @return static To use in method chains
     */
    public function setContentType(?string $contentType)
    {
        $this->contentType = $contentType;
        return $this;
    }
    /**
     * Getter for contentType
     *
     * @return string The content type of the request. It is only present if the request is POST.
     */
    public function getContentType() : ?string
    {
        return $this->contentType;
    }
    /**
     * Setter for method
     *
     * @param string $method The HTTP method, currently GET, POST or PUT.
     *
     * @return static To use in method chains
     */
    public function setMethod(?string $method)
    {
        $this->method = $method;
        return $this;
    }
    /**
     * Getter for method
     *
     * @return string The HTTP method, currently GET, POST or PUT.
     */
    public function getMethod() : ?string
    {
        return $this->method;
    }
    /**
     * Setter for error
     *
     * @param string $error If there was an error, for instance if the body is JSON and could not be evaluated.
     *
     * @return static To use in method chains
     */
    public function setError(?string $error)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Getter for error
     *
     * @return string If there was an error, for instance if the body is JSON and could not be evaluated.
     */
    public function getError() : ?string
    {
        return $this->error;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('url' => new PrimitiveSerializer('string'), 'headers' => new PrimitiveSerializer('array'), 'body' => new PrimitiveSerializer('string'), 'contentType' => new PrimitiveSerializer('string'), 'method' => new PrimitiveSerializer('string'), 'error' => new PrimitiveSerializer('string'));
        return $serializers;
    }
}