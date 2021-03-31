<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class CoveragesGlobalPredictionsPost extends Definition
{
    protected $required = array('payload');
    /** @var array */
    protected array $payload;
    protected $body = array('payload');
    /**
     * @param array payload
     */
    function setPayload(array $payload)
    {
        $this->payload = $payload;
    }
}