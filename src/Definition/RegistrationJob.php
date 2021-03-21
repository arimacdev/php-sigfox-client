<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\RegistrationJob\Status;
use Arimac\Sigfox\Definition;
/**
 * information about a multiple registrations job
 */
class RegistrationJob extends Definition
{
    /**
     * If the job is finished or not
     *
     * @var bool
     */
    protected ?bool $jobDone = null;
    /**
     * the operator's  idenfier (hexadecimal format)
     *
     * @var string
     */
    protected ?string $operatorId = null;
    /**
     * the name of the registration job
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * the description of the registration job
     *
     * @var string
     */
    protected ?string $description = null;
    /**
     * the total number of base stations given to be created
     *
     * @var int
     */
    protected ?int $total = null;
    /**
     * the informations about the base stations already treated
     *
     * @var RegistrationJob\Status
     */
    protected ?RegistrationJob\Status $status = null;
    /**
     * @param bool $jobDone If the job is finished or not
     */
    function setJobDone(?bool $jobDone)
    {
        $this->jobDone = $jobDone;
    }
    /**
     * @return bool If the job is finished or not
     */
    function getJobDone() : ?bool
    {
        return $this->jobDone;
    }
    /**
     * @param string $operatorId the operator's  idenfier (hexadecimal format)
     */
    function setOperatorId(?string $operatorId)
    {
        $this->operatorId = $operatorId;
    }
    /**
     * @return string the operator's  idenfier (hexadecimal format)
     */
    function getOperatorId() : ?string
    {
        return $this->operatorId;
    }
    /**
     * @param string $name the name of the registration job
     */
    function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string the name of the registration job
     */
    function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @param string $description the description of the registration job
     */
    function setDescription(?string $description)
    {
        $this->description = $description;
    }
    /**
     * @return string the description of the registration job
     */
    function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * @param int $total the total number of base stations given to be created
     */
    function setTotal(?int $total)
    {
        $this->total = $total;
    }
    /**
     * @return int the total number of base stations given to be created
     */
    function getTotal() : ?int
    {
        return $this->total;
    }
    /**
     * @param RegistrationJob\Status $status the informations about the base stations already treated
     */
    function setStatus(?RegistrationJob\Status $status)
    {
        $this->status = $status;
    }
    /**
     * @return RegistrationJob\Status the informations about the base stations already treated
     */
    function getStatus() : ?RegistrationJob\Status
    {
        return $this->status;
    }
}