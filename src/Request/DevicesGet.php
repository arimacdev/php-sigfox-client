<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class DevicesGet extends Definition
{
    /**
     * The device's identifier (hexadecimal format)
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * Returns all devices under the given groups (included sub-groups if the parameter deep is equals to true)
     *
     * @var string[]
     */
    protected ?array $groupIds = null;
    /**
     * if true, we search by groups and subgroups through the parameter 'groupIds'
     *
     * @var bool
     */
    protected ?bool $deep = null;
    /**
     * if true, we return the list of actions and resources the user has access
     *
     * @var bool
     */
    protected ?bool $authorizations = null;
    /**
     * Returns all devices of the given device type
     *
     * @var string
     */
    protected ?string $deviceTypeId = null;
    /**
     * Returns all devices under the given operator
     *
     * @var string
     */
    protected ?string $operatorId = null;
    /**
     * The field on which the list will be sorted. (field to sort ascending or -field to sort descending)
     *
     * @var string
     */
    protected ?string $sort = null;
    /**
     * The minimal id of the filtered range, only availble when sort parameter is set to "id" or "-id"
     *
     * @var string
     */
    protected ?string $minId = null;
    /**
     * The maximal id of the filtered range, only availble when sort parameter is set to "id" or "-id"
     *
     * @var string
     */
    protected ?string $maxId = null;
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
    protected $query = array('id', 'groupIds', 'deep', 'authorizations', 'deviceTypeId', 'operatorId', 'sort', 'minId', 'maxId', 'fields', 'limit', 'offset', 'pageId');
    /**
     * @param string $id The device's identifier (hexadecimal format)
     */
    function setId(?string $id)
    {
        $this->id = $id;
    }
    /**
     * @param string[] $groupIds Returns all devices under the given groups (included sub-groups if the parameter deep is equals to true)
     */
    function setGroupIds(?array $groupIds)
    {
        $this->groupIds = $groupIds;
    }
    /**
     * @param bool $deep if true, we search by groups and subgroups through the parameter 'groupIds'
     */
    function setDeep(?bool $deep)
    {
        $this->deep = $deep;
    }
    /**
     * @param bool $authorizations if true, we return the list of actions and resources the user has access
     */
    function setAuthorizations(?bool $authorizations)
    {
        $this->authorizations = $authorizations;
    }
    /**
     * @param string $deviceTypeId Returns all devices of the given device type
     */
    function setDeviceTypeId(?string $deviceTypeId)
    {
        $this->deviceTypeId = $deviceTypeId;
    }
    /**
     * @param string $operatorId Returns all devices under the given operator
     */
    function setOperatorId(?string $operatorId)
    {
        $this->operatorId = $operatorId;
    }
    /**
     * @param string $sort The field on which the list will be sorted. (field to sort ascending or -field to sort descending)
     */
    function setSort(?string $sort)
    {
        $this->sort = $sort;
    }
    /**
     * @param string $minId The minimal id of the filtered range, only availble when sort parameter is set to "id" or "-id"
     */
    function setMinId(?string $minId)
    {
        $this->minId = $minId;
    }
    /**
     * @param string $maxId The maximal id of the filtered range, only availble when sort parameter is set to "id" or "-id"
     */
    function setMaxId(?string $maxId)
    {
        $this->maxId = $maxId;
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