<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\CommonContractInfo\OptionsItem;
/**
 * Defines a contract common properties
 */
class CommonContractInfo extends Definition
{
    /**
     * The contract name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * The activation end time (in milliseconds) of the contract. 0 means no activation time limit.
     *
     * @var int
     */
    protected ?int $activationEndTime = null;
    /**
     * The end time (in milliseconds) of the communication. 0 means no communication time limit.
     *
     * @var int
     */
    protected ?int $communicationEndTime = null;
    /**
     * True if the contract info is bidirectional.
     *
     * @var bool
     */
    protected ?bool $bidir = null;
    /**
     * True if all downlinks are high priority.
     *
     * @var bool
     */
    protected ?bool $highPriorityDownlink = null;
    /**
     * The maximum number of uplink frames.
     *
     * @var int
     */
    protected ?int $maxUplinkFrames = null;
    /**
     * The maximum number of downlink frames.
     *
     * @var int
     */
    protected ?int $maxDownlinkFrames = null;
    /**
     * The maximum number of tokens for this contract. Either 0 (unlimited) or a positive number.
     *
     * @var int
     */
    protected ?int $maxTokens = null;
    /**
     * True if automatic renewal is allowed.
     *
     * @var bool
     */
    protected ?bool $automaticRenewal = null;
    /**
     * The renewal duration in months.
     *
     * @var int
     */
    protected ?int $renewalDuration = null;
    /**
     * The activated premium options. Given options will be merged with existing options in contract. In order to
     * delete a single option use "/{id}/options" API.
     *
     * @var OptionsItem[]
     */
    protected ?array $options = null;
    /**
     * Setter for name
     *
     * @param string $name The contract name
     *
     * @return self To use in method chains
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Getter for name
     *
     * @return string The contract name
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Setter for activationEndTime
     *
     * @param int $activationEndTime The activation end time (in milliseconds) of the contract. 0 means no activation
     *                               time limit.
     *
     * @return self To use in method chains
     */
    public function setActivationEndTime(?int $activationEndTime) : self
    {
        $this->activationEndTime = $activationEndTime;
        return $this;
    }
    /**
     * Getter for activationEndTime
     *
     * @return int The activation end time (in milliseconds) of the contract. 0 means no activation time limit.
     */
    public function getActivationEndTime() : int
    {
        return $this->activationEndTime;
    }
    /**
     * Setter for communicationEndTime
     *
     * @param int $communicationEndTime The end time (in milliseconds) of the communication. 0 means no communication
     *                                  time limit.
     *
     * @return self To use in method chains
     */
    public function setCommunicationEndTime(?int $communicationEndTime) : self
    {
        $this->communicationEndTime = $communicationEndTime;
        return $this;
    }
    /**
     * Getter for communicationEndTime
     *
     * @return int The end time (in milliseconds) of the communication. 0 means no communication time limit.
     */
    public function getCommunicationEndTime() : int
    {
        return $this->communicationEndTime;
    }
    /**
     * Setter for bidir
     *
     * @param bool $bidir True if the contract info is bidirectional.
     *
     * @return self To use in method chains
     */
    public function setBidir(?bool $bidir) : self
    {
        $this->bidir = $bidir;
        return $this;
    }
    /**
     * Getter for bidir
     *
     * @return bool True if the contract info is bidirectional.
     */
    public function getBidir() : bool
    {
        return $this->bidir;
    }
    /**
     * Setter for highPriorityDownlink
     *
     * @param bool $highPriorityDownlink True if all downlinks are high priority.
     *
     * @return self To use in method chains
     */
    public function setHighPriorityDownlink(?bool $highPriorityDownlink) : self
    {
        $this->highPriorityDownlink = $highPriorityDownlink;
        return $this;
    }
    /**
     * Getter for highPriorityDownlink
     *
     * @return bool True if all downlinks are high priority.
     */
    public function getHighPriorityDownlink() : bool
    {
        return $this->highPriorityDownlink;
    }
    /**
     * Setter for maxUplinkFrames
     *
     * @param int $maxUplinkFrames The maximum number of uplink frames.
     *
     * @return self To use in method chains
     */
    public function setMaxUplinkFrames(?int $maxUplinkFrames) : self
    {
        $this->maxUplinkFrames = $maxUplinkFrames;
        return $this;
    }
    /**
     * Getter for maxUplinkFrames
     *
     * @return int The maximum number of uplink frames.
     */
    public function getMaxUplinkFrames() : int
    {
        return $this->maxUplinkFrames;
    }
    /**
     * Setter for maxDownlinkFrames
     *
     * @param int $maxDownlinkFrames The maximum number of downlink frames.
     *
     * @return self To use in method chains
     */
    public function setMaxDownlinkFrames(?int $maxDownlinkFrames) : self
    {
        $this->maxDownlinkFrames = $maxDownlinkFrames;
        return $this;
    }
    /**
     * Getter for maxDownlinkFrames
     *
     * @return int The maximum number of downlink frames.
     */
    public function getMaxDownlinkFrames() : int
    {
        return $this->maxDownlinkFrames;
    }
    /**
     * Setter for maxTokens
     *
     * @param int $maxTokens The maximum number of tokens for this contract. Either 0 (unlimited) or a positive
     *                       number.
     *
     * @return self To use in method chains
     */
    public function setMaxTokens(?int $maxTokens) : self
    {
        $this->maxTokens = $maxTokens;
        return $this;
    }
    /**
     * Getter for maxTokens
     *
     * @return int The maximum number of tokens for this contract. Either 0 (unlimited) or a positive number.
     */
    public function getMaxTokens() : int
    {
        return $this->maxTokens;
    }
    /**
     * Setter for automaticRenewal
     *
     * @param bool $automaticRenewal True if automatic renewal is allowed.
     *
     * @return self To use in method chains
     */
    public function setAutomaticRenewal(?bool $automaticRenewal) : self
    {
        $this->automaticRenewal = $automaticRenewal;
        return $this;
    }
    /**
     * Getter for automaticRenewal
     *
     * @return bool True if automatic renewal is allowed.
     */
    public function getAutomaticRenewal() : bool
    {
        return $this->automaticRenewal;
    }
    /**
     * Setter for renewalDuration
     *
     * @param int $renewalDuration The renewal duration in months.
     *
     * @return self To use in method chains
     */
    public function setRenewalDuration(?int $renewalDuration) : self
    {
        $this->renewalDuration = $renewalDuration;
        return $this;
    }
    /**
     * Getter for renewalDuration
     *
     * @return int The renewal duration in months.
     */
    public function getRenewalDuration() : int
    {
        return $this->renewalDuration;
    }
    /**
     * Setter for options
     *
     * @param OptionsItem[] $options The activated premium options. Given options will be merged with existing
     *                               options in contract. In order to delete a single option use "/{id}/options" API.
     *
     * @return self To use in method chains
     */
    public function setOptions(?array $options) : self
    {
        $this->options = $options;
        return $this;
    }
    /**
     * Getter for options
     *
     * @return OptionsItem[] The activated premium options. Given options will be merged with existing options in
     *                       contract. In order to delete a single option use "/{id}/options" API.
     */
    public function getOptions() : array
    {
        return $this->options;
    }
}