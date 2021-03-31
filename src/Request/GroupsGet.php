<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class GroupsGet extends Definition
{
    /** SO */
    public const TYPES_SO = 0;
    /** Other */
    public const TYPES_OTHER = 2;
    /** SVNO */
    public const TYPES_SVNO = 5;
    /** Partners */
    public const TYPES_PARTNERS = 6;
    /** NIP */
    public const TYPES_NIP = 7;
    /** DIST */
    public const TYPES_DIST = 8;
    /** Channel */
    public const TYPES_CHANNEL = 9;
    /** Starter */
    public const TYPES_STARTER = 10;
    /** Partner */
    public const TYPES_PARTNER = 11;
    /**
     * The parent group's identifiers from which the children will be fetched
     *
     * @var string[]
     */
    protected ?array $parentIds = null;
    /**
     * Retrieve all sub-groups
     *
     * @var bool
     */
    protected ?bool $deep = null;
    /**
     * Searches for groups containing the given text in their name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * Group's type
     * - `GroupsGet::TYPES_SO`
     * - `GroupsGet::TYPES_OTHER`
     * - `GroupsGet::TYPES_SVNO`
     * - `GroupsGet::TYPES_PARTNERS`
     * - `GroupsGet::TYPES_NIP`
     * - `GroupsGet::TYPES_DIST`
     * - `GroupsGet::TYPES_CHANNEL`
     * - `GroupsGet::TYPES_STARTER`
     * - `GroupsGet::TYPES_PARTNER`
     *
     * @var int[]
     */
    protected ?array $types = null;
    /**
     * Defines the other available fields to be returned in the response.
     *
     * @var string
     */
    protected ?string $fields = null;
    /**
     * Defines a resource:action pair the user has access on groups.
     *
     * @var string
     */
    protected ?string $action = null;
    /**
     * The field on which the list will be sorted. (field to sort ascending or -field to sort descending)
     *
     * @var string
     */
    protected ?string $sort = null;
    /**
     * if true, we return the list of actions and resources the user has access
     *
     * @var bool
     */
    protected ?bool $authorizations = null;
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
    protected $query = array('parentIds', 'deep', 'name', 'types', 'fields', 'action', 'sort', 'authorizations', 'limit', 'offset', 'pageId');
    /**
     * @param string[] $parentIds The parent group's identifiers from which the children will be fetched
     */
    function setParentIds(?array $parentIds)
    {
        $this->parentIds = $parentIds;
    }
    /**
     * @param bool $deep Retrieve all sub-groups
     */
    function setDeep(?bool $deep)
    {
        $this->deep = $deep;
    }
    /**
     * @param string $name Searches for groups containing the given text in their name
     */
    function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @param int[] $types Group's type
     * - `GroupsGet::TYPES_SO`
     * - `GroupsGet::TYPES_OTHER`
     * - `GroupsGet::TYPES_SVNO`
     * - `GroupsGet::TYPES_PARTNERS`
     * - `GroupsGet::TYPES_NIP`
     * - `GroupsGet::TYPES_DIST`
     * - `GroupsGet::TYPES_CHANNEL`
     * - `GroupsGet::TYPES_STARTER`
     * - `GroupsGet::TYPES_PARTNER`
     */
    function setTypes(?array $types)
    {
        $this->types = $types;
    }
    /**
     * @param string $fields Defines the other available fields to be returned in the response.
     */
    function setFields(?string $fields)
    {
        $this->fields = $fields;
    }
    /**
     * @param string $action Defines a resource:action pair the user has access on groups.
     */
    function setAction(?string $action)
    {
        $this->action = $action;
    }
    /**
     * @param string $sort The field on which the list will be sorted. (field to sort ascending or -field to sort descending)
     */
    function setSort(?string $sort)
    {
        $this->sort = $sort;
    }
    /**
     * @param bool $authorizations if true, we return the list of actions and resources the user has access
     */
    function setAuthorizations(?bool $authorizations)
    {
        $this->authorizations = $authorizations;
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