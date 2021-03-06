<?php

namespace Arimac\Sigfox\Response\Generated;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class TilesMonarchKmzStartResponse extends Model
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
     * @internal
     *
     * @param string $jobId jobId provided to the customer to request the job status and results
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
     * @return string jobId provided to the customer to request the job status and results
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