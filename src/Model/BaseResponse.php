<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Validator\Rules\ChildSet;
/**
 * Generic information about user operation
 */
class BaseResponse extends Model
{
    /**
     * Additional information about the operation
     *
     * @var string
     */
    protected ?string $message = null;
    /**
     * @var UserRole[]
     */
    protected ?array $userRoles = null;
    /**
     * Setter for message
     *
     * @param string $message Additional information about the operation
     *
     * @return static To use in method chains
     */
    public function setMessage(?string $message)
    {
        $this->message = $message;
        return $this;
    }
    /**
     * Getter for message
     *
     * @return string Additional information about the operation
     */
    public function getMessage() : ?string
    {
        return $this->message;
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
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('message' => new PrimitiveSerializer('string'), 'userRoles' => new ArraySerializer(new ClassSerializer(UserRole::class)));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('userRoles' => array(new ChildSet()));
        return $rules;
    }
}