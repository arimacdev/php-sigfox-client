<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
/**
 * Ethernet connectivity configuration for a base station.
 */
class EthernetConnectivityForBs extends EthernetConnectivityBase
{
    /**
     * ACTIVE
     */
    public const STATE_ACTIVE = 0;
    /**
     * PASSIVE
     */
    public const STATE_PASSIVE = 1;
    /**
     * PENDING (new configuration to synchronize with the base station)
     */
    public const STATE_PENDING = 2;
    /**
     * REJECTED
     */
    public const STATE_REJECTED = 3;
    /**
     * DELETING
     */
    public const STATE_DELETING = 4;
    /**
     * OK (the conf is synchronized)
     */
    public const SYNC_STATUS_OK = 0;
    /**
     * TO_BE_SENT (the conf has to be synchronized)
     */
    public const SYNC_STATUS_TO_BE_SENT = 1;
    /**
     * SENT (the conf is currently send to the base station)
     */
    public const SYNC_STATUS_SENT = 2;
    /**
     * The group's identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * @var MinGroup
     */
    protected ?MinGroup $group = null;
    /**
     * @var MinBaseStation
     */
    protected ?MinBaseStation $baseStation = null;
    /**
     * State of an ethernet connectivity configuration
     *
     * @var self::STATE_*
     */
    protected ?int $state = null;
    /**
     * Synchronisation status of an ethernet connectivity configuration
     *
     * @var self::SYNC_STATUS_*
     */
    protected ?int $syncStatus = null;
    /**
     * @var string[]
     */
    protected ?array $actions = null;
    /**
     * @var string[]
     */
    protected ?array $resources = null;
    protected $serialize = array('group' => MinGroup::class, 'baseStation' => MinBaseStation::class);
    /**
     * Setter for id
     *
     * @param string $id The group's identifier
     *
     * @return self To use in method chains
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return string The group's identifier
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Setter for group
     *
     * @param MinGroup $group
     *
     * @return self To use in method chains
     */
    public function setGroup(?MinGroup $group) : self
    {
        $this->group = $group;
        return $this;
    }
    /**
     * Getter for group
     *
     * @return MinGroup
     */
    public function getGroup() : MinGroup
    {
        return $this->group;
    }
    /**
     * Setter for baseStation
     *
     * @param MinBaseStation $baseStation
     *
     * @return self To use in method chains
     */
    public function setBaseStation(?MinBaseStation $baseStation) : self
    {
        $this->baseStation = $baseStation;
        return $this;
    }
    /**
     * Getter for baseStation
     *
     * @return MinBaseStation
     */
    public function getBaseStation() : MinBaseStation
    {
        return $this->baseStation;
    }
    /**
     * Setter for state
     *
     * @param self::STATE_* $state State of an ethernet connectivity configuration
     *
     * @return self To use in method chains
     */
    public function setState(?int $state) : self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * Getter for state
     *
     * @return self::STATE_* State of an ethernet connectivity configuration
     */
    public function getState() : int
    {
        return $this->state;
    }
    /**
     * Setter for syncStatus
     *
     * @param self::SYNC_STATUS_* $syncStatus Synchronisation status of an ethernet connectivity configuration
     *
     * @return self To use in method chains
     */
    public function setSyncStatus(?int $syncStatus) : self
    {
        $this->syncStatus = $syncStatus;
        return $this;
    }
    /**
     * Getter for syncStatus
     *
     * @return self::SYNC_STATUS_* Synchronisation status of an ethernet connectivity configuration
     */
    public function getSyncStatus() : int
    {
        return $this->syncStatus;
    }
    /**
     * Setter for actions
     *
     * @param string[] $actions
     *
     * @return self To use in method chains
     */
    public function setActions(?array $actions) : self
    {
        $this->actions = $actions;
        return $this;
    }
    /**
     * Getter for actions
     *
     * @return string[]
     */
    public function getActions() : array
    {
        return $this->actions;
    }
    /**
     * Setter for resources
     *
     * @param string[] $resources
     *
     * @return self To use in method chains
     */
    public function setResources(?array $resources) : self
    {
        $this->resources = $resources;
        return $this;
    }
    /**
     * Getter for resources
     *
     * @return string[]
     */
    public function getResources() : array
    {
        return $this->resources;
    }
}