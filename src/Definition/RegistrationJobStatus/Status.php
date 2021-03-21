<?php

namespace Arimac\Sigfox\Definition\RegistrationJobStatus;

use Arimac\Sigfox\Definition\JobError;
use Arimac\Sigfox\Definition;
/**
 * The information about the devices already processed
 */
class Status extends Definition
{
    /**
     * Detailed information about each error
     *
     * @var JobError[]
     */
    protected ?array $errors = null;
    /**
     * The number of devices successfully created, edited or transferred
     *
     * @var int
     */
    protected ?int $success = null;
    /**
     * @param JobError[] $errors Detailed information about each error
     */
    function setErrors(?array $errors)
    {
        $this->errors = $errors;
    }
    /**
     * @return JobError[] Detailed information about each error
     */
    function getErrors() : ?array
    {
        return $this->errors;
    }
    /**
     * @param int $success The number of devices successfully created, edited or transferred
     */
    function setSuccess(?int $success)
    {
        $this->success = $success;
    }
    /**
     * @return int The number of devices successfully created, edited or transferred
     */
    function getSuccess() : ?int
    {
        return $this->success;
    }
}