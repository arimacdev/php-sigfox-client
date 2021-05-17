<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\RegistrationJob\Status;
use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
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
     * @var Status
     */
    protected ?Status $status = null;
    /**
     * Setter for jobDone
     *
     * @param bool $jobDone If the job is finished or not
     *
     * @return self To use in method chains
     */
    public function setJobDone(?bool $jobDone) : self
    {
        $this->jobDone = $jobDone;
        return $this;
    }
    /**
     * Getter for jobDone
     *
     * @return bool If the job is finished or not
     */
    public function getJobDone() : ?bool
    {
        return $this->jobDone;
    }
    /**
     * Setter for operatorId
     *
     * @param string $operatorId the operator's  idenfier (hexadecimal format)
     *
     * @return self To use in method chains
     */
    public function setOperatorId(?string $operatorId) : self
    {
        $this->operatorId = $operatorId;
        return $this;
    }
    /**
     * Getter for operatorId
     *
     * @return string the operator's  idenfier (hexadecimal format)
     */
    public function getOperatorId() : ?string
    {
        return $this->operatorId;
    }
    /**
     * Setter for name
     *
     * @param string $name the name of the registration job
     *
     * @return self To use in method chains
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Getter for name
     *
     * @return string the name of the registration job
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Setter for description
     *
     * @param string $description the description of the registration job
     *
     * @return self To use in method chains
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Getter for description
     *
     * @return string the description of the registration job
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Setter for total
     *
     * @param int $total the total number of base stations given to be created
     *
     * @return self To use in method chains
     */
    public function setTotal(?int $total) : self
    {
        $this->total = $total;
        return $this;
    }
    /**
     * Getter for total
     *
     * @return int the total number of base stations given to be created
     */
    public function getTotal() : ?int
    {
        return $this->total;
    }
    /**
     * Setter for status
     *
     * @param Status $status the informations about the base stations already treated
     *
     * @return self To use in method chains
     */
    public function setStatus(?Status $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Getter for status
     *
     * @return Status the informations about the base stations already treated
     */
    public function getStatus() : ?Status
    {
        return $this->status;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('jobDone' => new PrimitiveSerializer('bool'), 'operatorId' => new PrimitiveSerializer('string'), 'name' => new PrimitiveSerializer('string'), 'description' => new PrimitiveSerializer('string'), 'total' => new PrimitiveSerializer('int'), 'status' => new ClassSerializer(Status::class));
        return $serializers;
    }
}