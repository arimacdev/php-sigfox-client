<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class GroupsIdGet extends Definition
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
    protected $query = array('limit', 'offset', 'pageId');
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
    /**
     * @param string $pageId Token representing the page to retrieve
     */
    function setPageId(?string $pageId)
    {
        $this->pageId = $pageId;
    }
}