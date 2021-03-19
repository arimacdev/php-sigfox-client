<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonUser;
/**
 * User information to be updated
 */
class UserUpdate extends CommonUser
{
    /**
     * Defines the rights of the user
     *
     * @var array
     */
    protected array $userRoles;
    /**
     * list of base station ids (Comma-separated values in hexadecimal format) corresponding to the userRoles with tap limited access granted
     *
     * @var string
     */
    protected string $baseStations;
    /**
     * list of maintenance ids corresponding to the userRoles with site limited access granted
     *
     * @var string
     */
    protected string $maintenances;
}