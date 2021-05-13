<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Generic information about convention
 */
class BaseSiteConvention extends Definition
{
    /**
     * AT SIGFOX
     */
    public const STATUS_AT_SIGFOX = 0;
    /**
     * AT HOST
     */
    public const STATUS_AT_HOST = 1;
    /**
     * SIGNED SIGFOX
     */
    public const STATUS_SIGNED_SIGFOX = 2;
    /**
     * SIGNED HOST
     */
    public const STATUS_SIGNED_HOST = 3;
    /**
     * SIGNED BOTH
     */
    public const STATUS_SIGNED_BOTH = 4;
    /**
     * CONDOMINIUM
     */
    public const TYPE_CONDOMINIUM = 0;
    /**
     * INDIVIDUAL
     */
    public const TYPE_INDIVIDUAL = 1;
    /**
     * SOCIAL HOUSING AUTHORITY
     */
    public const TYPE_SOCIAL_HOUSING_AUTHORITY = 2;
    /**
     * ASSOCIATION
     */
    public const TYPE_ASSOCIATION = 3;
    /**
     * COMPANY
     */
    public const TYPE_COMPANY = 4;
    /**
     * The annual cost of this convention
     *
     * @var int
     */
    protected ?int $annualCost = null;
    /**
     * The comments of this convention
     *
     * @var string
     */
    protected ?string $comments = null;
    /**
     * The start time of this convention
     *
     * @var int
     */
    protected ?int $startTime = null;
    /**
     * The end time of this convention
     *
     * @var int
     */
    protected ?int $endTime = null;
    /**
     * The bss contract reference of this convention
     *
     * @var string
     */
    protected ?string $contractReference = null;
    /**
     * is this convention in maintenance
     *
     * @var bool
     */
    protected ?bool $maintenance = null;
    /**
     * The annual cost of the maintenance of this convention
     *
     * @var int
     */
    protected ?int $maintenanceAnnualCost = null;
    /**
     * Convention status.
     * 
     * - {@see BaseSiteConvention::STATUS_AT_SIGFOX}
     * - {@see BaseSiteConvention::STATUS_AT_HOST}
     * - {@see BaseSiteConvention::STATUS_SIGNED_SIGFOX}
     * - {@see BaseSiteConvention::STATUS_SIGNED_HOST}
     * - {@see BaseSiteConvention::STATUS_SIGNED_BOTH}
     *
     * @var int
     */
    protected ?int $status = null;
    /**
     * Convention status.
     * 
     * - {@see BaseSiteConvention::TYPE_CONDOMINIUM}
     * - {@see BaseSiteConvention::TYPE_INDIVIDUAL}
     * - {@see BaseSiteConvention::TYPE_SOCIAL_HOUSING_AUTHORITY}
     * - {@see BaseSiteConvention::TYPE_ASSOCIATION}
     * - {@see BaseSiteConvention::TYPE_COMPANY}
     *
     * @var int
     */
    protected ?int $type = null;
    protected $serialize = array(new PrimitiveSerializer(self::class, 'annualCost', 'int'), new PrimitiveSerializer(self::class, 'comments', 'string'), new PrimitiveSerializer(self::class, 'startTime', 'int'), new PrimitiveSerializer(self::class, 'endTime', 'int'), new PrimitiveSerializer(self::class, 'contractReference', 'string'), new PrimitiveSerializer(self::class, 'maintenance', 'bool'), new PrimitiveSerializer(self::class, 'maintenanceAnnualCost', 'int'), new PrimitiveSerializer(self::class, 'status', 'int'), new PrimitiveSerializer(self::class, 'type', 'int'));
    /**
     * Setter for annualCost
     *
     * @param int $annualCost The annual cost of this convention
     *
     * @return self To use in method chains
     */
    public function setAnnualCost(?int $annualCost) : self
    {
        $this->annualCost = $annualCost;
        return $this;
    }
    /**
     * Getter for annualCost
     *
     * @return int The annual cost of this convention
     */
    public function getAnnualCost() : int
    {
        return $this->annualCost;
    }
    /**
     * Setter for comments
     *
     * @param string $comments The comments of this convention
     *
     * @return self To use in method chains
     */
    public function setComments(?string $comments) : self
    {
        $this->comments = $comments;
        return $this;
    }
    /**
     * Getter for comments
     *
     * @return string The comments of this convention
     */
    public function getComments() : string
    {
        return $this->comments;
    }
    /**
     * Setter for startTime
     *
     * @param int $startTime The start time of this convention
     *
     * @return self To use in method chains
     */
    public function setStartTime(?int $startTime) : self
    {
        $this->startTime = $startTime;
        return $this;
    }
    /**
     * Getter for startTime
     *
     * @return int The start time of this convention
     */
    public function getStartTime() : int
    {
        return $this->startTime;
    }
    /**
     * Setter for endTime
     *
     * @param int $endTime The end time of this convention
     *
     * @return self To use in method chains
     */
    public function setEndTime(?int $endTime) : self
    {
        $this->endTime = $endTime;
        return $this;
    }
    /**
     * Getter for endTime
     *
     * @return int The end time of this convention
     */
    public function getEndTime() : int
    {
        return $this->endTime;
    }
    /**
     * Setter for contractReference
     *
     * @param string $contractReference The bss contract reference of this convention
     *
     * @return self To use in method chains
     */
    public function setContractReference(?string $contractReference) : self
    {
        $this->contractReference = $contractReference;
        return $this;
    }
    /**
     * Getter for contractReference
     *
     * @return string The bss contract reference of this convention
     */
    public function getContractReference() : string
    {
        return $this->contractReference;
    }
    /**
     * Setter for maintenance
     *
     * @param bool $maintenance is this convention in maintenance
     *
     * @return self To use in method chains
     */
    public function setMaintenance(?bool $maintenance) : self
    {
        $this->maintenance = $maintenance;
        return $this;
    }
    /**
     * Getter for maintenance
     *
     * @return bool is this convention in maintenance
     */
    public function getMaintenance() : bool
    {
        return $this->maintenance;
    }
    /**
     * Setter for maintenanceAnnualCost
     *
     * @param int $maintenanceAnnualCost The annual cost of the maintenance of this convention
     *
     * @return self To use in method chains
     */
    public function setMaintenanceAnnualCost(?int $maintenanceAnnualCost) : self
    {
        $this->maintenanceAnnualCost = $maintenanceAnnualCost;
        return $this;
    }
    /**
     * Getter for maintenanceAnnualCost
     *
     * @return int The annual cost of the maintenance of this convention
     */
    public function getMaintenanceAnnualCost() : int
    {
        return $this->maintenanceAnnualCost;
    }
    /**
     * Setter for status
     *
     * @param int $status Convention status.
     *                    
     *                    - {@see BaseSiteConvention::STATUS_AT_SIGFOX}
     *                    - {@see BaseSiteConvention::STATUS_AT_HOST}
     *                    - {@see BaseSiteConvention::STATUS_SIGNED_SIGFOX}
     *                    - {@see BaseSiteConvention::STATUS_SIGNED_HOST}
     *                    - {@see BaseSiteConvention::STATUS_SIGNED_BOTH}
     *                    
     *
     * @return self To use in method chains
     */
    public function setStatus(?int $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Getter for status
     *
     * @return int Convention status.
     *             
     *             - {@see BaseSiteConvention::STATUS_AT_SIGFOX}
     *             - {@see BaseSiteConvention::STATUS_AT_HOST}
     *             - {@see BaseSiteConvention::STATUS_SIGNED_SIGFOX}
     *             - {@see BaseSiteConvention::STATUS_SIGNED_HOST}
     *             - {@see BaseSiteConvention::STATUS_SIGNED_BOTH}
     *             
     */
    public function getStatus() : int
    {
        return $this->status;
    }
    /**
     * Setter for type
     *
     * @param int $type Convention status.
     *                  
     *                  - {@see BaseSiteConvention::TYPE_CONDOMINIUM}
     *                  - {@see BaseSiteConvention::TYPE_INDIVIDUAL}
     *                  - {@see BaseSiteConvention::TYPE_SOCIAL_HOUSING_AUTHORITY}
     *                  - {@see BaseSiteConvention::TYPE_ASSOCIATION}
     *                  - {@see BaseSiteConvention::TYPE_COMPANY}
     *                  
     *
     * @return self To use in method chains
     */
    public function setType(?int $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Getter for type
     *
     * @return int Convention status.
     *             
     *             - {@see BaseSiteConvention::TYPE_CONDOMINIUM}
     *             - {@see BaseSiteConvention::TYPE_INDIVIDUAL}
     *             - {@see BaseSiteConvention::TYPE_SOCIAL_HOUSING_AUTHORITY}
     *             - {@see BaseSiteConvention::TYPE_ASSOCIATION}
     *             - {@see BaseSiteConvention::TYPE_COMPANY}
     *             
     */
    public function getType() : int
    {
        return $this->type;
    }
}