<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Retrieve a list of geolocation payload according to request filters.
 */
class GroupsIdGeolocationPayloads extends Request
{
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
     * Token representing the page to retrieve
     *
     * @var string
     */
    protected ?string $pageId = null;
    /**
     * @internal
     */
    protected array $query = array('limit', 'offset', 'pageId');
    /**
     * Setter for limit
     *
     * @param int $limit The maximum number of items to return
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
     * @return int The number of items to skip
     */
    public function getOffset() : ?int
    {
        return $this->offset;
    }
    /**
     * Setter for pageId
     *
     * @param string $pageId Token representing the page to retrieve
     *
     * @return static To use in method chains
     */
    public function setPageId(?string $pageId)
    {
        $this->pageId = $pageId;
        return $this;
    }
    /**
     * Getter for pageId
     *
     * @internal
     *
     * @return string Token representing the page to retrieve
     */
    public function getPageId() : ?string
    {
        return $this->pageId;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('limit' => new PrimitiveSerializer('int'), 'offset' => new PrimitiveSerializer('int'), 'pageId' => new PrimitiveSerializer('string'));
        return $serializers;
    }
}