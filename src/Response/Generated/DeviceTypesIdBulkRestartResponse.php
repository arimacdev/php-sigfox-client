<?php

namespace Arimac\Sigfox\Response\Generated;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class DeviceTypesIdBulkRestartResponse extends Model
{
    /**
     * jobId so that the customer is able to request job status
     *
     * @var string
     */
    protected ?string $jobId = null;
    /**
     * Setter for jobId
     *
     * @internal
     *
     * @param string $jobId jobId so that the customer is able to request job status
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
     * @return string jobId so that the customer is able to request job status
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