<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\EthernetConnectivityBase;
use Arimac\Sigfox\Definition\MinGroup;
use Arimac\Sigfox\Definition\MinBaseStation;
use Arimac\Sigfox\Definition\Actions;
use Arimac\Sigfox\Definition\Resources;
/**
 * Ethernet connectivity configuration for a base station.
 */
class EthernetConnectivityForBs extends EthernetConnectivityBase
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
     * State of an ethernet connectivity configuration
     * - `EthernetConnectivityForBs::STATE_ACTIVE`
     * - `EthernetConnectivityForBs::STATE_PASSIVE`
     * - `EthernetConnectivityForBs::STATE_PENDING`
     * - `EthernetConnectivityForBs::STATE_REJECTED`
     * - `EthernetConnectivityForBs::STATE_DELETING`
     *
     * @var int
     */
    protected int $state;
    /**
     * Synchronisation status of an ethernet connectivity configuration
     * - `EthernetConnectivityForBs::SYNC_STATUS_OK`
     * - `EthernetConnectivityForBs::SYNC_STATUS_TO_BE_SENT`
     * - `EthernetConnectivityForBs::SYNC_STATUS_SENT`
     *
     * @var int
     */
    protected int $syncStatus;
    /** @var Actions */
    protected Actions $actions;
    /** @var Resources */
    protected Resources $resources;
    /**
     * @param string id The group's identifier
     */
    function setId(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The group's identifier
     */
    function getId() : string
    {
        return $this->id;
    }
    /**
     * @param MinGroup group
     */
    function setGroup(MinGroup $group)
    {
        $this->group = $group;
    }
    /**
     * @return MinGroup group
     */
    function getGroup() : MinGroup
    {
        return $this->group;
    }
    /**
     * @param MinBaseStation baseStation
     */
    function setBaseStation(MinBaseStation $baseStation)
    {
        $this->baseStation = $baseStation;
    }
    /**
     * @return MinBaseStation baseStation
     */
    function getBaseStation() : MinBaseStation
    {
        return $this->baseStation;
    }
    /**
     * @param int state State of an ethernet connectivity configuration
     * - `EthernetConnectivityForBs::STATE_ACTIVE`
     * - `EthernetConnectivityForBs::STATE_PASSIVE`
     * - `EthernetConnectivityForBs::STATE_PENDING`
     * - `EthernetConnectivityForBs::STATE_REJECTED`
     * - `EthernetConnectivityForBs::STATE_DELETING`
     */
    function setState(int $state)
    {
        $this->state = $state;
    }
    /**
     * @return int State of an ethernet connectivity configuration
     * - `EthernetConnectivityForBs::STATE_ACTIVE`
     * - `EthernetConnectivityForBs::STATE_PASSIVE`
     * - `EthernetConnectivityForBs::STATE_PENDING`
     * - `EthernetConnectivityForBs::STATE_REJECTED`
     * - `EthernetConnectivityForBs::STATE_DELETING`
     */
    function getState() : int
    {
        return $this->state;
    }
    /**
     * @param int syncStatus Synchronisation status of an ethernet connectivity configuration
     * - `EthernetConnectivityForBs::SYNC_STATUS_OK`
     * - `EthernetConnectivityForBs::SYNC_STATUS_TO_BE_SENT`
     * - `EthernetConnectivityForBs::SYNC_STATUS_SENT`
     */
    function setSyncStatus(int $syncStatus)
    {
        $this->syncStatus = $syncStatus;
    }
    /**
     * @return int Synchronisation status of an ethernet connectivity configuration
     * - `EthernetConnectivityForBs::SYNC_STATUS_OK`
     * - `EthernetConnectivityForBs::SYNC_STATUS_TO_BE_SENT`
     * - `EthernetConnectivityForBs::SYNC_STATUS_SENT`
     */
    function getSyncStatus() : int
    {
        return $this->syncStatus;
    }
    /**
     * @param Actions actions
     */
    function setActions(Actions $actions)
    {
        $this->actions = $actions;
    }
    /**
     * @return Actions actions
     */
    function getActions() : Actions
    {
        return $this->actions;
    }
    /**
     * @param Resources resources
     */
    function setResources(Resources $resources)
    {
        $this->resources = $resources;
    }
    /**
     * @return Resources resources
     */
    function getResources() : Resources
    {
        return $this->resources;
    }
}