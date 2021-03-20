<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonApiUser;
use Arimac\Sigfox\Definition\MinGroup;
use Arimac\Sigfox\Definition\MinProfile;
use Arimac\Sigfox\Definition\Actions;
use Arimac\Sigfox\Definition\Resources;
/**
 * Defines the API user properties
 */
class ApiUser extends CommonApiUser
{
    /** @var MinGroup */
    protected MinGroup $group;
    /**
     * The creation time since epoch
     *
     * @var int
     */
    protected int $creationTime;
    /**
     * The API user identifier
     *
     * @var string
     */
    protected string $id;
    /**
     * The API user access token (password)
     *
     * @var string
     */
    protected string $accessToken;
    /** @var MinProfile[] */
    protected array $profiles;
    /** @var Actions */
    protected Actions $actions;
    /** @var Resources */
    protected Resources $resources;
    /**
     * @param MinGroup group
     */
    function setGroup(MinGroup $group)
    {
        $this->group = $group;
    }
    /**
     * @return MinGroup group
     */
    function getGroup() : MinGroup
    {
        return $this->group;
    }
    /**
     * @param int creationTime The creation time since epoch
     */
    function setCreationTime(int $creationTime)
    {
        $this->creationTime = $creationTime;
    }
    /**
     * @return int The creation time since epoch
     */
    function getCreationTime() : int
    {
        return $this->creationTime;
    }
    /**
     * @param string id The API user identifier
     */
    function setId(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The API user identifier
     */
    function getId() : string
    {
        return $this->id;
    }
    /**
     * @param string accessToken The API user access token (password)
     */
    function setAccessToken(string $accessToken)
    {
        $this->accessToken = $accessToken;
    }
    /**
     * @return string The API user access token (password)
     */
    function getAccessToken() : string
    {
        return $this->accessToken;
    }
    /**
     * @param MinProfile[] profiles
     */
    function setProfiles(array $profiles)
    {
        $this->profiles = $profiles;
    }
    /**
     * @return MinProfile[] profiles
     */
    function getProfiles() : array
    {
        return $this->profiles;
    }
    /**
     * @param Actions actions
     */
    function setActions(Actions $actions)
    {
        $this->actions = $actions;
    }
    /**
     * @return Actions actions
     */
    function getActions() : Actions
    {
        return $this->actions;
    }
    /**
     * @param Resources resources
     */
    function setResources(Resources $resources)
    {
        $this->resources = $resources;
    }
    /**
     * @return Resources resources
     */
    function getResources() : Resources
    {
        return $this->resources;
    }
}