<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Retrieve a list of location data of a device according to request filters.
 */
class DevicesIdLocations extends Request
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
    /**
     * @internal
     */
    protected array $query = array('oob', 'since', 'before', 'limit', 'offset');
    /**
     * Setter for oob
     *
     * @param bool $oob if true, the method return also the location from out of band Messages
     *
     * @return self To use in method chains
     */
    public function setOob(?bool $oob) : self
    {
        $this->oob = $oob;
        return $this;
    }
    /**
     * Getter for oob
     *
     * @internal
     *
     * @return bool if true, the method return also the location from out of band Messages
     */
    public function getOob() : ?bool
    {
        return $this->oob;
    }
    /**
     * Setter for since
     *
     * @param int $since Starting timestamp (in milliseconds since the Unix Epoch)
     *
     * @return self To use in method chains
     */
    public function setSince(?int $since) : self
    {
        $this->since = $since;
        return $this;
    }
    /**
     * Getter for since
     *
     * @internal
     *
     * @return int Starting timestamp (in milliseconds since the Unix Epoch)
     */
    public function getSince() : ?int
    {
        return $this->since;
    }
    /**
     * Setter for before
     *
     * @param int $before Ending timestamp (in milliseconds since the Unix Epoch)
     *
     * @return self To use in method chains
     */
    public function setBefore(?int $before) : self
    {
        $this->before = $before;
        return $this;
    }
    /**
     * Getter for before
     *
     * @internal
     *
     * @return int Ending timestamp (in milliseconds since the Unix Epoch)
     */
    public function getBefore() : ?int
    {
        return $this->before;
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
     * Getter for limit
     *
     * @internal
     *
     * @return int The maximum number of items to return
     */
    public function getLimit() : ?int
    {
        return $this->limit;
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
    /**
     * Getter for offset
     *
     * @internal
     *
     * @return int The number of items to skip
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
        return array('oob' => new PrimitiveSerializer('bool'), 'since' => new PrimitiveSerializer('int'), 'before' => new PrimitiveSerializer('int'), 'limit' => new PrimitiveSerializer('int'), 'offset' => new PrimitiveSerializer('int'));
    }
}