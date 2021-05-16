<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Retrieve a list of a Group's profiles according to visibility permissions and request filters.
 */
class ProfilesList extends Request
{
    /**
     * The group's identifier
     *
     * @var string
     */
    protected ?string $groupId = null;
    /**
     * also returns profiles inherited from parent's group
     *
     * @var bool
     */
    protected ?bool $inherit = null;
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
     * if true, return the list of actions and resources the user has access
     *
     * @var bool
     */
    protected ?bool $authorizations = null;
    protected array $query = array('groupId', 'inherit', 'fields', 'limit', 'offset', 'authorizations');
    protected array $validations = array('groupId' => array('required'), 'fields' => array('in:group(name\\,type\\,level),roles(name\\,path(name))', 'nullable'));
    /**
     * Setter for groupId
     *
     * @param string $groupId The group's identifier
     *
     * @return self To use in method chains
     */
    public function setGroupId(?string $groupId) : self
    {
        $this->groupId = $groupId;
        return $this;
    }
    /**
     * Getter for groupId
     *
     * @return string The group's identifier
     */
    public function getGroupId() : ?string
    {
        return $this->groupId;
    }
    /**
     * Setter for inherit
     *
     * @param bool $inherit also returns profiles inherited from parent's group
     *
     * @return self To use in method chains
     */
    public function setInherit(?bool $inherit) : self
    {
        $this->inherit = $inherit;
        return $this;
    }
    /**
     * Getter for inherit
     *
     * @return bool also returns profiles inherited from parent's group
     */
    public function getInherit() : ?bool
    {
        return $this->inherit;
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
     * @return string Defines the other available fields to be returned in the response.
     *                
     */
    public function getFields() : ?string
    {
        return $this->fields;
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
     * @return int The number of items to skip
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
     */
    public function getSerializeMetaData() : array
    {
        return array('groupId' => new PrimitiveSerializer(self::class, 'groupId', 'string'), 'inherit' => new PrimitiveSerializer(self::class, 'inherit', 'bool'), 'fields' => new PrimitiveSerializer(self::class, 'fields', 'string'), 'limit' => new PrimitiveSerializer(self::class, 'limit', 'int'), 'offset' => new PrimitiveSerializer(self::class, 'offset', 'int'), 'authorizations' => new PrimitiveSerializer(self::class, 'authorizations', 'bool'));
    }
}