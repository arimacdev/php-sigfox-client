<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
/**
 * Retrieve a list of users according to visibility permissions and request filters.
 */
class UsersList extends Definition
{
    /**
     * Defines the other available fields to be returned in the response.
     *
     * @var string
     */
    protected ?string $fields = null;
    /**
     * Searches for users containing the given text in their name or email
     *
     * @var string
     */
    protected ?string $text = null;
    /**
     * Searches for users who have the given profile affected
     *
     * @var string
     */
    protected ?string $profileId = null;
    /**
     * Searches for users who are attached to the given groups
     *
     * @var string[]
     */
    protected ?array $groupIds = null;
    /**
     * Deep search in the sub group hierarchy
     *
     * @var bool
     */
    protected ?bool $deep = null;
    /**
     * The field on which the list will be sorted. (field to sort ascending or -field to sort descending)
     * sort by name will sort on lowercase and ascii string version of "<firstName> <lastName>"
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
    protected $serialize = array(new PrimitiveSerializer(self::class, 'fields', 'string'), new PrimitiveSerializer(self::class, 'text', 'string'), new PrimitiveSerializer(self::class, 'profileId', 'string'), new ArraySerializer(self::class, 'groupIds', new PrimitiveSerializer(self::class, 'groupIds', 'string')), new PrimitiveSerializer(self::class, 'deep', 'bool'), new PrimitiveSerializer(self::class, 'sort', 'string'), new PrimitiveSerializer(self::class, 'authorizations', 'bool'), new PrimitiveSerializer(self::class, 'limit', 'int'), new PrimitiveSerializer(self::class, 'offset', 'int'), new PrimitiveSerializer(self::class, 'pageId', 'string'));
    protected $query = array('fields', 'text', 'profileId', 'groupIds', 'deep', 'sort', 'authorizations', 'limit', 'offset', 'pageId');
    protected $validations = array('fields' => array('required', 'in:userRoles(group(name\\,type\\,level\\,bssId\\,customerBssId)\\,profile(name\\,roles(name\\,perms(name))))'), 'text' => array('required'), 'profileId' => array('required'), 'groupIds' => array('required'), 'deep' => array('required'), 'sort' => array('required', 'in:id,-id,name,-name,email,-email'), 'authorizations' => array('required'), 'limit' => array('required'), 'offset' => array('required'), 'pageId' => array('required'));
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
     * Setter for text
     *
     * @param string $text Searches for users containing the given text in their name or email
     *
     * @return self To use in method chains
     */
    public function setText(?string $text) : self
    {
        $this->text = $text;
        return $this;
    }
    /**
     * Setter for profileId
     *
     * @param string $profileId Searches for users who have the given profile affected
     *
     * @return self To use in method chains
     */
    public function setProfileId(?string $profileId) : self
    {
        $this->profileId = $profileId;
        return $this;
    }
    /**
     * Setter for groupIds
     *
     * @param string[] $groupIds Searches for users who are attached to the given groups
     *
     * @return self To use in method chains
     */
    public function setGroupIds(?array $groupIds) : self
    {
        $this->groupIds = $groupIds;
        return $this;
    }
    /**
     * Setter for deep
     *
     * @param bool $deep Deep search in the sub group hierarchy
     *
     * @return self To use in method chains
     */
    public function setDeep(?bool $deep) : self
    {
        $this->deep = $deep;
        return $this;
    }
    /**
     * Setter for sort
     *
     * @param string $sort The field on which the list will be sorted. (field to sort ascending or -field to sort
     *                     descending)
     *                     sort by name will sort on lowercase and ascii string version of "<firstName> <lastName>"
     *                     
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