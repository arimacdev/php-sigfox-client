<?php

namespace Arimac\Sigfox\Definition;

class CbStatus
{
    /**
     * http response status
     */
    protected int $status;
    /**
     * http response message
     */
    protected string $info;
    /**
     * callback definition triggered
     */
    protected string $cbDef;
    /**
     * time the callback was called (in milliseconds since the Unix Epoch)
     */
    protected int $time;
}