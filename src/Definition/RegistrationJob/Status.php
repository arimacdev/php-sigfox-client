<?php

namespace Arimac\Sigfox\Definition\RegistrationJob;

use Arimac\Sigfox\Definition\JobError;
use Arimac\Sigfox\Definition;
/**
 * the informations about the base stations already treated
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
     * the number of base stations successfully created or transferred
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
     * @param int $success the number of base stations successfully created or transferred
     */
    function setSuccess(?int $success)
    {
        $this->success = $success;
    }
    /**
     * @return int the number of base stations successfully created or transferred
     */
    function getSuccess() : ?int
    {
        return $this->success;
    }
}