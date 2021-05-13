<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
/**
 * Retrieve a list of groups according to visibility permissions and request filters.
 * If parentIds is provided, retrieve all direct sub-groups under the given parents. If parentIds is not provided,
 * retrieve all direct sub-groups under the API user's group.
 * If deep is true, retrieve all sub-groups under either given parent groups or the API user group.
 */
class GroupsList extends Definition
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
     * - {@link GroupsList::TYPES_SO}
     * - {@link GroupsList::TYPES_OTHER}
     * - {@link GroupsList::TYPES_SVNO}
     * - {@link GroupsList::TYPES_PARTNERS}
     * - {@link GroupsList::TYPES_NIP}
     * - {@link GroupsList::TYPES_DIST}
     * - {@link GroupsList::TYPES_CHANNEL}
     * - {@link GroupsList::TYPES_STARTER}
     * - {@link GroupsList::TYPES_PARTNER}
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
    protected $serialize = array(new ArraySerializer(self::class, 'parentIds', new PrimitiveSerializer(self::class, 'parentIds', 'string')), new PrimitiveSerializer(self::class, 'deep', 'bool'), new PrimitiveSerializer(self::class, 'name', 'string'), new ArraySerializer(self::class, 'types', new PrimitiveSerializer(self::class, 'types', 'int')), new PrimitiveSerializer(self::class, 'fields', 'string'), new PrimitiveSerializer(self::class, 'action', 'string'), new PrimitiveSerializer(self::class, 'sort', 'string'), new PrimitiveSerializer(self::class, 'authorizations', 'bool'), new PrimitiveSerializer(self::class, 'limit', 'int'), new PrimitiveSerializer(self::class, 'offset', 'int'), new PrimitiveSerializer(self::class, 'pageId', 'string'));
    protected $query = array('parentIds', 'deep', 'name', 'types', 'fields', 'action', 'sort', 'authorizations', 'limit', 'offset', 'pageId');
    protected $validations = array('parentIds' => array('required'), 'deep' => array('required'), 'name' => array('required'), 'types' => array('required'), 'fields' => array('required', 'in:path(name\\,type\\,level)'), 'action' => array('required', 'in:base-stations:create,contract-infos:create,device-types:create,devices:create,hosts:create,maintenances:create,providers:create,sites:create,users:create'), 'sort' => array('required', 'in:id,-id,name,-name'), 'authorizations' => array('required'), 'limit' => array('required'), 'offset' => array('required'), 'pageId' => array('required'));
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
     *                     
     *                     - {@link GroupsList::TYPES_SO}
     *                     - {@link GroupsList::TYPES_OTHER}
     *                     - {@link GroupsList::TYPES_SVNO}
     *                     - {@link GroupsList::TYPES_PARTNERS}
     *                     - {@link GroupsList::TYPES_NIP}
     *                     - {@link GroupsList::TYPES_DIST}
     *                     - {@link GroupsList::TYPES_CHANNEL}
     *                     - {@link GroupsList::TYPES_STARTER}
     *                     - {@link GroupsList::TYPES_PARTNER}
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