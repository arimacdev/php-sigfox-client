<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class ApiUsersPost extends Definition
{
    protected $required = array('apiUser');
    /** @var array */
    protected array $apiUser;
    protected $body = array('apiUser');
    /**
     * @param array apiUser
     */
    function setApiUser(array $apiUser)
    {
        $this->apiUser = $apiUser;
    }
}