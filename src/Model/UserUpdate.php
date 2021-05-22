<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model\UserUpdate\UserRolesItem;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\ChildSet;
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
     * @return static To use in method chains
     */
    public function setUserRoles(?array $userRoles)
    {
        $this->userRoles = $userRoles;
        return $this;
    }
    /**
     * Getter for userRoles
     *
     * @return UserRolesItem[] Defines the rights of the user
     */
    public function getUserRoles() : ?array
    {
        return $this->userRoles;
    }
    /**
     * Setter for baseStations
     *
     * @param string $baseStations list of base station ids (Comma-separated values in hexadecimal format)
     *                             corresponding to the userRoles with tap limited access granted
     *
     * @return static To use in method chains
     */
    public function setBaseStations(?string $baseStations)
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
    public function getBaseStations() : ?string
    {
        return $this->baseStations;
    }
    /**
     * Setter for maintenances
     *
     * @param string $maintenances list of maintenance ids corresponding to the userRoles with site limited access
     *                             granted
     *
     * @return static To use in method chains
     */
    public function setMaintenances(?string $maintenances)
    {
        $this->maintenances = $maintenances;
        return $this;
    }
    /**
     * Getter for maintenances
     *
     * @return string list of maintenance ids corresponding to the userRoles with site limited access granted
     */
    public function getMaintenances() : ?string
    {
        return $this->maintenances;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('userRoles' => new ArraySerializer(new ClassSerializer(UserRolesItem::class)), 'baseStations' => new PrimitiveSerializer('string'), 'maintenances' => new PrimitiveSerializer('string'));
        $serializers = array_merge($serializers, parent::getSerializeMetaData());
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('userRoles' => array(new ChildSet()));
        $rules = array_merge($rules, parent::getValidationMetaData());
        return $rules;
    }
}