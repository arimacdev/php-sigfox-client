<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\Callback;
use Arimac\Sigfox\Definition\object;
/**
 * Defines the properties needed to create a url callback
 */
class UrlCallback extends Callback
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
     * True if this callback is used for downlink, else false.
     *
     * @var bool
     */
    protected bool $downlinkHook;
    /**
     * The headers of the http request to send, as an object with key:value. This field can be unset when updating.
     *
     * @var object
     */
    protected object $headers;
    /**
     * Send SNI (Server Name Indication) for SSL/TLS connections. Used by BATCH_URL and URL callbacks (optional).
     *
     * @var bool
     */
    protected bool $sendSni;
    /**
     * The body template of the request. Only if httpMethpd is set to POST or PUT. It can contain predefined and custom variables. Mandatory for URL callbacks. This field can be unset when updating.
     *
     * @var string
     */
    protected string $bodyTemplate;
    /**
     * The body media type of the request, only if httpMethpd is set to POST or PUT. This field can be unset when updating.
     *
     * @var string
     */
    protected string $contentType;
    /**
     * @param string url The callback's url
     */
    function setUrl(string $url)
    {
        $this->url = $url;
    }
    /**
     * @return string The callback's url
     */
    function getUrl() : string
    {
        return $this->url;
    }
    /**
     * @param string httpMethod The http method used to send a callback
     */
    function setHttpMethod(string $httpMethod)
    {
        $this->httpMethod = $httpMethod;
    }
    /**
     * @return string The http method used to send a callback
     */
    function getHttpMethod() : string
    {
        return $this->httpMethod;
    }
    /**
     * @param bool downlinkHook True if this callback is used for downlink, else false.
     */
    function setDownlinkHook(bool $downlinkHook)
    {
        $this->downlinkHook = $downlinkHook;
    }
    /**
     * @return bool True if this callback is used for downlink, else false.
     */
    function getDownlinkHook() : bool
    {
        return $this->downlinkHook;
    }
    /**
     * @param object headers The headers of the http request to send, as an object with key:value. This field can be unset when updating.
     */
    function setHeaders(object $headers)
    {
        $this->headers = $headers;
    }
    /**
     * @return object The headers of the http request to send, as an object with key:value. This field can be unset when updating.
     */
    function getHeaders() : object
    {
        return $this->headers;
    }
    /**
     * @param bool sendSni Send SNI (Server Name Indication) for SSL/TLS connections. Used by BATCH_URL and URL callbacks (optional).
     */
    function setSendSni(bool $sendSni)
    {
        $this->sendSni = $sendSni;
    }
    /**
     * @return bool Send SNI (Server Name Indication) for SSL/TLS connections. Used by BATCH_URL and URL callbacks (optional).
     */
    function getSendSni() : bool
    {
        return $this->sendSni;
    }
    /**
     * @param string bodyTemplate The body template of the request. Only if httpMethpd is set to POST or PUT. It can contain predefined and custom variables. Mandatory for URL callbacks. This field can be unset when updating.
     */
    function setBodyTemplate(string $bodyTemplate)
    {
        $this->bodyTemplate = $bodyTemplate;
    }
    /**
     * @return string The body template of the request. Only if httpMethpd is set to POST or PUT. It can contain predefined and custom variables. Mandatory for URL callbacks. This field can be unset when updating.
     */
    function getBodyTemplate() : string
    {
        return $this->bodyTemplate;
    }
    /**
     * @param string contentType The body media type of the request, only if httpMethpd is set to POST or PUT. This field can be unset when updating.
     */
    function setContentType(string $contentType)
    {
        $this->contentType = $contentType;
    }
    /**
     * @return string The body media type of the request, only if httpMethpd is set to POST or PUT. This field can be unset when updating.
     */
    function getContentType() : string
    {
        return $this->contentType;
    }
}