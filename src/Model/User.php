<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Validator\Rules\MaxLength;
use Arimac\Sigfox\Validator\Rules\ChildSet;
/**
 * Information about a User
 */
class User extends CommonUser
{
    /**
     * The user's identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * The user's email
     *
     * @var string
     */
    protected ?string $email = null;
    /**
     * If the user account is locked or not
     *
     * @var bool
     */
    protected ?bool $locked = null;
    /**
     * The user's creation time (in millisecond since Unix Epoch)
     *
     * @var int
     */
    protected ?int $creationTime = null;
    /**
     * The user's last login time
     *
     * @var int
     */
    protected ?int $lastLoginTime = null;
    /**
     * @var UserRole[]
     */
    protected ?array $userRoles = null;
    /**
     * @var string[]
     */
    protected ?array $actions = null;
    /**
     * @var string[]
     */
    protected ?array $resources = null;
    /**
     * Setter for id
     *
     * @param string $id The user's identifier
     *
     * @return static To use in method chains
     */
    public function setId(?string $id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return string The user's identifier
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * Setter for email
     *
     * @param string $email The user's email
     *
     * @return static To use in method chains
     */
    public function setEmail(?string $email)
    {
        $this->email = $email;
        return $this;
    }
    /**
     * Getter for email
     *
     * @return string The user's email
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * Setter for locked
     *
     * @param bool $locked If the user account is locked or not
     *
     * @return static To use in method chains
     */
    public function setLocked(?bool $locked)
    {
        $this->locked = $locked;
        return $this;
    }
    /**
     * Getter for locked
     *
     * @return bool If the user account is locked or not
     */
    public function getLocked() : ?bool
    {
        return $this->locked;
    }
    /**
     * Setter for creationTime
     *
     * @param int $creationTime The user's creation time (in millisecond since Unix Epoch)
     *
     * @return static To use in method chains
     */
    public function setCreationTime(?int $creationTime)
    {
        $this->creationTime = $creationTime;
        return $this;
    }
    /**
     * Getter for creationTime
     *
     * @return int The user's creation time (in millisecond since Unix Epoch)
     */
    public function getCreationTime() : ?int
    {
        return $this->creationTime;
    }
    /**
     * Setter for lastLoginTime
     *
     * @param int $lastLoginTime The user's last login time
     *
     * @return static To use in method chains
     */
    public function setLastLoginTime(?int $lastLoginTime)
    {
        $this->lastLoginTime = $lastLoginTime;
        return $this;
    }
    /**
     * Getter for lastLoginTime
     *
     * @return int The user's last login time
     */
    public function getLastLoginTime() : ?int
    {
        return $this->lastLoginTime;
    }
    /**
     * Setter for userRoles
     *
     * @param UserRole[] $userRoles
     *
     * @return static To use in method chains
     */
    public function setUserRoles(?array $userRoles)
    {
        $this->userRoles = $userRoles;
        return $this;
    }
    /**
     * Getter for userRoles
     *
     * @return UserRole[]
     */
    public function getUserRoles() : ?array
    {
        return $this->userRoles;
    }
    /**
     * Setter for actions
     *
     * @param string[] $actions
     *
     * @return static To use in method chains
     */
    public function setActions(?array $actions)
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
     * @return static To use in method chains
     */
    public function setResources(?array $resources)
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
        $serializers = array('id' => new PrimitiveSerializer('string'), 'email' => new PrimitiveSerializer('string'), 'locked' => new PrimitiveSerializer('bool'), 'creationTime' => new PrimitiveSerializer('int'), 'lastLoginTime' => new PrimitiveSerializer('int'), 'userRoles' => new ArraySerializer(new ClassSerializer(UserRole::class)), 'actions' => new ArraySerializer(new PrimitiveSerializer('string')), 'resources' => new ArraySerializer(new PrimitiveSerializer('string')));
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
        $rules = array('email' => array(new MaxLength(250)), 'userRoles' => array(new ChildSet()));
        $rules = array_merge($rules, parent::getValidationMetaData());
        return $rules;
    }
}