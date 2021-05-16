<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\GlobalCoverageBulkResponse\ResultsItem;
use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
/**
 * Returned data for Bulk Global Coverage API
 */
class GlobalCoverageBulkResponse extends Definition
{
    /**
     * If the job is completed or not
     *
     * @var bool
     */
    protected ?bool $jobDone = null;
    /**
     * the statistics creation time (in milliseconds since the Unix Epoch)
     *
     * @var int
     */
    protected ?int $time = null;
    /**
     * An array containing the response for each point.
     *
     * @var ResultsItem[]
     */
    protected ?array $results = null;
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
     * @param int $time the statistics creation time (in milliseconds since the Unix Epoch)
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
     * @return int the statistics creation time (in milliseconds since the Unix Epoch)
     */
    public function getTime() : ?int
    {
        return $this->time;
    }
    /**
     * Setter for results
     *
     * @param ResultsItem[] $results An array containing the response for each point.
     *
     * @return self To use in method chains
     */
    public function setResults(?array $results) : self
    {
        $this->results = $results;
        return $this;
    }
    /**
     * Getter for results
     *
     * @return ResultsItem[] An array containing the response for each point.
     */
    public function getResults() : ?array
    {
        return $this->results;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        return array('jobDone' => new PrimitiveSerializer('bool'), 'time' => new PrimitiveSerializer('int'), 'results' => new ArraySerializer(new ClassSerializer(ResultsItem::class)));
    }
}