<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
/**
 * Generic information about user operation
 */
class BaseResponse extends Definition
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
     * @return self To use in method chains
     */
    public function setMessage(?string $message) : self
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
     * @return self To use in method chains
     */
    public function setUserRoles(?array $userRoles) : self
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
        return array('message' => new PrimitiveSerializer(self::class, 'message', 'string'), 'userRoles' => new ArraySerializer(self::class, 'userRoles', new ClassSerializer(self::class, 'userRoles', UserRole::class)));
    }
}