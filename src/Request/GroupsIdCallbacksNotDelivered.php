<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Retrieve a list of undelivered callbacks and errors for a given group, in reverse chronological order (most recent
 * message first).
 * 
 */
class GroupsIdCallbacksNotDelivered extends Definition
{
    /**
     * Starting timestamp (in milliseconds since Unix Epoch)
     *
     * @var int
     */
    protected ?int $since = null;
    /**
     * Ending timestamp (in milliseconds since Unix Epoch)
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
    protected $serialize = array(new PrimitiveSerializer(self::class, 'since', 'int'), new PrimitiveSerializer(self::class, 'before', 'int'), new PrimitiveSerializer(self::class, 'limit', 'int'), new PrimitiveSerializer(self::class, 'offset', 'int'));
    protected $query = array('since', 'before', 'limit', 'offset');
    protected $validations = array('since' => array('required'), 'before' => array('required'), 'limit' => array('required'), 'offset' => array('required'));
    /**
     * Setter for since
     *
     * @param int $since Starting timestamp (in milliseconds since Unix Epoch)
     *
     * @return self To use in method chains
     */
    public function setSince(?int $since) : self
    {
        $this->since = $since;
        return $this;
    }
    /**
     * Setter for before
     *
     * @param int $before Ending timestamp (in milliseconds since Unix Epoch)
     *
     * @return self To use in method chains
     */
    public function setBefore(?int $before) : self
    {
        $this->before = $before;
        return $this;
    }
    /**
     * Setter for limit
     *
     * @param int $limit The maximum number of items to return
     *
     * @return self To use in method chains
     */
    public function setLimit(?int $limit) : self
    {
        $this->limit = $limit;
        return $this;
    }
    /**
     * Setter for offset
     *
     * @param int $offset The number of items to skip
     *
     * @return self To use in method chains
     */
    public function setOffset(?int $offset) : self
    {
        $this->offset = $offset;
        return $this;
    }
}