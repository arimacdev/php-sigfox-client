<?php

namespace Arimac\Sigfox\Definition;

/**
 * Defines a contract common properties
 */
class CommonContractInfo
{
    /**
     * The contract name
     */
    protected string $name;
    /**
     * The activation end time (in milliseconds) of the contract. 0 means no activation time limit.
     */
    protected int $activationEndTime;
    /**
     * The end time (in milliseconds) of the communication. 0 means no communication time limit.
     */
    protected int $communicationEndTime;
    /**
     * True if the contract info is bidirectional.
     */
    protected bool $bidir;
    /**
     * True if all downlinks are high priority.
     */
    protected bool $highPriorityDownlink;
    /**
     * The maximum number of uplink frames.
     */
    protected int $maxUplinkFrames;
    /**
     * The maximum number of downlink frames.
     */
    protected int $maxDownlinkFrames;
    /**
     * The maximum number of tokens for this contract. Either 0 (unlimited) or a positive number.
     */
    protected int $maxTokens;
    /**
     * True if automatic renewal is allowed.
     */
    protected bool $automaticRenewal;
    /**
     * The renewal duration in months.
     */
    protected int $renewalDuration;
    /**
     * The activated premium options. Given options will be merged with existing options in contract. In order to delete a single option use "/{id}/options" API.
     */
    protected array $options;
}