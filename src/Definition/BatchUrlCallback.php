<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\Callback;
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
     * @param string $linePattern The line pattern representing a message.
     */
    function setLinePattern(?string $linePattern)
    {
        $this->linePattern = $linePattern;
    }
    /**
     * @return string The line pattern representing a message.
     */
    function getLinePattern() : ?string
    {
        return $this->linePattern;
    }
}