<?php

namespace Arimac\Sigfox\Response\Generated;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class DevicesBulkSuspendResponse extends Definition
{
    /**
     * jobId (to use in job status request)
     *
     * @var string
     */
    protected ?string $jobId = null;
    protected $serialize = array(new PrimitiveSerializer(self::class, 'jobId', 'string'));
    /**
     * Setter for jobId
     *
     * @param string $jobId jobId (to use in job status request)
     *
     * @return self To use in method chains
     */
    public function setJobId(?string $jobId) : self
    {
        $this->jobId = $jobId;
        return $this;
    }
    /**
     * Getter for jobId
     *
     * @return string jobId (to use in job status request)
     */
    public function getJobId() : string
    {
        return $this->jobId;
    }
}