<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * add user roles to a user.
 */
class UsersIdProfilesAddRoles extends Request
{
    /**
     * user roles array to add
     *
     * @var array
     */
    protected ?array $userRoles = null;
    protected array $body = array('userRoles');
    protected array $validations = array('userRoles' => array('required'));
    /**
     * Setter for userRoles
     *
     * @param array $userRoles user roles array to add
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
     * @return array user roles array to add
     */
    public function getUserRoles() : ?array
    {
        return $this->userRoles;
    }
    /**
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('userRoles' => new PrimitiveSerializer(self::class, 'userRoles', 'array'));
    }
}