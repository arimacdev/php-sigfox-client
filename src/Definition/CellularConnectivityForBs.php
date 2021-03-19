<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CellularConnectivityBase;
use Arimac\Sigfox\Definition\MinGroup;
use Arimac\Sigfox\Definition\MinBaseStation;
use Arimac\Sigfox\Definition\Actions;
use Arimac\Sigfox\Definition\Resources;
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
    protected string $id;
    /** @var MinGroup */
    protected MinGroup $group;
    /** @var MinBaseStation */
    protected MinBaseStation $baseStation;
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
    protected int $state;
    /**
     * Synchronisation status of a cellular connectivity configuration
     * - `CellularConnectivityForBs::SYNC_STATUS_OK`
     * - `CellularConnectivityForBs::SYNC_STATUS_TO_BE_SENT`
     * - `CellularConnectivityForBs::SYNC_STATUS_SENT`
     *
     * @var int
     */
    protected int $syncStatus;
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
    protected int $lastSwitchErrorStatus;
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
    protected int $lastSetconfErrorStatus;
    /** @var Actions */
    protected Actions $actions;
    /** @var Resources */
    protected Resources $resources;
}