<?php

namespace Arimac\Sigfox\Response\Generated;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class DevicesBulkCreateResponse extends Definition
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
    protected $serialize = array(new PrimitiveSerializer(self::class, 'total', 'int'), new PrimitiveSerializer(self::class, 'jobId', 'string'));
    /**
     * Setter for total
     *
     * @param int $total Number of device to create
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
     * @return int Number of device to create
     */
    public function getTotal() : int
    {
        return $this->total;
    }
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