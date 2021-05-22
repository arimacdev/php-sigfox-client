<?php

namespace Arimac\Sigfox\Response\Generated;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class DevicesBulkCreateResponse extends Model
{
    /**
     * Number of device to create
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
     * @param int $total Number of device to create
     *
     * @return static To use in method chains
     */
    public function setTotal(?int $total)
    {
        $this->total = $total;
        return $this;
    }
    /**
     * Getter for total
     *
     * @return int Number of device to create
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
        $serializers = array('total' => new PrimitiveSerializer('int'), 'jobId' => new PrimitiveSerializer('string'));
        return $serializers;
    }
}