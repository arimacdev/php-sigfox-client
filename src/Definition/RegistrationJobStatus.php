<?php

namespace Arimac\Sigfox\Definition;

class RegistrationJobStatus
{
    /**
     * If the job is finished or not
     */
    protected bool $jobDone;
    /**
     * The total number of devices given to be created
     */
    protected int $total;
    /**
     * The information about the devices already processed
     */
    protected object $status;
}