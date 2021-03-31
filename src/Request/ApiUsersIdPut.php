<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class ApiUsersIdPut extends Definition
{
    protected $required = array('apiUser');
    /**
     * The information to update
     *
     * @var array
     */
    protected array $apiUser;
    protected $body = array('apiUser');
    /**
     * @param array $apiUser The information to update
     */
    function setApiUser(array $apiUser)
    {
        $this->apiUser = $apiUser;
    }
}