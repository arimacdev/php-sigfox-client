<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Validator\Rules\Child;
use Arimac\Sigfox\Validator\Rules\ChildSet;
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
        $serializers = array('group' => new ClassSerializer(MinGroup::class), 'creationTime' => new PrimitiveSerializer('int'), 'id' => new PrimitiveSerializer('string'), 'accessToken' => new PrimitiveSerializer('string'), 'profiles' => new ArraySerializer(new ClassSerializer(MinProfile::class)), 'actions' => new ArraySerializer(new PrimitiveSerializer('string')), 'resources' => new ArraySerializer(new PrimitiveSerializer('string')));
        $serializers = array_merge($serializers, parent::getSerializeMetaData());
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('group' => array(new Child()), 'profiles' => array(new ChildSet()));
        $rules = array_merge($rules, parent::getValidationMetaData());
        return $rules;
    }
}