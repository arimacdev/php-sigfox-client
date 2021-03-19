<?php

namespace Arimac\Sigfox\Definition;

class CbStatus
{
    /**
     * http response status
     *
     * @var int
     */
    protected int $status;
    /**
     * http response message
     *
     * @var string
     */
    protected string $info;
    /**
     * callback definition triggered
     *
     * @var string
     */
    protected string $cbDef;
    /**
     * time the callback was called (in milliseconds since the Unix Epoch)
     *
     * @var int
     */
    protected int $time;
}