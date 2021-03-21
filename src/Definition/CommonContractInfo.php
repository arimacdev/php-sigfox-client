<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonContractInfo\OptionsItem;
use Arimac\Sigfox\Definition;
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
     * The activated premium options. Given options will be merged with existing options in contract. In order to delete a single option use "/{id}/options" API.
     *
     * @var OptionsItem[]
     */
    protected ?array $options = null;
    /**
     * @param string $name The contract name
     */
    function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The contract name
     */
    function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @param int $activationEndTime The activation end time (in milliseconds) of the contract. 0 means no activation time limit.
     */
    function setActivationEndTime(?int $activationEndTime)
    {
        $this->activationEndTime = $activationEndTime;
    }
    /**
     * @return int The activation end time (in milliseconds) of the contract. 0 means no activation time limit.
     */
    function getActivationEndTime() : ?int
    {
        return $this->activationEndTime;
    }
    /**
     * @param int $communicationEndTime The end time (in milliseconds) of the communication. 0 means no communication time limit.
     */
    function setCommunicationEndTime(?int $communicationEndTime)
    {
        $this->communicationEndTime = $communicationEndTime;
    }
    /**
     * @return int The end time (in milliseconds) of the communication. 0 means no communication time limit.
     */
    function getCommunicationEndTime() : ?int
    {
        return $this->communicationEndTime;
    }
    /**
     * @param bool $bidir True if the contract info is bidirectional.
     */
    function setBidir(?bool $bidir)
    {
        $this->bidir = $bidir;
    }
    /**
     * @return bool True if the contract info is bidirectional.
     */
    function getBidir() : ?bool
    {
        return $this->bidir;
    }
    /**
     * @param bool $highPriorityDownlink True if all downlinks are high priority.
     */
    function setHighPriorityDownlink(?bool $highPriorityDownlink)
    {
        $this->highPriorityDownlink = $highPriorityDownlink;
    }
    /**
     * @return bool True if all downlinks are high priority.
     */
    function getHighPriorityDownlink() : ?bool
    {
        return $this->highPriorityDownlink;
    }
    /**
     * @param int $maxUplinkFrames The maximum number of uplink frames.
     */
    function setMaxUplinkFrames(?int $maxUplinkFrames)
    {
        $this->maxUplinkFrames = $maxUplinkFrames;
    }
    /**
     * @return int The maximum number of uplink frames.
     */
    function getMaxUplinkFrames() : ?int
    {
        return $this->maxUplinkFrames;
    }
    /**
     * @param int $maxDownlinkFrames The maximum number of downlink frames.
     */
    function setMaxDownlinkFrames(?int $maxDownlinkFrames)
    {
        $this->maxDownlinkFrames = $maxDownlinkFrames;
    }
    /**
     * @return int The maximum number of downlink frames.
     */
    function getMaxDownlinkFrames() : ?int
    {
        return $this->maxDownlinkFrames;
    }
    /**
     * @param int $maxTokens The maximum number of tokens for this contract. Either 0 (unlimited) or a positive number.
     */
    function setMaxTokens(?int $maxTokens)
    {
        $this->maxTokens = $maxTokens;
    }
    /**
     * @return int The maximum number of tokens for this contract. Either 0 (unlimited) or a positive number.
     */
    function getMaxTokens() : ?int
    {
        return $this->maxTokens;
    }
    /**
     * @param bool $automaticRenewal True if automatic renewal is allowed.
     */
    function setAutomaticRenewal(?bool $automaticRenewal)
    {
        $this->automaticRenewal = $automaticRenewal;
    }
    /**
     * @return bool True if automatic renewal is allowed.
     */
    function getAutomaticRenewal() : ?bool
    {
        return $this->automaticRenewal;
    }
    /**
     * @param int $renewalDuration The renewal duration in months.
     */
    function setRenewalDuration(?int $renewalDuration)
    {
        $this->renewalDuration = $renewalDuration;
    }
    /**
     * @return int The renewal duration in months.
     */
    function getRenewalDuration() : ?int
    {
        return $this->renewalDuration;
    }
    /**
     * @param OptionsItem[] $options The activated premium options. Given options will be merged with existing options in contract. In order to delete a single option use "/{id}/options" API.
     */
    function setOptions(?array $options)
    {
        $this->options = $options;
    }
    /**
     * @return OptionsItem[] The activated premium options. Given options will be merged with existing options in contract. In order to delete a single option use "/{id}/options" API.
     */
    function getOptions() : ?array
    {
        return $this->options;
    }
}