<?php

namespace Arimac\Sigfox\Definition;

/**
 * Defines a contract common properties
 */
class CommonContractInfo
{
    /**
     * The contract name
     *
     * @var string
     */
    protected string $name;
    /**
     * The activation end time (in milliseconds) of the contract. 0 means no activation time limit.
     *
     * @var int
     */
    protected int $activationEndTime;
    /**
     * The end time (in milliseconds) of the communication. 0 means no communication time limit.
     *
     * @var int
     */
    protected int $communicationEndTime;
    /**
     * True if the contract info is bidirectional.
     *
     * @var bool
     */
    protected bool $bidir;
    /**
     * True if all downlinks are high priority.
     *
     * @var bool
     */
    protected bool $highPriorityDownlink;
    /**
     * The maximum number of uplink frames.
     *
     * @var int
     */
    protected int $maxUplinkFrames;
    /**
     * The maximum number of downlink frames.
     *
     * @var int
     */
    protected int $maxDownlinkFrames;
    /**
     * The maximum number of tokens for this contract. Either 0 (unlimited) or a positive number.
     *
     * @var int
     */
    protected int $maxTokens;
    /**
     * True if automatic renewal is allowed.
     *
     * @var bool
     */
    protected bool $automaticRenewal;
    /**
     * The renewal duration in months.
     *
     * @var int
     */
    protected int $renewalDuration;
    /**
     * The activated premium options. Given options will be merged with existing options in contract. In order to delete a single option use "/{id}/options" API.
     *
     * @var array
     */
    protected array $options;
}