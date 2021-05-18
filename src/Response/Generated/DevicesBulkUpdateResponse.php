<?php

namespace Arimac\Sigfox\Response\Generated;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class DevicesBulkUpdateResponse extends Model
{
    /**
     * Number of devices to edit
     *
     * @var int
     */
    protected ?int $total = null;
    /**
     * jobId (to use in job status request)
     *
     * @var string
     */
    protected ?string $jobId = null;
    /**
     * Setter for total
     *
     * @internal
     *
     * @param int $total Number of devices to edit
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
     * @return int Number of devices to edit
     */
    public function getTotal() : ?int
    {
        return $this->total;
    }
    /**
     * Setter for jobId
     *
     * @internal
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
        $serializers = array('total' => new PrimitiveSerializer('int'), 'jobId' => new PrimitiveSerializer('string'));
        return $serializers;
    }
}