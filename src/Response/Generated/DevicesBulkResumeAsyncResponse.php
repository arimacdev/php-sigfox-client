<?php

namespace Arimac\Sigfox\Response\Generated;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class DevicesBulkResumeAsyncResponse extends Model
{
    /**
     * jobId (to use in job status request)
     *
     * @var string
     */
    protected ?string $jobId = null;
    /**
     * Setter for jobId
     *
     * @internal
     *
     * @param string $jobId jobId (to use in job status request)
     *
     * @return static To use in method chains
     */
    public function setJobId(?string $jobId)
    {
        $this->jobId = $jobId;
        return $this;
    }
    /**
     * Getter for jobId
     *
     * @return string jobId (to use in job status request)
     */
    public function getJobId() : ?string
    {
        return $this->jobId;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('jobId' => new PrimitiveSerializer('string'));
        return $serializers;
    }
}