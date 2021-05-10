<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
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
     * list of base station ids (Comma-separated values in hexadecimal format) corresponding to the userRoles with
     * tap limited access granted
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
     * Setter for userRoles
     *
     * @param UserRolesItem[] $userRoles Defines the rights of the user
     *
     * @return self To use in method chains
     */
    public function setUserRoles(?array $userRoles) : self
    {
        $this->userRoles = $userRoles;
        return $this;
    }
    /**
     * Getter for userRoles
     *
     * @return UserRolesItem[] Defines the rights of the user
     */
    public function getUserRoles() : array
    {
        return $this->userRoles;
    }
    /**
     * Setter for baseStations
     *
     * @param string $baseStations list of base station ids (Comma-separated values in hexadecimal format)
     *                             corresponding to the userRoles with tap limited access granted
     *
     * @return self To use in method chains
     */
    public function setBaseStations(?string $baseStations) : self
    {
        $this->baseStations = $baseStations;
        return $this;
    }
    /**
     * Getter for baseStations
     *
     * @return string list of base station ids (Comma-separated values in hexadecimal format) corresponding to the
     *                userRoles with tap limited access granted
     */
    public function getBaseStations() : string
    {
        return $this->baseStations;
    }
    /**
     * Setter for maintenances
     *
     * @param string $maintenances list of maintenance ids corresponding to the userRoles with site limited access
     *                             granted
     *
     * @return self To use in method chains
     */
    public function setMaintenances(?string $maintenances) : self
    {
        $this->maintenances = $maintenances;
        return $this;
    }
    /**
     * Getter for maintenances
     *
     * @return string list of maintenance ids corresponding to the userRoles with site limited access granted
     */
    public function getMaintenances() : string
    {
        return $this->maintenances;
    }
}