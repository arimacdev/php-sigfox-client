<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Validator\Rules\Child;
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
     * - {@see EthernetConnectivityForBs::STATE_ACTIVE}
     * - {@see EthernetConnectivityForBs::STATE_PASSIVE}
     * - {@see EthernetConnectivityForBs::STATE_PENDING}
     * - {@see EthernetConnectivityForBs::STATE_REJECTED}
     * - {@see EthernetConnectivityForBs::STATE_DELETING}
     *
     * @var int
     */
    protected ?int $state = null;
    /**
     * Synchronisation status of an ethernet connectivity configuration
     * 
     * - {@see EthernetConnectivityForBs::SYNC_STATUS_OK}
     * - {@see EthernetConnectivityForBs::SYNC_STATUS_TO_BE_SENT}
     * - {@see EthernetConnectivityForBs::SYNC_STATUS_SENT}
     *
     * @var int
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
    /**
     * Setter for id
     *
     * @param string $id The group's identifier
     *
     * @return static To use in method chains
     */
    public function setId(?string $id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return string The group's identifier
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * Setter for group
     *
     * @param MinGroup $group
     *
     * @return static To use in method chains
     */
    public function setGroup(?MinGroup $group)
    {
        $this->group = $group;
        return $this;
    }
    /**
     * Getter for group
     *
     * @return MinGroup
     */
    public function getGroup() : ?MinGroup
    {
        return $this->group;
    }
    /**
     * Setter for baseStation
     *
     * @param MinBaseStation $baseStation
     *
     * @return static To use in method chains
     */
    public function setBaseStation(?MinBaseStation $baseStation)
    {
        $this->baseStation = $baseStation;
        return $this;
    }
    /**
     * Getter for baseStation
     *
     * @return MinBaseStation
     */
    public function getBaseStation() : ?MinBaseStation
    {
        return $this->baseStation;
    }
    /**
     * Setter for state
     *
     * @param int $state State of an ethernet connectivity configuration
     *                   
     *                   - {@see EthernetConnectivityForBs::STATE_ACTIVE}
     *                   - {@see EthernetConnectivityForBs::STATE_PASSIVE}
     *                   - {@see EthernetConnectivityForBs::STATE_PENDING}
     *                   - {@see EthernetConnectivityForBs::STATE_REJECTED}
     *                   - {@see EthernetConnectivityForBs::STATE_DELETING}
     *                   
     *
     * @return static To use in method chains
     */
    public function setState(?int $state)
    {
        $this->state = $state;
        return $this;
    }
    /**
     * Getter for state
     *
     * @return int State of an ethernet connectivity configuration
     *             
     *             - {@see EthernetConnectivityForBs::STATE_ACTIVE}
     *             - {@see EthernetConnectivityForBs::STATE_PASSIVE}
     *             - {@see EthernetConnectivityForBs::STATE_PENDING}
     *             - {@see EthernetConnectivityForBs::STATE_REJECTED}
     *             - {@see EthernetConnectivityForBs::STATE_DELETING}
     *             
     */
    public function getState() : ?int
    {
        return $this->state;
    }
    /**
     * Setter for syncStatus
     *
     * @param int $syncStatus Synchronisation status of an ethernet connectivity configuration
     *                        
     *                        - {@see EthernetConnectivityForBs::SYNC_STATUS_OK}
     *                        - {@see EthernetConnectivityForBs::SYNC_STATUS_TO_BE_SENT}
     *                        - {@see EthernetConnectivityForBs::SYNC_STATUS_SENT}
     *                        
     *
     * @return static To use in method chains
     */
    public function setSyncStatus(?int $syncStatus)
    {
        $this->syncStatus = $syncStatus;
        return $this;
    }
    /**
     * Getter for syncStatus
     *
     * @return int Synchronisation status of an ethernet connectivity configuration
     *             
     *             - {@see EthernetConnectivityForBs::SYNC_STATUS_OK}
     *             - {@see EthernetConnectivityForBs::SYNC_STATUS_TO_BE_SENT}
     *             - {@see EthernetConnectivityForBs::SYNC_STATUS_SENT}
     *             
     */
    public function getSyncStatus() : ?int
    {
        return $this->syncStatus;
    }
    /**
     * Setter for actions
     *
     * @param string[] $actions
     *
     * @return static To use in method chains
     */
    public function setActions(?array $actions)
    {
        $this->actions = $actions;
        return $this;
    }
    /**
     * Getter for actions
     *
     * @return string[]
     */
    public function getActions() : ?array
    {
        return $this->actions;
    }
    /**
     * Setter for resources
     *
     * @param string[] $resources
     *
     * @return static To use in method chains
     */
    public function setResources(?array $resources)
    {
        $this->resources = $resources;
        return $this;
    }
    /**
     * Getter for resources
     *
     * @return string[]
     */
    public function getResources() : ?array
    {
        return $this->resources;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('id' => new PrimitiveSerializer('string'), 'group' => new ClassSerializer(MinGroup::class), 'baseStation' => new ClassSerializer(MinBaseStation::class), 'state' => new PrimitiveSerializer('int'), 'syncStatus' => new PrimitiveSerializer('int'), 'actions' => new ArraySerializer(new PrimitiveSerializer('string')), 'resources' => new ArraySerializer(new PrimitiveSerializer('string')));
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
        $rules = array('group' => array(new Child()), 'baseStation' => array(new Child()));
        $rules = array_merge($rules, parent::getValidationMetaData());
        return $rules;
    }
}