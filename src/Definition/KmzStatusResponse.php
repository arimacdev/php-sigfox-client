<?php

namespace Arimac\Sigfox\Definition;

class KmzStatusResponse
{
    /**
     * If the job is completed or not
     *
     * @var bool
     */
    protected bool $jobDone;
    /**
     * the kmz layer creation time (in milliseconds since the Unix Epoch)
     *
     * @var int
     */
    protected int $time;
}