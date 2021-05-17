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
    /**
     * @internal
     */
    protected array $body = array('payload');
    /**
     * @internal
     */
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
     * @internal
     *
     * @return GlobalCoverageRequest
     */
    public function getPayload() : ?GlobalCoverageRequest
    {
        return $this->payload;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('payload' => new ClassSerializer(GlobalCoverageRequest::class));
        return $serializers;
    }
}