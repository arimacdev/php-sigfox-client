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
    /**
     * @param bool jobDone If the job is finished or not
     */
    function setJobDone(bool $jobDone)
    {
        $this->jobDone = $jobDone;
    }
    /**
     * @return bool If the job is finished or not
     */
    function getJobDone() : bool
    {
        return $this->jobDone;
    }
    /**
     * @param string operatorId the operator's  idenfier (hexadecimal format)
     */
    function setOperatorId(string $operatorId)
    {
        $this->operatorId = $operatorId;
    }
    /**
     * @return string the operator's  idenfier (hexadecimal format)
     */
    function getOperatorId() : string
    {
        return $this->operatorId;
    }
    /**
     * @param string name the name of the registration job
     */
    function setName(string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string the name of the registration job
     */
    function getName() : string
    {
        return $this->name;
    }
    /**
     * @param string description the description of the registration job
     */
    function setDescription(string $description)
    {
        $this->description = $description;
    }
    /**
     * @return string the description of the registration job
     */
    function getDescription() : string
    {
        return $this->description;
    }
    /**
     * @param int total the total number of base stations given to be created
     */
    function setTotal(int $total)
    {
        $this->total = $total;
    }
    /**
     * @return int the total number of base stations given to be created
     */
    function getTotal() : int
    {
        return $this->total;
    }
    /**
     * @param object status the informations about the base stations already treated
     */
    function setStatus(object $status)
    {
        $this->status = $status;
    }
    /**
     * @return object the informations about the base stations already treated
     */
    function getStatus() : object
    {
        return $this->status;
    }
}