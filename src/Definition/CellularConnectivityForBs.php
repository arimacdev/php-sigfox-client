<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CellularConnectivityBase;
use Arimac\Sigfox\Definition\MinGroup;
use Arimac\Sigfox\Definition\MinBaseStation;
/**
 * Cellular connectivity configuration for a base station.
 */
class CellularConnectivityForBs extends CellularConnectivityBase
{
    /** ACTIVE */
    public const STATE_ACTIVE = 0;
    /** PASSIVE */
    public const STATE_PASSIVE = 1;
    /** PENDING (new configuration to synchronize with the base station) */
    public const STATE_PENDING = 2;
    /** REJECTED */
    public const STATE_REJECTED = 3;
    /** DELETING */
    public const STATE_DELETING = 4;
    /** OK (the conf is synchronized) */
    public const SYNC_STATUS_OK = 0;
    /** TO_BE_SENT (the conf has to be synchronized) */
    public const SYNC_STATUS_TO_BE_SENT = 1;
    /** SENT (the conf is currently send to the base station) */
    public const SYNC_STATUS_SENT = 2;
    /** SUCCESS */
    public const LAST_SWITCH_ERROR_STATUS_SUCCESS = 0;
    /** BAD_GSM_PIN */
    public const LAST_SWITCH_ERROR_STATUS_BAD_GSM_PIN = 1;
    /** TOO_MANY_PIN_TRIES */
    public const LAST_SWITCH_ERROR_STATUS_TOO_MANY_PIN_TRIES = 2;
    /** VPN_ESTABLISHMENT_IMPOSSIBLE */
    public const LAST_SWITCH_ERROR_STATUS_VPN_ESTABLISHMENT_IMPOSSIBLE = 3;
    /** NETWORK_REJECTED */
    public const LAST_SWITCH_ERROR_STATUS_NETWORK_REJECTED = 4;
    /** UNKNOWN */
    public const LAST_SWITCH_ERROR_STATUS_UNKNOWN = 5;
    /** SUCCESS */
    public const LAST_SETCONF_ERROR_STATUS_SUCCESS = 0;
    /** BAD_FORMAT */
    public const LAST_SETCONF_ERROR_STATUS_BAD_FORMAT = 1;
    /** EXISTING_CONFIG */
    public const LAST_SETCONF_ERROR_STATUS_EXISTING_CONFIG = 2;
    /** TOO_MANY_CONFIG */
    public const LAST_SETCONF_ERROR_STATUS_TOO_MANY_CONFIG = 3;
    /** CONFIG_ID_CONFLICT */
    public const LAST_SETCONF_ERROR_STATUS_CONFIG_ID_CONFLICT = 4;
    /** UNKNOWN */
    public const LAST_SETCONF_ERROR_STATUS_UNKNOWN = 5;
    /**
     * The group's identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /** @var MinGroup */
    protected ?MinGroup $group = null;
    /** @var MinBaseStation */
    protected ?MinBaseStation $baseStation = null;
    /**
     * State of a cellular connectivity configuration
     * - `CellularConnectivityForBs::STATE_ACTIVE`
     * - `CellularConnectivityForBs::STATE_PASSIVE`
     * - `CellularConnectivityForBs::STATE_PENDING`
     * - `CellularConnectivityForBs::STATE_REJECTED`
     * - `CellularConnectivityForBs::STATE_DELETING`
     *
     * @var int
     */
    protected ?int $state = null;
    /**
     * Synchronisation status of a cellular connectivity configuration
     * - `CellularConnectivityForBs::SYNC_STATUS_OK`
     * - `CellularConnectivityForBs::SYNC_STATUS_TO_BE_SENT`
     * - `CellularConnectivityForBs::SYNC_STATUS_SENT`
     *
     * @var int
     */
    protected ?int $syncStatus = null;
    /**
     * Error status returned after a connectivity config switch
     * - `CellularConnectivityForBs::LAST_SWITCH_ERROR_STATUS_SUCCESS`
     * - `CellularConnectivityForBs::LAST_SWITCH_ERROR_STATUS_BAD_GSM_PIN`
     * - `CellularConnectivityForBs::LAST_SWITCH_ERROR_STATUS_TOO_MANY_PIN_TRIES`
     * - `CellularConnectivityForBs::LAST_SWITCH_ERROR_STATUS_VPN_ESTABLISHMENT_IMPOSSIBLE`
     * - `CellularConnectivityForBs::LAST_SWITCH_ERROR_STATUS_NETWORK_REJECTED`
     * - `CellularConnectivityForBs::LAST_SWITCH_ERROR_STATUS_UNKNOWN`
     *
     * @var int
     */
    protected ?int $lastSwitchErrorStatus = null;
    /**
     * Error status returned after a connectivity config creation/edition
     * - `CellularConnectivityForBs::LAST_SETCONF_ERROR_STATUS_SUCCESS`
     * - `CellularConnectivityForBs::LAST_SETCONF_ERROR_STATUS_BAD_FORMAT`
     * - `CellularConnectivityForBs::LAST_SETCONF_ERROR_STATUS_EXISTING_CONFIG`
     * - `CellularConnectivityForBs::LAST_SETCONF_ERROR_STATUS_TOO_MANY_CONFIG`
     * - `CellularConnectivityForBs::LAST_SETCONF_ERROR_STATUS_CONFIG_ID_CONFLICT`
     * - `CellularConnectivityForBs::LAST_SETCONF_ERROR_STATUS_UNKNOWN`
     *
     * @var int
     */
    protected ?int $lastSetconfErrorStatus = null;
    /** @var string[] */
    protected ?array $actions = null;
    /** @var string[] */
    protected ?array $resources = null;
    protected $objects = array('group' => '\\Arimac\\Sigfox\\Definition\\MinGroup', 'baseStation' => '\\Arimac\\Sigfox\\Definition\\MinBaseStation');
    /**
     * @param string $id The group's identifier
     */
    function setId(?string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The group's identifier
     */
    function getId() : ?string
    {
        return $this->id;
    }
    /**
     * @param MinGroup group
     */
    function setGroup(?MinGroup $group)
    {
        $this->group = $group;
    }
    /**
     * @return MinGroup group
     */
    function getGroup() : ?MinGroup
    {
        return $this->group;
    }
    /**
     * @param MinBaseStation baseStation
     */
    function setBaseStation(?MinBaseStation $baseStation)
    {
        $this->baseStation = $baseStation;
    }
    /**
     * @return MinBaseStation baseStation
     */
    function getBaseStation() : ?MinBaseStation
    {
        return $this->baseStation;
    }
    /**
     * @param int $state State of a cellular connectivity configuration
     * - `CellularConnectivityForBs::STATE_ACTIVE`
     * - `CellularConnectivityForBs::STATE_PASSIVE`
     * - `CellularConnectivityForBs::STATE_PENDING`
     * - `CellularConnectivityForBs::STATE_REJECTED`
     * - `CellularConnectivityForBs::STATE_DELETING`
     */
    function setState(?int $state)
    {
        $this->state = $state;
    }
    /**
     * @return int State of a cellular connectivity configuration
     * - `CellularConnectivityForBs::STATE_ACTIVE`
     * - `CellularConnectivityForBs::STATE_PASSIVE`
     * - `CellularConnectivityForBs::STATE_PENDING`
     * - `CellularConnectivityForBs::STATE_REJECTED`
     * - `CellularConnectivityForBs::STATE_DELETING`
     */
    function getState() : ?int
    {
        return $this->state;
    }
    /**
     * @param int $syncStatus Synchronisation status of a cellular connectivity configuration
     * - `CellularConnectivityForBs::SYNC_STATUS_OK`
     * - `CellularConnectivityForBs::SYNC_STATUS_TO_BE_SENT`
     * - `CellularConnectivityForBs::SYNC_STATUS_SENT`
     */
    function setSyncStatus(?int $syncStatus)
    {
        $this->syncStatus = $syncStatus;
    }
    /**
     * @return int Synchronisation status of a cellular connectivity configuration
     * - `CellularConnectivityForBs::SYNC_STATUS_OK`
     * - `CellularConnectivityForBs::SYNC_STATUS_TO_BE_SENT`
     * - `CellularConnectivityForBs::SYNC_STATUS_SENT`
     */
    function getSyncStatus() : ?int
    {
        return $this->syncStatus;
    }
    /**
     * @param int $lastSwitchErrorStatus Error status returned after a connectivity config switch
     * - `CellularConnectivityForBs::LAST_SWITCH_ERROR_STATUS_SUCCESS`
     * - `CellularConnectivityForBs::LAST_SWITCH_ERROR_STATUS_BAD_GSM_PIN`
     * - `CellularConnectivityForBs::LAST_SWITCH_ERROR_STATUS_TOO_MANY_PIN_TRIES`
     * - `CellularConnectivityForBs::LAST_SWITCH_ERROR_STATUS_VPN_ESTABLISHMENT_IMPOSSIBLE`
     * - `CellularConnectivityForBs::LAST_SWITCH_ERROR_STATUS_NETWORK_REJECTED`
     * - `CellularConnectivityForBs::LAST_SWITCH_ERROR_STATUS_UNKNOWN`
     */
    function setLastSwitchErrorStatus(?int $lastSwitchErrorStatus)
    {
        $this->lastSwitchErrorStatus = $lastSwitchErrorStatus;
    }
    /**
     * @return int Error status returned after a connectivity config switch
     * - `CellularConnectivityForBs::LAST_SWITCH_ERROR_STATUS_SUCCESS`
     * - `CellularConnectivityForBs::LAST_SWITCH_ERROR_STATUS_BAD_GSM_PIN`
     * - `CellularConnectivityForBs::LAST_SWITCH_ERROR_STATUS_TOO_MANY_PIN_TRIES`
     * - `CellularConnectivityForBs::LAST_SWITCH_ERROR_STATUS_VPN_ESTABLISHMENT_IMPOSSIBLE`
     * - `CellularConnectivityForBs::LAST_SWITCH_ERROR_STATUS_NETWORK_REJECTED`
     * - `CellularConnectivityForBs::LAST_SWITCH_ERROR_STATUS_UNKNOWN`
     */
    function getLastSwitchErrorStatus() : ?int
    {
        return $this->lastSwitchErrorStatus;
    }
    /**
     * @param int $lastSetconfErrorStatus Error status returned after a connectivity config creation/edition
     * - `CellularConnectivityForBs::LAST_SETCONF_ERROR_STATUS_SUCCESS`
     * - `CellularConnectivityForBs::LAST_SETCONF_ERROR_STATUS_BAD_FORMAT`
     * - `CellularConnectivityForBs::LAST_SETCONF_ERROR_STATUS_EXISTING_CONFIG`
     * - `CellularConnectivityForBs::LAST_SETCONF_ERROR_STATUS_TOO_MANY_CONFIG`
     * - `CellularConnectivityForBs::LAST_SETCONF_ERROR_STATUS_CONFIG_ID_CONFLICT`
     * - `CellularConnectivityForBs::LAST_SETCONF_ERROR_STATUS_UNKNOWN`
     */
    function setLastSetconfErrorStatus(?int $lastSetconfErrorStatus)
    {
        $this->lastSetconfErrorStatus = $lastSetconfErrorStatus;
    }
    /**
     * @return int Error status returned after a connectivity config creation/edition
     * - `CellularConnectivityForBs::LAST_SETCONF_ERROR_STATUS_SUCCESS`
     * - `CellularConnectivityForBs::LAST_SETCONF_ERROR_STATUS_BAD_FORMAT`
     * - `CellularConnectivityForBs::LAST_SETCONF_ERROR_STATUS_EXISTING_CONFIG`
     * - `CellularConnectivityForBs::LAST_SETCONF_ERROR_STATUS_TOO_MANY_CONFIG`
     * - `CellularConnectivityForBs::LAST_SETCONF_ERROR_STATUS_CONFIG_ID_CONFLICT`
     * - `CellularConnectivityForBs::LAST_SETCONF_ERROR_STATUS_UNKNOWN`
     */
    function getLastSetconfErrorStatus() : ?int
    {
        return $this->lastSetconfErrorStatus;
    }
    /**
     * @param string[] actions
     */
    function setActions(?array $actions)
    {
        $this->actions = $actions;
    }
    /**
     * @return string[] actions
     */
    function getActions() : ?array
    {
        return $this->actions;
    }
    /**
     * @param string[] resources
     */
    function setResources(?array $resources)
    {
        $this->resources = $resources;
    }
    /**
     * @return string[] resources
     */
    function getResources() : ?array
    {
        return $this->resources;
    }
}