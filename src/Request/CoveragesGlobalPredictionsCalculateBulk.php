<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Definition\GlobalCoverageRequest;
use Arimac\Sigfox\Serializer\ClassSerializer;
/**
 * Starting the computation of the coverage margins for multiple points, for each redundancy level.
 * For more information please refer to the [Global Coverage API
 * article](https://support.sigfox.com/docs/global-coverage-api).
 */
class CoveragesGlobalPredictionsCalculateBulk extends Request
{
    /**
     * @var GlobalCoverageRequest
     */
    protected ?GlobalCoverageRequest $payload = null;
    protected array $body = array('payload');
    protected array $validations = array('payload' => array('required'));
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
    /**
     * Getter for payload
     *
     * @return GlobalCoverageRequest
     */
    public function getPayload() : ?GlobalCoverageRequest
    {
        return $this->payload;
    }
    /**
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('payload' => new ClassSerializer(self::class, 'payload', GlobalCoverageRequest::class));
    }
}