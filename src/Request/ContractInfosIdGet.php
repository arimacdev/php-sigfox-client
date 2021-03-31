<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class ContractInfosIdGet extends Definition
{
    /**
     * Returns only devices of the given device type
     *
     * @var string
     */
    protected ?string $deviceTypeId = null;
    /**
     * Defines the other available fields to be returned in the response.
     *
     * @var string
     */
    protected ?string $fields = null;
    /**
     * The maximum number of items to return
     *
     * @var int
     */
    protected ?int $limit = null;
    /**
     * Token representing the page to retrieve
     *
     * @var string
     */
    protected ?string $pageId = null;
    protected $query = array('deviceTypeId', 'fields', 'limit', 'pageId');
    /**
     * @param string $deviceTypeId Returns only devices of the given device type
     */
    function setDeviceTypeId(?string $deviceTypeId)
    {
        $this->deviceTypeId = $deviceTypeId;
    }
    /**
     * @param string $fields Defines the other available fields to be returned in the response.
     */
    function setFields(?string $fields)
    {
        $this->fields = $fields;
    }
    /**
     * @param int $limit The maximum number of items to return
     */
    function setLimit(?int $limit)
    {
        $this->limit = $limit;
    }
    /**
     * @param string $pageId Token representing the page to retrieve
     */
    function setPageId(?string $pageId)
    {
        $this->pageId = $pageId;
    }
}