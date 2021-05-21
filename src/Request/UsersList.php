<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Validator\Rules\OneOf;
/**
 * Retrieve a list of users according to visibility permissions and request filters.
 */
class UsersList extends Request
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
    /**
     * @internal
     */
    protected array $query = array('fields', 'text', 'profileId', 'groupIds', 'deep', 'sort', 'authorizations', 'limit', 'offset', 'pageId');
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
     * Getter for text
     *
     * @internal
     *
     * @return string Searches for users containing the given text in their name or email
     */
    public function getText() : ?string
    {
        return $this->text;
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
     * Getter for profileId
     *
     * @internal
     *
     * @return string Searches for users who have the given profile affected
     */
    public function getProfileId() : ?string
    {
        return $this->profileId;
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
     * Getter for groupIds
     *
     * @internal
     *
     * @return string[] Searches for users who are attached to the given groups
     */
    public function getGroupIds() : ?array
    {
        return $this->groupIds;
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
     * Getter for deep
     *
     * @internal
     *
     * @return bool Deep search in the sub group hierarchy
     */
    public function getDeep() : ?bool
    {
        return $this->deep;
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
     * Getter for sort
     *
     * @internal
     *
     * @return string The field on which the list will be sorted. (field to sort ascending or -field to sort
     *                descending)
     *                sort by name will sort on lowercase and ascii string version of "<firstName> <lastName>"
     *                
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
        $serializers = array('fields' => new PrimitiveSerializer('string'), 'text' => new PrimitiveSerializer('string'), 'profileId' => new PrimitiveSerializer('string'), 'groupIds' => new ArraySerializer(new PrimitiveSerializer('string')), 'deep' => new PrimitiveSerializer('bool'), 'sort' => new PrimitiveSerializer('string'), 'authorizations' => new PrimitiveSerializer('bool'), 'limit' => new PrimitiveSerializer('int'), 'offset' => new PrimitiveSerializer('int'), 'pageId' => new PrimitiveSerializer('string'));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('fields' => array(new OneOf(array('userRoles(group(name,type,level,bssId,customerBssId),profile(name,roles(name,perms(name))))'))), 'sort' => array(new OneOf(array('id', '-id', 'name', '-name', 'email', '-email'))));
        return $rules;
    }
}