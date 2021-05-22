<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
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
    /**
     * @internal
     */
    protected ?string $body = 'userRoles';
    /**
     * Setter for userRoles
     *
     * @param array $userRoles user roles array to add
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
     * @internal
     *
     * @return array user roles array to add
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
        $serializers = array('userRoles' => new PrimitiveSerializer('array'));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('userRoles' => array(new Required()));
        return $rules;
    }
}