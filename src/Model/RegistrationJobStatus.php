<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model\RegistrationJobStatus\Status;
use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Validator\Rules\Child;
class RegistrationJobStatus extends Model
{
    /**
     * If the job is finished or not
     *
     * @var bool
     */
    protected ?bool $jobDone = null;
    /**
     * The total number of devices given to be created
     *
     * @var int
     */
    protected ?int $total = null;
    /**
     * The information about the devices already processed
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
     * Setter for total
     *
     * @param int $total The total number of devices given to be created
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
     * @return int The total number of devices given to be created
     */
    public function getTotal() : ?int
    {
        return $this->total;
    }
    /**
     * Setter for status
     *
     * @param Status $status The information about the devices already processed
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
     * @return Status The information about the devices already processed
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
        $serializers = array('jobDone' => new PrimitiveSerializer('bool'), 'total' => new PrimitiveSerializer('int'), 'status' => new ClassSerializer(Status::class));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('status' => array(new Child()));
        return $rules;
    }
}