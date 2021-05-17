<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\ActionJob\Status;
use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
class ActionJob extends Definition
{
    /**
     * If the job is finished or not
     *
     * @var bool
     */
    protected ?bool $jobDone = null;
    /**
     * the informations about the devices already treated
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
     * Setter for status
     *
     * @param Status $status the informations about the devices already treated
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
     * @return Status the informations about the devices already treated
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
        $serializers = array('jobDone' => new PrimitiveSerializer('bool'), 'status' => new ClassSerializer(Status::class));
        return $serializers;
    }
}