<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CreateCallback;
/**
 * Defines the properties needed to create a url callback
 */
class CreateUrlCallback extends CreateCallback
{
    /**
     * The callback's url
     *
     * @var string
     */
    protected ?string $url = null;
    /**
     * The http method used to send a callback
     *
     * @var string
     */
    protected ?string $httpMethod = null;
    /**
     * The headers of the http request to send, as an object with key:value. This field can be unset when updating.
     *
     * @var array
     */
    protected ?array $headers = null;
    /**
     * Send SNI (Server Name Indication) for SSL/TLS connections. Used by BATCH_URL and URL callbacks (optional).
     *
     * @var bool
     */
    protected ?bool $sendSni = null;
    /**
     * The body template of the request. Only if httpMethpd is set to POST or PUT. It can contain predefined and custom variables. Mandatory for URL callbacks. This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $bodyTemplate = null;
    /**
     * The body media type of the request, only if httpMethpd is set to POST or PUT. This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $contentType = null;
    /**
     * @param string $url The callback's url
     */
    function setUrl(?string $url)
    {
        $this->url = $url;
    }
    /**
     * @return string The callback's url
     */
    function getUrl() : ?string
    {
        return $this->url;
    }
    /**
     * @param string $httpMethod The http method used to send a callback
     */
    function setHttpMethod(?string $httpMethod)
    {
        $this->httpMethod = $httpMethod;
    }
    /**
     * @return string The http method used to send a callback
     */
    function getHttpMethod() : ?string
    {
        return $this->httpMethod;
    }
    /**
     * @param array $headers The headers of the http request to send, as an object with key:value. This field can be unset when updating.
     */
    function setHeaders(?array $headers)
    {
        $this->headers = $headers;
    }
    /**
     * @return array The headers of the http request to send, as an object with key:value. This field can be unset when updating.
     */
    function getHeaders() : ?array
    {
        return $this->headers;
    }
    /**
     * @param bool $sendSni Send SNI (Server Name Indication) for SSL/TLS connections. Used by BATCH_URL and URL callbacks (optional).
     */
    function setSendSni(?bool $sendSni)
    {
        $this->sendSni = $sendSni;
    }
    /**
     * @return bool Send SNI (Server Name Indication) for SSL/TLS connections. Used by BATCH_URL and URL callbacks (optional).
     */
    function getSendSni() : ?bool
    {
        return $this->sendSni;
    }
    /**
     * @param string $bodyTemplate The body template of the request. Only if httpMethpd is set to POST or PUT. It can contain predefined and custom variables. Mandatory for URL callbacks. This field can be unset when updating.
     */
    function setBodyTemplate(?string $bodyTemplate)
    {
        $this->bodyTemplate = $bodyTemplate;
    }
    /**
     * @return string The body template of the request. Only if httpMethpd is set to POST or PUT. It can contain predefined and custom variables. Mandatory for URL callbacks. This field can be unset when updating.
     */
    function getBodyTemplate() : ?string
    {
        return $this->bodyTemplate;
    }
    /**
     * @param string $contentType The body media type of the request, only if httpMethpd is set to POST or PUT. This field can be unset when updating.
     */
    function setContentType(?string $contentType)
    {
        $this->contentType = $contentType;
    }
    /**
     * @return string The body media type of the request, only if httpMethpd is set to POST or PUT. This field can be unset when updating.
     */
    function getContentType() : ?string
    {
        return $this->contentType;
    }
}