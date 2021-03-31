<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class ApiUsersIdProfilesPut extends Definition
{
    protected $required = array('profileIds');
    /**
     * The API profile to update
     *
     * @var array
     */
    protected array $profileIds;
    protected $body = array('profileIds');
    /**
     * @param array $profileIds The API profile to update
     */
    function setProfileIds(array $profileIds)
    {
        $this->profileIds = $profileIds;
    }
}