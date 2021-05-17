<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
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
    protected ?string $url = null;
    /**
     * The http method used to send a callback
     *
     * @var string
     */
    protected ?string $httpMethod = null;
    /**
     * True if this callback is used for downlink, else false.
     *
     * @var bool
     */
    protected ?bool $downlinkHook = null;
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
     * The body template of the request. Only if httpMethpd is set to POST or PUT. It can contain predefined and
     * custom variables. Mandatory for URL callbacks. This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $bodyTemplate = null;
    /**
     * The body media type of the request, only if httpMethpd is set to POST or PUT. This field can be unset when
     * updating.
     *
     * @var string
     */
    protected ?string $contentType = null;
    /**
     * @internal
     */
    protected array $validations = array('httpMethod' => array('in:GET,PUT,POST', 'nullable'));
    /**
     * Setter for url
     *
     * @param string $url The callback's url
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
     * @return string The callback's url
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
    /**
     * Setter for httpMethod
     *
     * @param string $httpMethod The http method used to send a callback
     *
     * @return self To use in method chains
     */
    public function setHttpMethod(?string $httpMethod) : self
    {
        $this->httpMethod = $httpMethod;
        return $this;
    }
    /**
     * Getter for httpMethod
     *
     * @return string The http method used to send a callback
     */
    public function getHttpMethod() : ?string
    {
        return $this->httpMethod;
    }
    /**
     * Setter for downlinkHook
     *
     * @param bool $downlinkHook True if this callback is used for downlink, else false.
     *
     * @return self To use in method chains
     */
    public function setDownlinkHook(?bool $downlinkHook) : self
    {
        $this->downlinkHook = $downlinkHook;
        return $this;
    }
    /**
     * Getter for downlinkHook
     *
     * @return bool True if this callback is used for downlink, else false.
     */
    public function getDownlinkHook() : ?bool
    {
        return $this->downlinkHook;
    }
    /**
     * Setter for headers
     *
     * @param array $headers The headers of the http request to send, as an object with key:value. This field can be
     *                       unset when updating.
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
     * @return array The headers of the http request to send, as an object with key:value. This field can be unset
     *               when updating.
     */
    public function getHeaders() : ?array
    {
        return $this->headers;
    }
    /**
     * Setter for sendSni
     *
     * @param bool $sendSni Send SNI (Server Name Indication) for SSL/TLS connections. Used by BATCH_URL and URL
     *                      callbacks (optional).
     *
     * @return self To use in method chains
     */
    public function setSendSni(?bool $sendSni) : self
    {
        $this->sendSni = $sendSni;
        return $this;
    }
    /**
     * Getter for sendSni
     *
     * @return bool Send SNI (Server Name Indication) for SSL/TLS connections. Used by BATCH_URL and URL callbacks
     *              (optional).
     */
    public function getSendSni() : ?bool
    {
        return $this->sendSni;
    }
    /**
     * Setter for bodyTemplate
     *
     * @param string $bodyTemplate The body template of the request. Only if httpMethpd is set to POST or PUT. It can
     *                             contain predefined and custom variables. Mandatory for URL callbacks. This field
     *                             can be unset when updating.
     *
     * @return self To use in method chains
     */
    public function setBodyTemplate(?string $bodyTemplate) : self
    {
        $this->bodyTemplate = $bodyTemplate;
        return $this;
    }
    /**
     * Getter for bodyTemplate
     *
     * @return string The body template of the request. Only if httpMethpd is set to POST or PUT. It can contain
     *                predefined and custom variables. Mandatory for URL callbacks. This field can be unset when
     *                updating.
     */
    public function getBodyTemplate() : ?string
    {
        return $this->bodyTemplate;
    }
    /**
     * Setter for contentType
     *
     * @param string $contentType The body media type of the request, only if httpMethpd is set to POST or PUT. This
     *                            field can be unset when updating.
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
     * @return string The body media type of the request, only if httpMethpd is set to POST or PUT. This field can be
     *                unset when updating.
     */
    public function getContentType() : ?string
    {
        return $this->contentType;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('url' => new PrimitiveSerializer('string'), 'httpMethod' => new PrimitiveSerializer('string'), 'downlinkHook' => new PrimitiveSerializer('bool'), 'headers' => new PrimitiveSerializer('array'), 'sendSni' => new PrimitiveSerializer('bool'), 'bodyTemplate' => new PrimitiveSerializer('string'), 'contentType' => new PrimitiveSerializer('string'));
        $serializers = array_merge($serializers, parent::getSerializeMetaData());
        return $serializers;
    }
}