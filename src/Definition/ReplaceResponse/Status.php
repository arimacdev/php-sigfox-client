<?php

namespace Arimac\Sigfox\Definition\ReplaceResponse;

use Arimac\Sigfox\Definition\JobError;
use Arimac\Sigfox\Definition;
/**
 * The information about the devices already processed
 */
class Status extends Definition
{
    /**
     * reasons of each errors
     *
     * @var JobError[]
     */
    protected ?array $errors = null;
    /**
     * The number of devices successfully replaced
     *
     * @var int
     */
    protected ?int $success = null;
    /**
     * @param JobError[] $errors reasons of each errors
     */
    function setErrors(?array $errors)
    {
        $this->errors = $errors;
    }
    /**
     * @return JobError[] reasons of each errors
     */
    function getErrors() : ?array
    {
        return $this->errors;
    }
    /**
     * @param int $success The number of devices successfully replaced
     */
    function setSuccess(?int $success)
    {
        $this->success = $success;
    }
    /**
     * @return int The number of devices successfully replaced
     */
    function getSuccess() : ?int
    {
        return $this->success;
    }
}