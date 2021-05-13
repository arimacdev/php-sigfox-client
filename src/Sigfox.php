<?php

namespace Arimac\Sigfox;

use Arimac\Sigfox\Repository\ApiUsers;
use Arimac\Sigfox\Repository\ContractInfos;
use Arimac\Sigfox\Repository\Coverages;
use Arimac\Sigfox\Repository\Devices;
use Arimac\Sigfox\Repository\DeviceTypes;
use Arimac\Sigfox\Repository\Groups;
use Arimac\Sigfox\Repository\Profiles;
use Arimac\Sigfox\Repository\Tiles;
use Arimac\Sigfox\Repository\Users;
/**
 * Client for sigfox API
 */
class Sigfox
{
    /**
     * @return ApiUsers
     */
    public function apiUsers() : ApiUsers
    {
        return new ApiUsers($this->client);
    }
    /**
     * @return ContractInfos
     */
    public function contractInfos() : ContractInfos
    {
        return new ContractInfos($this->client);
    }
    /**
     * @return Coverages
     */
    public function coverages() : Coverages
    {
        return new Coverages($this->client);
    }
    /**
     * @return Devices
     */
    public function devices() : Devices
    {
        return new Devices($this->client);
    }
    /**
     * @return DeviceTypes
     */
    public function deviceTypes() : DeviceTypes
    {
        return new DeviceTypes($this->client);
    }
    /**
     * @return Groups
     */
    public function groups() : Groups
    {
        return new Groups($this->client);
    }
    /**
     * @return Profiles
     */
    public function profiles() : Profiles
    {
        return new Profiles($this->client);
    }
    /**
     * @return Tiles
     */
    public function tiles() : Tiles
    {
        return new Tiles($this->client);
    }
    /**
     * @return Users
     */
    public function users() : Users
    {
        return new Users($this->client);
    }
}