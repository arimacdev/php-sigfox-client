<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonContractInfo;
use Arimac\Sigfox\Definition\MinGroup;
use Arimac\Sigfox\Definition\MinContractInfo;
use Arimac\Sigfox\Definition\MinGroup;
/**
 * Defines all the contract properties.
 */
class ContractInfo extends CommonContractInfo
{
    /**
     * The contract ID.
     *
     * @var string
     */
    protected string $id;
    /**
     * The contract external ID. It's used to identify the contract info in EDRs.
     *
     * @var string
     */
    protected string $contractId;
    /**
     * The ID of the user who created the contract in BSS.
     *
     * @var string
     */
    protected string $userId;
    /** @var MinGroup */
    protected MinGroup $group;
    /** @var MinContractInfo */
    protected MinContractInfo $order;
    /**
     * The pricing model used by this contract info. - 1 -> Pricing model version 1. - 2 -> Pricing model version 2. - 3 -> Pricing model version 3.
     *
     * @var int
     */
    protected int $pricingModel;
    /**
     * The user id of contract's creator
     *
     * @var string
     */
    protected string $createdBy;
    /**
     * Creation date of this contract (timestamp in milliseconds since Unix Epoch)
     *
     * @var int
     */
    protected int $lastEditionTime;
    /**
     * Creation date of this contract (timestamp in milliseconds since Unix Epoch)
     *
     * @var int
     */
    protected int $creationTime;
    /**
     * The user id of the contract last editor
     *
     * @var string
     */
    protected string $lastEditedBy;
    /**
     * The start time (in milliseconds) of the contract
     *
     * @var int
     */
    protected int $startTime;
    /**
     * The contract timezone name as a Java TimeZone ID ("full name" version only, like "America/Costa_Rica").
     *
     * @var string
     */
    protected string $timezone;
    /**
     * The contract info subscription plan. - 0 -> Free order - 1 -> Pay As You Grow (PAYG) - 2 -> Committed Volume Plan (CVP) - 3 -> Flexible Committed Volume Plan (CVP Flex)
     *
     * @var int
     */
    protected int $subscriptionPlan;
    /**
     * The token duration in months. Must be >= 0. 0 means unlimited time.
     *
     * @var int
     */
    protected int $tokenDuration;
    /**
     * The list of "blacklisted" territories, as an array of NIP groups.
     *
     * @var MinGroup[]
     */
    protected array $blacklistedTerritories;
    /**
     * The number of tokens in use.
     *
     * @var int
     */
    protected int $tokensInUse;
    /**
     * The number of tokens used (expired or revoked).
     *
     * @var int
     */
    protected int $tokensUsed;
}