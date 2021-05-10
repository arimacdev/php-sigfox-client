<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\GlobalCoverageRequest;
/**
 * Starting the computation of the coverage margins for multiple points, for each redundancy level.
 * For more information please refer to the [Global Coverage API
 * article](https://support.sigfox.com/docs/global-coverage-api).
 * 
 */
class CoveragesGlobalPredictionsBulk extends Definition
{
    /**
     * @var GlobalCoverageRequest
     */
    protected ?GlobalCoverageRequest $payload = null;
    protected $serialize = array('payload' => GlobalCoverageRequest::class);
    protected $body = array('payload');
    /**
     * Setter for payload
     *
     * @param GlobalCoverageRequest $payload
     *
     * @return self To use in method chains
     */
    public function setPayload(?GlobalCoverageRequest $payload) : self
    {
        $this->payload = $payload;
        return $this;
    }
}