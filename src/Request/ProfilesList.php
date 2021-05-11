<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Retrieve a list of a Group's profiles according to visibility permissions and request filters.
 * 
 */
class ProfilesList extends Definition
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
    protected $serialize = array(new PrimitiveSerializer(self::class, 'groupId', 'string'), new PrimitiveSerializer(self::class, 'inherit', 'bool'), new PrimitiveSerializer(self::class, 'fields', 'string'), new PrimitiveSerializer(self::class, 'limit', 'int'), new PrimitiveSerializer(self::class, 'offset', 'int'), new PrimitiveSerializer(self::class, 'authorizations', 'bool'));
    protected $query = array('groupId', 'inherit', 'fields', 'limit', 'offset', 'authorizations');
    protected $validations = array('groupId' => array('required'), 'inherit' => array('required'), 'fields' => array('required', 'in:group(name\\,type\\,level),roles(name\\,path(name))'), 'limit' => array('required'), 'offset' => array('required'), 'authorizations' => array('required'));
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