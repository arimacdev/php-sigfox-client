<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonApiUser;
use Arimac\Sigfox\Definition\MinGroup;
use Arimac\Sigfox\Definition\MinProfile;
/**
 * Defines the API user properties
 */
class ApiUser extends CommonApiUser
{
    /** @var MinGroup */
    protected ?MinGroup $group = null;
    /**
     * The creation time since epoch
     *
     * @var int
     */
    protected ?int $creationTime = null;
    /**
     * The API user identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * The API user access token (password)
     *
     * @var string
     */
    protected ?string $accessToken = null;
    /** @var MinProfile[] */
    protected ?array $profiles = null;
    /** @var string[] */
    protected ?array $actions = null;
    /** @var string[] */
    protected ?array $resources = null;
    protected $objects = array('group' => '\\Arimac\\Sigfox\\Definition\\MinGroup');
    /**
     * @param MinGroup group
     */
    function setGroup(?MinGroup $group)
    {
        $this->group = $group;
    }
    /**
     * @return MinGroup group
     */
    function getGroup() : ?MinGroup
    {
        return $this->group;
    }
    /**
     * @param int $creationTime The creation time since epoch
     */
    function setCreationTime(?int $creationTime)
    {
        $this->creationTime = $creationTime;
    }
    /**
     * @return int The creation time since epoch
     */
    function getCreationTime() : ?int
    {
        return $this->creationTime;
    }
    /**
     * @param string $id The API user identifier
     */
    function setId(?string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The API user identifier
     */
    function getId() : ?string
    {
        return $this->id;
    }
    /**
     * @param string $accessToken The API user access token (password)
     */
    function setAccessToken(?string $accessToken)
    {
        $this->accessToken = $accessToken;
    }
    /**
     * @return string The API user access token (password)
     */
    function getAccessToken() : ?string
    {
        return $this->accessToken;
    }
    /**
     * @param MinProfile[] profiles
     */
    function setProfiles(?array $profiles)
    {
        $this->profiles = $profiles;
    }
    /**
     * @return MinProfile[] profiles
     */
    function getProfiles() : ?array
    {
        return $this->profiles;
    }
    /**
     * @param string[] actions
     */
    function setActions(?array $actions)
    {
        $this->actions = $actions;
    }
    /**
     * @return string[] actions
     */
    function getActions() : ?array
    {
        return $this->actions;
    }
    /**
     * @param string[] resources
     */
    function setResources(?array $resources)
    {
        $this->resources = $resources;
    }
    /**
     * @return string[] resources
     */
    function getResources() : ?array
    {
        return $this->resources;
    }
}