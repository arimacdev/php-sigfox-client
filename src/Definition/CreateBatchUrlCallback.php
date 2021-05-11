<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Defines the properties needed to create a batch url callback
 */
class CreateBatchUrlCallback extends CreateCallback
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
     * The line pattern representing a message.
     *
     * @var string
     */
    protected ?string $linePattern = null;
    protected $serialize = array(new PrimitiveSerializer(self::class, 'url', 'string'), new PrimitiveSerializer(self::class, 'httpMethod', 'string'), new PrimitiveSerializer(self::class, 'linePattern', 'string'));
    protected $validations = array('url' => array('required'), 'httpMethod' => array('required', 'in:GET,PUT,POST'));
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
    public function getUrl() : string
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
    public function getHttpMethod() : string
    {
        return $this->httpMethod;
    }
    /**
     * Setter for linePattern
     *
     * @param string $linePattern The line pattern representing a message.
     *
     * @return self To use in method chains
     */
    public function setLinePattern(?string $linePattern) : self
    {
        $this->linePattern = $linePattern;
        return $this;
    }
    /**
     * Getter for linePattern
     *
     * @return string The line pattern representing a message.
     */
    public function getLinePattern() : string
    {
        return $this->linePattern;
    }
}