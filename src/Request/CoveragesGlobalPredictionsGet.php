<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\GlobalCoverageRequest;
use Arimac\Sigfox\Serializer\ClassSerializer;
/**
 * Get the coverage margins for multiple points, for each redundancy level.
 * Sigfox recommends to:
 * -use the bulk endpoint instead when requesting a large number of locations
 * -not request more than 200 locations at a time
 * -wait for the result to be returned before requesting again (avoid multithreading)
 * For more information please refer to the [Global Coverage API
 * article](https://support.sigfox.com/docs/global-coverage-api).
 */
class CoveragesGlobalPredictionsGet extends Definition
{
    /**
     * @var GlobalCoverageRequest
     */
    protected ?GlobalCoverageRequest $payload = null;
    protected $serialize = array(new ClassSerializer(self::class, 'payload', GlobalCoverageRequest::class));
    protected $body = array('payload');
    protected $validations = array('payload' => array('required'));
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