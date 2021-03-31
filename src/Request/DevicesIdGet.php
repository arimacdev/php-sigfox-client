<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class DevicesIdGet extends Definition
{
    /**
     * if true, the method return also the location from out of band Messages
     *
     * @var bool
     */
    protected ?bool $oob = null;
    /**
     * Starting timestamp (in milliseconds since the Unix Epoch)
     *
     * @var int
     */
    protected ?int $since = null;
    /**
     * Ending timestamp (in milliseconds since the Unix Epoch)
     *
     * @var int
     */
    protected ?int $before = null;
    /**
     * The maximum number of items to return
     *
     * @var int
     */
    protected ?int $limit = null;
    /**
     * The number of items to skip
     *
     * @var int
     */
    protected ?int $offset = null;
    protected $query = array('oob', 'since', 'before', 'limit', 'offset');
    /**
     * @param bool $oob if true, the method return also the location from out of band Messages
     */
    function setOob(?bool $oob)
    {
        $this->oob = $oob;
    }
    /**
     * @param int $since Starting timestamp (in milliseconds since the Unix Epoch)
     */
    function setSince(?int $since)
    {
        $this->since = $since;
    }
    /**
     * @param int $before Ending timestamp (in milliseconds since the Unix Epoch)
     */
    function setBefore(?int $before)
    {
        $this->before = $before;
    }
    /**
     * @param int $limit The maximum number of items to return
     */
    function setLimit(?int $limit)
    {
        $this->limit = $limit;
    }
    /**
     * @param int $offset The number of items to skip
     */
    function setOffset(?int $offset)
    {
        $this->offset = $offset;
    }
}