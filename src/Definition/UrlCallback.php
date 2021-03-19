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
}