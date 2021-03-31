<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class TilesMonarchKmzPost extends Definition
{
    protected $required = array('request');
    /**
     * The computation will be performed with the specified coverage mode
     *
     * @var array
     */
    protected array $request;
    protected $body = array('request');
    /**
     * @param array $request The computation will be performed with the specified coverage mode
     */
    function setRequest(array $request)
    {
        $this->request = $request;
    }
}