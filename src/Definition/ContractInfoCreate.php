<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonContractInfo;
/**
 * Defines a contract's common properties for creation
 */
class ContractInfoCreate extends CommonContractInfo
{
    /**
     * ID of group associated with the contact
     *
     * @var string
     */
    protected string $groupId;
    /**
     * The contract external ID. It's used to identify the contract in EDRs.
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
    /**
     * The order ID (hex), if any.
     *
     * @var string
     */
    protected string $orderId;
    /**
     * The order name, if any
     *
     * @var string
     */
    protected string $orderName;
    /**
     * The pricing model used by this contract info. 1 -> Pricing model version 1. 2 -> Pricing model version 2. 3 -> Pricing model version 3.
     *
     * @var int
     */
    protected int $pricingModel;
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
     * The contract info subscription plan. 0 -> Free order 1 -> Pay As You Grow (PAYG) 2 -> Committed Volume Plan (CVP) 3 -> Flexible Committed Volume Plan (CVP Flex) 4 -> PACK 5 -> DevKit 6 -> Activate
     *
     * @var int
     */
    protected int $subscriptionPlan;
    /**
     * The token duration in months. Must be >= 0, if 0 unlimited token duration.
     *
     * @var int
     */
    protected int $tokenDuration;
    /**
     * The list of "blacklisted" territories, as an array of NIP group IDs.
     *
     * @var string[]
     */
    protected array $blacklistedTerritories;
}