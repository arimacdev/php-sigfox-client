<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\object;
class RegistrationJobStatus
{
    /**
     * If the job is finished or not
     *
     * @var bool
     */
    protected bool $jobDone;
    /**
     * The total number of devices given to be created
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