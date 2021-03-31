<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class DeviceTypesIdCallbacksCallbackIdGet extends Definition
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
    protected $query = array('since', 'before', 'limit', 'offset');
    /**
     * @param int $since Starting timestamp (in milliseconds since Unix Epoch).
     */
    function setSince(?int $since)
    {
        $this->since = $since;
    }
    /**
     * @param int $before Ending timestamp (in milliseconds since Unix Epoch).
     */
    function setBefore(?int $before)
    {
        $this->before = $before;
    }
    /**
     * @param int $limit Defines the maximum number of items to return
     */
    function setLimit(?int $limit)
    {
        $this->limit = $limit;
    }
    /**
     * @param int $offset Defines the number of items to skip
     */
    function setOffset(?int $offset)
    {
        $this->offset = $offset;
    }
}