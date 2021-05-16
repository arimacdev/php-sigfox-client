<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Defines the properties needed to create a url callback
 */
class UpdateUrlCallback extends UpdateCallback
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
     * The body template of the request. Only if httpMethpd is set to POST or PUT. It can contain predefined and
     * custom variables. Mandatory for URL callbacks. This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $bodyTemplate = null;
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
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('url' => new PrimitiveSerializer(self::class, 'url', 'string'), 'httpMethod' => new PrimitiveSerializer(self::class, 'httpMethod', 'string'), 'headers' => new PrimitiveSerializer(self::class, 'headers', 'array'), 'sendSni' => new PrimitiveSerializer(self::class, 'sendSni', 'bool'), 'bodyTemplate' => new PrimitiveSerializer(self::class, 'bodyTemplate', 'string'));
    }
}