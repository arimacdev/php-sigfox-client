<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class ProfilesGet extends Definition
{
    protected $required = array('groupId');
    /**
     * The group's identifier
     *
     * @var string
     */
    protected string $groupId;
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
    protected $query = array('groupId', 'inherit', 'fields', 'limit', 'offset', 'authorizations');
    /**
     * @param string $groupId The group's identifier
     */
    function setGroupId(string $groupId)
    {
        $this->groupId = $groupId;
    }
    /**
     * @param bool $inherit also returns profiles inherited from parent's group
     */
    function setInherit(?bool $inherit)
    {
        $this->inherit = $inherit;
    }
    /**
     * @param string $fields Defines the other available fields to be returned in the response.
     */
    function setFields(?string $fields)
    {
        $this->fields = $fields;
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
     * @param bool $authorizations if true, return the list of actions and resources the user has access
     */
    function setAuthorizations(?bool $authorizations)
    {
        $this->authorizations = $authorizations;
    }
}