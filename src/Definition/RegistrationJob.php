<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\object;
/**
 * information about a multiple registrations job
 */
class RegistrationJob
{
    /**
     * If the job is finished or not
     *
     * @var bool
     */
    protected bool $jobDone;
    /**
     * the operator's  idenfier (hexadecimal format)
     *
     * @var string
     */
    protected string $operatorId;
    /**
     * the name of the registration job
     *
     * @var string
     */
    protected string $name;
    /**
     * the description of the registration job
     *
     * @var string
     */
    protected string $description;
    /**
     * the total number of base stations given to be created
     *
     * @var int
     */
    protected int $total;
    /**
     * the informations about the base stations already treated
     *
     * @var object
     */
    protected object $status;
}