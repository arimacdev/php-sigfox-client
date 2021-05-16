<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class KmzStatusResponse extends Definition
{
    /**
     * If the job is completed or not
     *
     * @var bool
     */
    protected ?bool $jobDone = null;
    /**
     * the kmz layer creation time (in milliseconds since the Unix Epoch)
     *
     * @var int
     */
    protected ?int $time = null;
    /**
     * Setter for jobDone
     *
     * @param bool $jobDone If the job is completed or not
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
     * @return bool If the job is completed or not
     */
    public function getJobDone() : ?bool
    {
        return $this->jobDone;
    }
    /**
     * Setter for time
     *
     * @param int $time the kmz layer creation time (in milliseconds since the Unix Epoch)
     *
     * @return self To use in method chains
     */
    public function setTime(?int $time) : self
    {
        $this->time = $time;
        return $this;
    }
    /**
     * Getter for time
     *
     * @return int the kmz layer creation time (in milliseconds since the Unix Epoch)
     */
    public function getTime() : ?int
    {
        return $this->time;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        return array('jobDone' => new PrimitiveSerializer(self::class, 'jobDone', 'bool'), 'time' => new PrimitiveSerializer(self::class, 'time', 'int'));
    }
}