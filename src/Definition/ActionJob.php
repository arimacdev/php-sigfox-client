<?php

namespace Arimac\Sigfox\Definition;

class ActionJob
{
    /**
     * If the job is finished or not
     */
    protected bool $jobDone;
    /**
     * the informations about the devices already treated
     */
    protected object $status;
}