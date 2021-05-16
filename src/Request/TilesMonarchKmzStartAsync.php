<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Definition\KmzCreatePublicRequest;
use Arimac\Sigfox\Serializer\ClassSerializer;
/**
 * Starting the computation of Sigfox Monarch coverage view for a specific coverage mode. A new computation starts if
 * no other computation, run in the last 24 hours, is available. Otherwise, the existing jobId is returned.
 */
class TilesMonarchKmzStartAsync extends Request
{
    /**
     * The computation will be performed with the specified coverage mode
     *
     * @var KmzCreatePublicRequest
     */
    protected ?KmzCreatePublicRequest $request = null;
    protected array $body = array('request');
    protected array $validations = array('request' => array('required'));
    /**
     * Setter for request
     *
     * @param KmzCreatePublicRequest $request The computation will be performed with the specified coverage mode
     *
     * @return self To use in method chains
     */
    public function setRequest(?KmzCreatePublicRequest $request) : self
    {
        $this->request = $request;
        return $this;
    }
    /**
     * Getter for request
     *
     * @return KmzCreatePublicRequest The computation will be performed with the specified coverage mode
     */
    public function getRequest() : ?KmzCreatePublicRequest
    {
        return $this->request;
    }
    /**
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('request' => new ClassSerializer(self::class, 'request', KmzCreatePublicRequest::class));
    }
}