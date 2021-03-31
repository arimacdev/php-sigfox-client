<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class ApiUsersGet extends Definition
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
    protected $query = array('fields', 'profileId', 'groupIds', 'limit', 'offset', 'authorizations');
    /**
     * @param string $fields Defines the other available fields to be returned in the response.
     */
    function setFields(?string $fields)
    {
        $this->fields = $fields;
    }
    /**
     * @param string $profileId Searches for API users with the given profile
     */
    function setProfileId(?string $profileId)
    {
        $this->profileId = $profileId;
    }
    /**
     * @param string[] $groupIds Searches for API users who are attached to the given groups
     */
    function setGroupIds(?array $groupIds)
    {
        $this->groupIds = $groupIds;
    }
    /**
     * @param int $limit Defines the maximum number of items to return
     */
    function setLimit(?int $limit)
    {
        $this->limit = $limit;
    }
    /**
     * @param int $offset Defines the number of items to skip
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