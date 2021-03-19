<?php

namespace Arimac\Sigfox\Definition;

/**
 * information about a multiple registrations job
 */
class RegistrationJob
{
    /**
     * If the job is finished or not
     */
    protected bool $jobDone;
    /**
     * the operator's  idenfier (hexadecimal format)
     */
    protected string $operatorId;
    /**
     * the name of the registration job
     */
    protected string $name;
    /**
     * the description of the registration job
     */
    protected string $description;
    /**
     * the total number of base stations given to be created
     */
    protected int $total;
    /**
     * the informations about the base stations already treated
     */
    protected object $status;
}