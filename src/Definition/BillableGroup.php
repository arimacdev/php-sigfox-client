<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
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
     * @internal
     */
    protected array $validations = array('technicalEmail' => array('max:250', 'nullable'));
    /**
     * Setter for billable
     *
     * @param bool $billable true if the group is billable
     *
     * @return self To use in method chains
     */
    public function setBillable(?bool $billable) : self
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
     * @return self To use in method chains
     */
    public function setTechnicalEmail(?string $technicalEmail) : self
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
     * @return self To use in method chains
     */
    public function setMaxPrototypeAllowed(?int $maxPrototypeAllowed) : self
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
    public function getSerializeMetaData() : array
    {
        return array('billable' => new PrimitiveSerializer('bool'), 'technicalEmail' => new PrimitiveSerializer('string'), 'maxPrototypeAllowed' => new PrimitiveSerializer('int'));
    }
}