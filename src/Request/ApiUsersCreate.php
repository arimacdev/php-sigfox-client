<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\ApiUserCreation;
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
    protected $serialize = array('apiUser' => ApiUserCreation::class);
    protected $body = array('apiUser');
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