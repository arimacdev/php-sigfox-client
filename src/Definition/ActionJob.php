<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\object;
class ActionJob
{
    /**
     * If the job is finished or not
     *
     * @var bool
     */
    protected bool $jobDone;
    /**
     * the informations about the devices already treated
     *
     * @var object
     */
    protected object $status;
}