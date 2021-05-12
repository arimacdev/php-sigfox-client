<?php

namespace Arimac\Sigfox\Response\Generated;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class ContractInfosIdBulkRestartResponse extends Definition
{
    /**
     * jobId so that the customer is able to request job status
     *
     * @var string
     */
    protected ?string $jobId = null;
    protected $serialize = array(new PrimitiveSerializer(self::class, 'jobId', 'string'));
    /**
     * Setter for jobId
     *
     * @param string $jobId jobId so that the customer is able to request job status
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
     * @return string jobId so that the customer is able to request job status
     */
    public function getJobId() : string
    {
        return $this->jobId;
    }
}