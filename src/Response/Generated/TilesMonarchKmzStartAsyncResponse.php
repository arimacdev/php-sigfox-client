<?php

namespace Arimac\Sigfox\Response\Generated;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class TilesMonarchKmzStartAsyncResponse extends Definition
{
    /**
     * jobId provided to the customer to request the job status and results
     *
     * @var string
     */
    protected ?string $jobId = null;
    /**
     * Setter for jobId
     *
     * @param string $jobId jobId provided to the customer to request the job status and results
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
     * @return string jobId provided to the customer to request the job status and results
     */
    public function getJobId() : ?string
    {
        return $this->jobId;
    }
    /**
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('jobId' => new PrimitiveSerializer(self::class, 'jobId', 'string'));
    }
}