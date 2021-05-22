<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Retrieve a list of undelivered callback messages for a given device types. SNR will be deprecated (see
 * [Newsletter](https://backend.sigfox.com/welcome/news) for details). To monitor radio link quality, please use the
 * [Link Quality Indicator (LQI)](https://support.sigfox.com/docs/link-quality:-general-knowledge) which is more
 * relevant than SNR in Sigfox network.
 */
class DeviceTypesIdCallbacksNotDelivered extends Request
{
    /**
     * Starting timestamp (in milliseconds since Unix Epoch).
     *
     * @var int
     */
    protected ?int $since = null;
    /**
     * Ending timestamp (in milliseconds since Unix Epoch).
     *
     * @var int
     */
    protected ?int $before = null;
    /**
     * Defines the maximum number of items to return
     *
     * @var int
     */
    protected ?int $limit = null;
    /**
     * Defines the number of items to skip
     *
     * @var int
     */
    protected ?int $offset = null;
    /**
     * @internal
     */
    protected array $query = array('since', 'before', 'limit', 'offset');
    /**
     * Setter for since
     *
     * @param int $since Starting timestamp (in milliseconds since Unix Epoch).
     *
     * @return static To use in method chains
     */
    public function setSince(?int $since)
    {
        $this->since = $since;
        return $this;
    }
    /**
     * Getter for since
     *
     * @internal
     *
     * @return int Starting timestamp (in milliseconds since Unix Epoch).
     */
    public function getSince() : ?int
    {
        return $this->since;
    }
    /**
     * Setter for before
     *
     * @param int $before Ending timestamp (in milliseconds since Unix Epoch).
     *
     * @return static To use in method chains
     */
    public function setBefore(?int $before)
    {
        $this->before = $before;
        return $this;
    }
    /**
     * Getter for before
     *
     * @internal
     *
     * @return int Ending timestamp (in milliseconds since Unix Epoch).
     */
    public function getBefore() : ?int
    {
        return $this->before;
    }
    /**
     * Setter for limit
     *
     * @param int $limit Defines the maximum number of items to return
     *
     * @return static To use in method chains
     */
    public function setLimit(?int $limit)
    {
        $this->limit = $limit;
        return $this;
    }
    /**
     * Getter for limit
     *
     * @internal
     *
     * @return int Defines the maximum number of items to return
     */
    public function getLimit() : ?int
    {
        return $this->limit;
    }
    /**
     * Setter for offset
     *
     * @param int $offset Defines the number of items to skip
     *
     * @return static To use in method chains
     */
    public function setOffset(?int $offset)
    {
        $this->offset = $offset;
        return $this;
    }
    /**
     * Getter for offset
     *
     * @internal
     *
     * @return int Defines the number of items to skip
     */
    public function getOffset() : ?int
    {
        return $this->offset;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('since' => new PrimitiveSerializer('int'), 'before' => new PrimitiveSerializer('int'), 'limit' => new PrimitiveSerializer('int'), 'offset' => new PrimitiveSerializer('int'));
        return $serializers;
    }
}