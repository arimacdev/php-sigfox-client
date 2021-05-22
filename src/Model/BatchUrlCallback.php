<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\OneOf;
/**
 * Defines the properties needed to create a batch url callback
 */
class BatchUrlCallback extends Callback
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
    /**
     * Setter for url
     *
     * @param string $url The callback's url
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
     * @return static To use in method chains
     */
    public function setHttpMethod(?string $httpMethod)
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
     * Setter for linePattern
     *
     * @param string $linePattern The line pattern representing a message.
     *
     * @return static To use in method chains
     */
    public function setLinePattern(?string $linePattern)
    {
        $this->linePattern = $linePattern;
        return $this;
    }
    /**
     * Getter for linePattern
     *
     * @return string The line pattern representing a message.
     */
    public function getLinePattern() : ?string
    {
        return $this->linePattern;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('url' => new PrimitiveSerializer('string'), 'httpMethod' => new PrimitiveSerializer('string'), 'linePattern' => new PrimitiveSerializer('string'));
        $serializers = array_merge($serializers, parent::getSerializeMetaData());
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('httpMethod' => array(new OneOf(array('GET', 'PUT', 'POST'))));
        $rules = array_merge($rules, parent::getValidationMetaData());
        return $rules;
    }
}