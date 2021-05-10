<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
/**
 * Retrieve a list of groups according to visibility permissions and request filters. 
 *   If parentIds is provided, retrieve all direct sub-groups under the given parents. If parentIds is not provided,
 * retrieve all direct sub-groups under the API user's group.
 *   If deep is true, retrieve all sub-groups under either given parent groups or the API user group.
 * 
 */
class GroupsList extends Definition
{
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
     * - 0 -> SO
     * - 2 -> Other
     * - 5 -> SVNO
     * - 6 -> Partners
     * - 7 -> NIP
     * - 8 -> DIST
     * - 9 -> Channel
     * - 10 -> Starter
     * - 11 -> Partner
     * 
     *
     * @var int[]
     */
    protected ?array $types = null;
    /**
     * Defines the other available fields to be returned in the response.
     * 
     *
     * @var string
     */
    protected ?string $fields = null;
    /**
     * Defines a resource:action pair the user has access on groups.
     * 
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
     * Setter for parentIds
     *
     * @param string[] $parentIds The parent group's identifiers from which the children will be fetched
     *
     * @return self To use in method chains
     */
    public function setParentIds(?array $parentIds) : self
    {
        $this->parentIds = $parentIds;
        return $this;
    }
    /**
     * Setter for deep
     *
     * @param bool $deep Retrieve all sub-groups
     *
     * @return self To use in method chains
     */
    public function setDeep(?bool $deep) : self
    {
        $this->deep = $deep;
        return $this;
    }
    /**
     * Setter for name
     *
     * @param string $name Searches for groups containing the given text in their name
     *
     * @return self To use in method chains
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Setter for types
     *
     * @param int[] $types Group's type
     *                     - 0 -> SO
     *                     - 2 -> Other
     *                     - 5 -> SVNO
     *                     - 6 -> Partners
     *                     - 7 -> NIP
     *                     - 8 -> DIST
     *                     - 9 -> Channel
     *                     - 10 -> Starter
     *                     - 11 -> Partner
     *                     
     *
     * @return self To use in method chains
     */
    public function setTypes(?array $types) : self
    {
        $this->types = $types;
        return $this;
    }
    /**
     * Setter for fields
     *
     * @param string $fields Defines the other available fields to be returned in the response.
     *                       
     *
     * @return self To use in method chains
     */
    public function setFields(?string $fields) : self
    {
        $this->fields = $fields;
        return $this;
    }
    /**
     * Setter for action
     *
     * @param string $action Defines a resource:action pair the user has access on groups.
     *                       
     *
     * @return self To use in method chains
     */
    public function setAction(?string $action) : self
    {
        $this->action = $action;
        return $this;
    }
    /**
     * Setter for sort
     *
     * @param string $sort The field on which the list will be sorted. (field to sort ascending or -field to sort
     *                     descending)
     *
     * @return self To use in method chains
     */
    public function setSort(?string $sort) : self
    {
        $this->sort = $sort;
        return $this;
    }
    /**
     * Setter for authorizations
     *
     * @param bool $authorizations if true, we return the list of actions and resources the user has access
     *
     * @return self To use in method chains
     */
    public function setAuthorizations(?bool $authorizations) : self
    {
        $this->authorizations = $authorizations;
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
    /**
     * Setter for pageId
     *
     * @param string $pageId Token representing the page to retrieve
     *
     * @return self To use in method chains
     */
    public function setPageId(?string $pageId) : self
    {
        $this->pageId = $pageId;
        return $this;
    }
}