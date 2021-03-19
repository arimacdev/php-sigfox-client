<?php

namespace Arimac\Sigfox\Definition;

/**
 * Defines the billable group's properties
 */
class BillableGroup
{
    /**
     * true if the group is billable
     */
    protected bool $billable;
    /**
     * The technical contact email
     */
    protected string $technicalEmail;
    /**
     * Number of prototypes allowed. Accessible only for groups under SO
     */
    protected int $maxPrototypeAllowed;
}