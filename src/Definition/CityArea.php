<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\Actions;
/**
 * Define the city area's properties
 */
class CityArea
{
    /**
     * The city area's identifier
     *
     * @var string
     */
    protected string $id;
    /**
     * The city area's name
     *
     * @var string
     */
    protected string $name;
    /**
     * The city area operator's identifier
     *
     * @var string
     */
    protected string $groupId;
    /**
     * true if the city area is not editable by an operator user.
     *
     * @var bool
     */
    protected bool $readOnly;
    /**
     * true if the city area is included in the monthly deployement kpi report of the operator.
     *
     * @var bool
     */
    protected bool $deploymentKpiReport;
    /** @var Actions */
    protected Actions $actions;
}