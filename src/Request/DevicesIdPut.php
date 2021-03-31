<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class DevicesIdPut extends Definition
{
    protected $required = array('unsubscriptionTime');
    /**
     * the unsubscription time (in milliseconds since the Unix Epoch)
     *
     * @var array
     */
    protected array $unsubscriptionTime;
    protected $body = array('unsubscriptionTime');
    /**
     * @param array $unsubscriptionTime the unsubscription time (in milliseconds since the Unix Epoch)
     */
    function setUnsubscriptionTime(array $unsubscriptionTime)
    {
        $this->unsubscriptionTime = $unsubscriptionTime;
    }
}