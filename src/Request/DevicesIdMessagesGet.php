<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class DevicesIdMessagesGet extends Definition
{
    /**
     * Defines the other available fields to be returned in the response.
     *
     * @var string
     */
    protected ?string $fields = null;
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
    protected $query = array('fields', 'since', 'before', 'limit', 'offset');
    /**
     * @param string $fields Defines the other available fields to be returned in the response.
     */
    function setFields(?string $fields)
    {
        $this->fields = $fields;
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