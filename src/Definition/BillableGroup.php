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
}