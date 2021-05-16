<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
/**
 * Retrieve a list of groups according to visibility permissions and request filters.
 * If parentIds is provided, retrieve all direct sub-groups under the given parents. If parentIds is not provided,
 * retrieve all direct sub-groups under the API user's group.
 * If deep is true, retrieve all sub-groups under either given parent groups or the API user group.
 */
class GroupsList extends Request
{
    /**
     * SO
     */
    public const TYPES_SO = 0;
    /**
     * Other
     */
    public const TYPES_OTHER = 2;
    /**
     * SVNO
     */
    public const TYPES_SVNO = 5;
    /**
     * Partners
     */
    public const TYPES_PARTNERS = 6;
    /**
     * NIP
     */
    public const TYPES_NIP = 7;
    /**
     * DIST
     */
    public const TYPES_DIST = 8;
    /**
     * Channel
     */
    public const TYPES_CHANNEL = 9;
    /**
     * Starter
     */
    public const TYPES_STARTER = 10;
    /**
     * Partner
     */
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
     * 
     * - {@see GroupsList::TYPES_SO}
     * - {@see GroupsList::TYPES_OTHER}
     * - {@see GroupsList::TYPES_SVNO}
     * - {@see GroupsList::TYPES_PARTNERS}
     * - {@see GroupsList::TYPES_NIP}
     * - {@see GroupsList::TYPES_DIST}
     * - {@see GroupsList::TYPES_CHANNEL}
     * - {@see GroupsList::TYPES_STARTER}
     * - {@see GroupsList::TYPES_PARTNER}
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
    /**
     * @internal
     */
    protected array $query = array('parentIds', 'deep', 'name', 'types', 'fields', 'action', 'sort', 'authorizations', 'limit', 'offset', 'pageId');
    /**
     * @internal
     */
    protected array $validations = array('fields' => array('in:path(name\\,type\\,level)', 'nullable'), 'action' => array('in:base-stations:create,contract-infos:create,device-types:create,devices:create,hosts:create,maintenances:create,providers:create,sites:create,users:create', 'nullable'), 'sort' => array('in:id,-id,name,-name', 'nullable'));
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
     * Getter for parentIds
     *
     * @internal
     *
     * @return string[] The parent group's identifiers from which the children will be fetched
     */
    public function getParentIds() : ?array
    {
        return $this->parentIds;
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
     * Getter for deep
     *
     * @internal
     *
     * @return bool Retrieve all sub-groups
     */
    public function getDeep() : ?bool
    {
        return $this->deep;
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
     * Getter for name
     *
     * @internal
     *
     * @return string Searches for groups containing the given text in their name
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Setter for types
     *
     * @param int[] $types Group's type
     *                     
     *                     - {@see GroupsList::TYPES_SO}
     *                     - {@see GroupsList::TYPES_OTHER}
     *                     - {@see GroupsList::TYPES_SVNO}
     *                     - {@see GroupsList::TYPES_PARTNERS}
     *                     - {@see GroupsList::TYPES_NIP}
     *                     - {@see GroupsList::TYPES_DIST}
     *                     - {@see GroupsList::TYPES_CHANNEL}
     *                     - {@see GroupsList::TYPES_STARTER}
     *                     - {@see GroupsList::TYPES_PARTNER}
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
     * Getter for types
     *
     * @internal
     *
     * @return int[] Group's type
     *               
     *               - {@see GroupsList::TYPES_SO}
     *               - {@see GroupsList::TYPES_OTHER}
     *               - {@see GroupsList::TYPES_SVNO}
     *               - {@see GroupsList::TYPES_PARTNERS}
     *               - {@see GroupsList::TYPES_NIP}
     *               - {@see GroupsList::TYPES_DIST}
     *               - {@see GroupsList::TYPES_CHANNEL}
     *               - {@see GroupsList::TYPES_STARTER}
     *               - {@see GroupsList::TYPES_PARTNER}
     *               
     */
    public function getTypes() : ?array
    {
        return $this->types;
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
     * Getter for fields
     *
     * @internal
     *
     * @return string Defines the other available fields to be returned in the response.
     *                
     */
    public function getFields() : ?string
    {
        return $this->fields;
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
     * Getter for action
     *
     * @internal
     *
     * @return string Defines a resource:action pair the user has access on groups.
     *                
     */
    public function getAction() : ?string
    {
        return $this->action;
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
     * Getter for sort
     *
     * @internal
     *
     * @return string The field on which the list will be sorted. (field to sort ascending or -field to sort
     *                descending)
     */
    public function getSort() : ?string
    {
        return $this->sort;
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
     * Getter for authorizations
     *
     * @internal
     *
     * @return bool if true, we return the list of actions and resources the user has access
     */
    public function getAuthorizations() : ?bool
    {
        return $this->authorizations;
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
        return array('parentIds' => new ArraySerializer(new PrimitiveSerializer('string')), 'deep' => new PrimitiveSerializer('bool'), 'name' => new PrimitiveSerializer('string'), 'types' => new ArraySerializer(new PrimitiveSerializer('int')), 'fields' => new PrimitiveSerializer('string'), 'action' => new PrimitiveSerializer('string'), 'sort' => new PrimitiveSerializer('string'), 'authorizations' => new PrimitiveSerializer('bool'), 'limit' => new PrimitiveSerializer('int'), 'offset' => new PrimitiveSerializer('int'), 'pageId' => new PrimitiveSerializer('string'));
    }
}