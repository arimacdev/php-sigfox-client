<?php

namespace Arimac\Sigfox\Definition;

class ReplaceResponse
{
    /**
     * The total number of devices to be replaced
     */
    protected int $total;
    /**
     * The information about the devices already processed
     */
    protected object $status;
}