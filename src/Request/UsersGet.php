<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class UsersGet extends Definition
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
    protected $query = array('fields', 'text', 'profileId', 'groupIds', 'deep', 'sort', 'authorizations', 'limit', 'offset', 'pageId');
    /**
     * @param string $fields Defines the other available fields to be returned in the response.
     */
    function setFields(?string $fields)
    {
        $this->fields = $fields;
    }
    /**
     * @param string $text Searches for users containing the given text in their name or email
     */
    function setText(?string $text)
    {
        $this->text = $text;
    }
    /**
     * @param string $profileId Searches for users who have the given profile affected
     */
    function setProfileId(?string $profileId)
    {
        $this->profileId = $profileId;
    }
    /**
     * @param string[] $groupIds Searches for users who are attached to the given groups
     */
    function setGroupIds(?array $groupIds)
    {
        $this->groupIds = $groupIds;
    }
    /**
     * @param bool $deep Deep search in the sub group hierarchy
     */
    function setDeep(?bool $deep)
    {
        $this->deep = $deep;
    }
    /**
     * @param string $sort The field on which the list will be sorted. (field to sort ascending or -field to sort descending)
     * sort by name will sort on lowercase and ascii string version of "<firstName> <lastName>"
     */
    function setSort(?string $sort)
    {
        $this->sort = $sort;
    }
    /**
     * @param bool $authorizations if true, we return the list of actions and resources the user has access
     */
    function setAuthorizations(?bool $authorizations)
    {
        $this->authorizations = $authorizations;
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
     * @param string $pageId Token representing the page to retrieve
     */
    function setPageId(?string $pageId)
    {
        $this->pageId = $pageId;
    }
}