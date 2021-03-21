<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonUser;
use Arimac\Sigfox\Definition\UserUpdate\UserRolesItem;
/**
 * User information to be updated
 */
class UserUpdate extends CommonUser
{
    /**
     * Defines the rights of the user
     *
     * @var UserRolesItem[]
     */
    protected ?array $userRoles = null;
    /**
     * list of base station ids (Comma-separated values in hexadecimal format) corresponding to the userRoles with tap limited access granted
     *
     * @var string
     */
    protected ?string $baseStations = null;
    /**
     * list of maintenance ids corresponding to the userRoles with site limited access granted
     *
     * @var string
     */
    protected ?string $maintenances = null;
    /**
     * @param UserRolesItem[] $userRoles Defines the rights of the user
     */
    function setUserRoles(?array $userRoles)
    {
        $this->userRoles = $userRoles;
    }
    /**
     * @return UserRolesItem[] Defines the rights of the user
     */
    function getUserRoles() : ?array
    {
        return $this->userRoles;
    }
    /**
     * @param string $baseStations list of base station ids (Comma-separated values in hexadecimal format) corresponding to the userRoles with tap limited access granted
     */
    function setBaseStations(?string $baseStations)
    {
        $this->baseStations = $baseStations;
    }
    /**
     * @return string list of base station ids (Comma-separated values in hexadecimal format) corresponding to the userRoles with tap limited access granted
     */
    function getBaseStations() : ?string
    {
        return $this->baseStations;
    }
    /**
     * @param string $maintenances list of maintenance ids corresponding to the userRoles with site limited access granted
     */
    function setMaintenances(?string $maintenances)
    {
        $this->maintenances = $maintenances;
    }
    /**
     * @return string list of maintenance ids corresponding to the userRoles with site limited access granted
     */
    function getMaintenances() : ?string
    {
        return $this->maintenances;
    }
}