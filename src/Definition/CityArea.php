<?php

namespace Arimac\Sigfox\Definition;

/**
 * Define the city area's properties
 */
class CityArea
{
    /**
     * The city area's identifier
     */
    protected string $id;
    /**
     * The city area's name
     */
    protected string $name;
    /**
     * The city area operator's identifier
     */
    protected string $groupId;
    /**
     * true if the city area is not editable by an operator user.
     */
    protected bool $readOnly;
    /**
     * true if the city area is included in the monthly deployement kpi report of the operator.
     */
    protected bool $deploymentKpiReport;
}