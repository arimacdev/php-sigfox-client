<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
/**
 * Retrieve a list of API users according to visibility permissions and request filters.
 * 
 */
class ApiUsersList extends Definition
{
    /**
     * Defines the other available fields to be returned in the response.
     * 
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
    protected $serialize = array(new PrimitiveSerializer(self::class, 'fields', 'string'), new PrimitiveSerializer(self::class, 'profileId', 'string'), new ArraySerializer(self::class, 'groupIds', new PrimitiveSerializer(self::class, 'groupIds', 'string')), new PrimitiveSerializer(self::class, 'limit', 'int'), new PrimitiveSerializer(self::class, 'offset', 'int'), new PrimitiveSerializer(self::class, 'authorizations', 'bool'));
    protected $query = array('fields', 'profileId', 'groupIds', 'limit', 'offset', 'authorizations');
    protected $validations = array('fields' => array('required', 'in:group(name\\,type\\,level\\,bssId\\,customerBssId),profiles(name\\,roles(name\\,perms(name)))'), 'profileId' => array('required'), 'groupIds' => array('required'), 'limit' => array('required'), 'offset' => array('required'), 'authorizations' => array('required'));
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
}