<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\ApiUserEdition;
/**
 * Update information about a given API user.
 * 
 */
class ApiUsersIdUpdate extends Definition
{
    /**
     * The information to update
     *
     * @var ApiUserEdition
     */
    protected ?ApiUserEdition $apiUser = null;
    protected $serialize = array('apiUser' => ApiUserEdition::class);
    protected $body = array('apiUser');
    /**
     * Setter for apiUser
     *
     * @param ApiUserEdition $apiUser The information to update
     *
     * @return self To use in method chains
     */
    public function setApiUser(?ApiUserEdition $apiUser) : self
    {
        $this->apiUser = $apiUser;
        return $this;
    }
}