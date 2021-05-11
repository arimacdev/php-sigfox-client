<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\ApiUserCreation;
use Arimac\Sigfox\Serializer\ClassSerializer;
/**
 * Create a new API user.
 * 
 */
class ApiUsersCreate extends Definition
{
    /**
     * @var ApiUserCreation
     */
    protected ?ApiUserCreation $apiUser = null;
    protected $serialize = array(new ClassSerializer(self::class, 'apiUser', ApiUserCreation::class));
    protected $body = array('apiUser');
    protected $validations = array('apiUser' => array('required'));
    /**
     * Setter for apiUser
     *
     * @param ApiUserCreation $apiUser
     *
     * @return self To use in method chains
     */
    public function setApiUser(?ApiUserCreation $apiUser) : self
    {
        $this->apiUser = $apiUser;
        return $this;
    }
}