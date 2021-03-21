<?php

namespace Arimac\Sigfox\Definition\ActionJob;

use Arimac\Sigfox\Definition\JobError;
use Arimac\Sigfox\Definition;
/**
 * the informations about the devices already treated
 */
class Status extends Definition
{
    /**
     * the total number of devices given
     *
     * @var int
     */
    protected ?int $total = null;
    /**
     * the number of devices successfully changed
     *
     * @var int
     */
    protected ?int $nbSuccess = null;
    /**
     * the number of devices unsuccessfully changed
     *
     * @var int
     */
    protected ?int $nbErrors = null;
    /**
     * reasons of each errors
     *
     * @var JobError[]
     */
    protected ?array $errors = null;
    /**
     * @param int $total the total number of devices given
     */
    function setTotal(?int $total)
    {
        $this->total = $total;
    }
    /**
     * @return int the total number of devices given
     */
    function getTotal() : ?int
    {
        return $this->total;
    }
    /**
     * @param int $nbSuccess the number of devices successfully changed
     */
    function setNbSuccess(?int $nbSuccess)
    {
        $this->nbSuccess = $nbSuccess;
    }
    /**
     * @return int the number of devices successfully changed
     */
    function getNbSuccess() : ?int
    {
        return $this->nbSuccess;
    }
    /**
     * @param int $nbErrors the number of devices unsuccessfully changed
     */
    function setNbErrors(?int $nbErrors)
    {
        $this->nbErrors = $nbErrors;
    }
    /**
     * @return int the number of devices unsuccessfully changed
     */
    function getNbErrors() : ?int
    {
        return $this->nbErrors;
    }
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
}