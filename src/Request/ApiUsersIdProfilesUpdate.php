<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\ProfileIds;
/**
 * Associate new profiles to a given API user.
 */
class ApiUsersIdProfilesUpdate extends Definition
{
    /**
     * The API profile to update
     *
     * @var ProfileIds
     */
    protected ?ProfileIds $profileIds = null;
    protected $serialize = array('profileIds' => ProfileIds::class);
    protected $body = array('profileIds');
    /**
     * Setter for profileIds
     *
     * @param ProfileIds $profileIds The API profile to update
     *
     * @return self To use in method chains
     */
    public function setProfileIds(?ProfileIds $profileIds) : self
    {
        $this->profileIds = $profileIds;
        return $this;
    }
}