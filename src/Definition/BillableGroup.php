<?php

namespace Arimac\Sigfox\Definition;

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
    protected bool $billable;
    /**
     * The technical contact email
     *
     * @var string
     */
    protected string $technicalEmail;
    /**
     * Number of prototypes allowed. Accessible only for groups under SO
     *
     * @var int
     */
    protected int $maxPrototypeAllowed;
    /**
     * @param bool billable true if the group is billable
     */
    function setBillable(bool $billable)
    {
        $this->billable = $billable;
    }
    /**
     * @return bool true if the group is billable
     */
    function getBillable() : bool
    {
        return $this->billable;
    }
    /**
     * @param string technicalEmail The technical contact email
     */
    function setTechnicalEmail(string $technicalEmail)
    {
        $this->technicalEmail = $technicalEmail;
    }
    /**
     * @return string The technical contact email
     */
    function getTechnicalEmail() : string
    {
        return $this->technicalEmail;
    }
    /**
     * @param int maxPrototypeAllowed Number of prototypes allowed. Accessible only for groups under SO
     */
    function setMaxPrototypeAllowed(int $maxPrototypeAllowed)
    {
        $this->maxPrototypeAllowed = $maxPrototypeAllowed;
    }
    /**
     * @return int Number of prototypes allowed. Accessible only for groups under SO
     */
    function getMaxPrototypeAllowed() : int
    {
        return $this->maxPrototypeAllowed;
    }
}