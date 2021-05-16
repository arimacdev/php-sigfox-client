<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
/**
 * Defines the API user properties
 */
class ApiUser extends CommonApiUser
{
    /**
     * @var MinGroup
     */
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
    /**
     * @var MinProfile[]
     */
    protected ?array $profiles = null;
    /**
     * @var string[]
     */
    protected ?array $actions = null;
    /**
     * @var string[]
     */
    protected ?array $resources = null;
    /**
     * Setter for group
     *
     * @param MinGroup $group
     *
     * @return self To use in method chains
     */
    public function setGroup(?MinGroup $group) : self
    {
        $this->group = $group;
        return $this;
    }
    /**
     * Getter for group
     *
     * @return MinGroup
     */
    public function getGroup() : ?MinGroup
    {
        return $this->group;
    }
    /**
     * Setter for creationTime
     *
     * @param int $creationTime The creation time since epoch
     *
     * @return self To use in method chains
     */
    public function setCreationTime(?int $creationTime) : self
    {
        $this->creationTime = $creationTime;
        return $this;
    }
    /**
     * Getter for creationTime
     *
     * @return int The creation time since epoch
     */
    public function getCreationTime() : ?int
    {
        return $this->creationTime;
    }
    /**
     * Setter for id
     *
     * @param string $id The API user identifier
     *
     * @return self To use in method chains
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return string The API user identifier
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * Setter for accessToken
     *
     * @param string $accessToken The API user access token (password)
     *
     * @return self To use in method chains
     */
    public function setAccessToken(?string $accessToken) : self
    {
        $this->accessToken = $accessToken;
        return $this;
    }
    /**
     * Getter for accessToken
     *
     * @return string The API user access token (password)
     */
    public function getAccessToken() : ?string
    {
        return $this->accessToken;
    }
    /**
     * Setter for profiles
     *
     * @param MinProfile[] $profiles
     *
     * @return self To use in method chains
     */
    public function setProfiles(?array $profiles) : self
    {
        $this->profiles = $profiles;
        return $this;
    }
    /**
     * Getter for profiles
     *
     * @return MinProfile[]
     */
    public function getProfiles() : ?array
    {
        return $this->profiles;
    }
    /**
     * Setter for actions
     *
     * @param string[] $actions
     *
     * @return self To use in method chains
     */
    public function setActions(?array $actions) : self
    {
        $this->actions = $actions;
        return $this;
    }
    /**
     * Getter for actions
     *
     * @return string[]
     */
    public function getActions() : ?array
    {
        return $this->actions;
    }
    /**
     * Setter for resources
     *
     * @param string[] $resources
     *
     * @return self To use in method chains
     */
    public function setResources(?array $resources) : self
    {
        $this->resources = $resources;
        return $this;
    }
    /**
     * Getter for resources
     *
     * @return string[]
     */
    public function getResources() : ?array
    {
        return $this->resources;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        return array('group' => new ClassSerializer(self::class, 'group', MinGroup::class), 'creationTime' => new PrimitiveSerializer(self::class, 'creationTime', 'int'), 'id' => new PrimitiveSerializer(self::class, 'id', 'string'), 'accessToken' => new PrimitiveSerializer(self::class, 'accessToken', 'string'), 'profiles' => new ArraySerializer(self::class, 'profiles', new ClassSerializer(self::class, 'profiles', MinProfile::class)), 'actions' => new ArraySerializer(self::class, 'actions', new PrimitiveSerializer(self::class, 'actions', 'string')), 'resources' => new ArraySerializer(self::class, 'resources', new PrimitiveSerializer(self::class, 'resources', 'string')));
    }
}