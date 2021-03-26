<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\ApiUsersIdProfiles;
use Arimac\Sigfox\Repository\ApiUsersIdRenewCredential;
class ApiUsersId
{
    /**
     * The API user identifier
     */
    protected string $id;
    /**
     * Creating the repository
     *
     * @param string $id The API user identifier
     */
    function __construct(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return ApiUsersIdProfiles
     */
    public function profiles() : ApiUsersIdProfiles
    {
        return new ApiUsersIdProfiles($this->id);
    }
    /**
     * @return ApiUsersIdRenewCredential
     */
    public function renewCredential() : ApiUsersIdRenewCredential
    {
        return new ApiUsersIdRenewCredential($this->id);
    }
}