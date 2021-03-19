<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\object;
class ReplaceResponse
{
    /**
     * The total number of devices to be replaced
     *
     * @var int
     */
    protected int $total;
    /**
     * The information about the devices already processed
     *
     * @var object
     */
    protected object $status;
}