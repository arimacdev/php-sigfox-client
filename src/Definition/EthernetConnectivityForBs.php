<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\EthernetConnectivityBase;
use Arimac\Sigfox\Definition\MinGroup;
use Arimac\Sigfox\Definition\MinBaseStation;
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
    protected ?string $id = null;
    /** @var MinGroup */
    protected ?MinGroup $group = null;
    /** @var MinBaseStation */
    protected ?MinBaseStation $baseStation = null;
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
    protected ?int $state = null;
    /**
     * Synchronisation status of an ethernet connectivity configuration
     * - `EthernetConnectivityForBs::SYNC_STATUS_OK`
     * - `EthernetConnectivityForBs::SYNC_STATUS_TO_BE_SENT`
     * - `EthernetConnectivityForBs::SYNC_STATUS_SENT`
     *
     * @var int
     */
    protected ?int $syncStatus = null;
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
     * @param int $state State of an ethernet connectivity configuration
     * - `EthernetConnectivityForBs::STATE_ACTIVE`
     * - `EthernetConnectivityForBs::STATE_PASSIVE`
     * - `EthernetConnectivityForBs::STATE_PENDING`
     * - `EthernetConnectivityForBs::STATE_REJECTED`
     * - `EthernetConnectivityForBs::STATE_DELETING`
     */
    function setState(?int $state)
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
    function getState() : ?int
    {
        return $this->state;
    }
    /**
     * @param int $syncStatus Synchronisation status of an ethernet connectivity configuration
     * - `EthernetConnectivityForBs::SYNC_STATUS_OK`
     * - `EthernetConnectivityForBs::SYNC_STATUS_TO_BE_SENT`
     * - `EthernetConnectivityForBs::SYNC_STATUS_SENT`
     */
    function setSyncStatus(?int $syncStatus)
    {
        $this->syncStatus = $syncStatus;
    }
    /**
     * @return int Synchronisation status of an ethernet connectivity configuration
     * - `EthernetConnectivityForBs::SYNC_STATUS_OK`
     * - `EthernetConnectivityForBs::SYNC_STATUS_TO_BE_SENT`
     * - `EthernetConnectivityForBs::SYNC_STATUS_SENT`
     */
    function getSyncStatus() : ?int
    {
        return $this->syncStatus;
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