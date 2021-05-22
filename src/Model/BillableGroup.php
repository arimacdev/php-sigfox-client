<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\MaxLength;
/**
 * Defines the billable group's properties
 */
trait BillableGroup
{
    /**
     * true if the group is billable
     *
     * @var bool
     */
    protected ?bool $billable = null;
    /**
     * The technical contact email
     *
     * @var string
     */
    protected ?string $technicalEmail = null;
    /**
     * Number of prototypes allowed. Accessible only for groups under SO
     *
     * @var int
     */
    protected ?int $maxPrototypeAllowed = null;
    /**
     * Setter for billable
     *
     * @param bool $billable true if the group is billable
     *
     * @return static To use in method chains
     */
    public function setBillable(?bool $billable)
    {
        $this->billable = $billable;
        return $this;
    }
    /**
     * Getter for billable
     *
     * @return bool true if the group is billable
     */
    public function getBillable() : ?bool
    {
        return $this->billable;
    }
    /**
     * Setter for technicalEmail
     *
     * @param string $technicalEmail The technical contact email
     *
     * @return static To use in method chains
     */
    public function setTechnicalEmail(?string $technicalEmail)
    {
        $this->technicalEmail = $technicalEmail;
        return $this;
    }
    /**
     * Getter for technicalEmail
     *
     * @return string The technical contact email
     */
    public function getTechnicalEmail() : ?string
    {
        return $this->technicalEmail;
    }
    /**
     * Setter for maxPrototypeAllowed
     *
     * @param int $maxPrototypeAllowed Number of prototypes allowed. Accessible only for groups under SO
     *
     * @return static To use in method chains
     */
    public function setMaxPrototypeAllowed(?int $maxPrototypeAllowed)
    {
        $this->maxPrototypeAllowed = $maxPrototypeAllowed;
        return $this;
    }
    /**
     * Getter for maxPrototypeAllowed
     *
     * @return int Number of prototypes allowed. Accessible only for groups under SO
     */
    public function getMaxPrototypeAllowed() : ?int
    {
        return $this->maxPrototypeAllowed;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaDataBillableGroup() : array
    {
        $serializers = array('billable' => new PrimitiveSerializer('bool'), 'technicalEmail' => new PrimitiveSerializer('string'), 'maxPrototypeAllowed' => new PrimitiveSerializer('int'));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaDataBillableGroup() : array
    {
        $rules = array('technicalEmail' => array(new MaxLength(250)));
        return $rules;
    }
}