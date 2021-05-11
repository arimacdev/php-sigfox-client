<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * add user roles to a user.
 * 
 */
class UsersIdProfilesAddRoles extends Definition
{
    /**
     * user roles array to add
     *
     * @var array
     */
    protected ?array $userRoles = null;
    protected $serialize = array(new PrimitiveSerializer(self::class, 'userRoles', 'array'));
    protected $body = array('userRoles');
    protected $validations = array('userRoles' => array('required'));
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
}