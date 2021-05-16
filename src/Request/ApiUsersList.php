<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
/**
 * Retrieve a list of API users according to visibility permissions and request filters.
 */
class ApiUsersList extends Request
{
    /**
     * Defines the other available fields to be returned in the response.
     *
     * @var string
     */
    protected ?string $fields = null;
    /**
     * Searches for API users with the given profile
     *
     * @var string
     */
    protected ?string $profileId = null;
    /**
     * Searches for API users who are attached to the given groups
     *
     * @var string[]
     */
    protected ?array $groupIds = null;
    /**
     * Defines the maximum number of items to return
     *
     * @var int
     */
    protected ?int $limit = null;
    /**
     * Defines the number of items to skip
     *
     * @var int
     */
    protected ?int $offset = null;
    /**
     * if true, return the list of actions and resources the user has access
     *
     * @var bool
     */
    protected ?bool $authorizations = null;
    /**
     * @internal
     */
    protected array $query = array('fields', 'profileId', 'groupIds', 'limit', 'offset', 'authorizations');
    /**
     * @internal
     */
    protected array $validations = array('fields' => array('in:group(name\\,type\\,level\\,bssId\\,customerBssId),profiles(name\\,roles(name\\,perms(name)))', 'nullable'));
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
     * @return string Defines the other available fields to be returned in the response.
     *                
     */
    public function getFields() : ?string
    {
        return $this->fields;
    }
    /**
     * Setter for profileId
     *
     * @param string $profileId Searches for API users with the given profile
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
     * @return string Searches for API users with the given profile
     */
    public function getProfileId() : ?string
    {
        return $this->profileId;
    }
    /**
     * Setter for groupIds
     *
     * @param string[] $groupIds Searches for API users who are attached to the given groups
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
     * @return string[] Searches for API users who are attached to the given groups
     */
    public function getGroupIds() : ?array
    {
        return $this->groupIds;
    }
    /**
     * Setter for limit
     *
     * @param int $limit Defines the maximum number of items to return
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
     * @return int Defines the maximum number of items to return
     */
    public function getLimit() : ?int
    {
        return $this->limit;
    }
    /**
     * Setter for offset
     *
     * @param int $offset Defines the number of items to skip
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
     * @return int Defines the number of items to skip
     */
    public function getOffset() : ?int
    {
        return $this->offset;
    }
    /**
     * Setter for authorizations
     *
     * @param bool $authorizations if true, return the list of actions and resources the user has access
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
     * @return bool if true, return the list of actions and resources the user has access
     */
    public function getAuthorizations() : ?bool
    {
        return $this->authorizations;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        return array('fields' => new PrimitiveSerializer(self::class, 'fields', 'string'), 'profileId' => new PrimitiveSerializer(self::class, 'profileId', 'string'), 'groupIds' => new ArraySerializer(self::class, 'groupIds', new PrimitiveSerializer(self::class, 'groupIds', 'string')), 'limit' => new PrimitiveSerializer(self::class, 'limit', 'int'), 'offset' => new PrimitiveSerializer(self::class, 'offset', 'int'), 'authorizations' => new PrimitiveSerializer(self::class, 'authorizations', 'bool'));
    }
}