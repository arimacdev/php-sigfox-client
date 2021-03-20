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
    /**
     * @param string id The city area's identifier
     */
    function setId(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The city area's identifier
     */
    function getId() : string
    {
        return $this->id;
    }
    /**
     * @param string name The city area's name
     */
    function setName(string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The city area's name
     */
    function getName() : string
    {
        return $this->name;
    }
    /**
     * @param string groupId The city area operator's identifier
     */
    function setGroupId(string $groupId)
    {
        $this->groupId = $groupId;
    }
    /**
     * @return string The city area operator's identifier
     */
    function getGroupId() : string
    {
        return $this->groupId;
    }
    /**
     * @param bool readOnly true if the city area is not editable by an operator user.
     */
    function setReadOnly(bool $readOnly)
    {
        $this->readOnly = $readOnly;
    }
    /**
     * @return bool true if the city area is not editable by an operator user.
     */
    function getReadOnly() : bool
    {
        return $this->readOnly;
    }
    /**
     * @param bool deploymentKpiReport true if the city area is included in the monthly deployement kpi report of the operator.
     */
    function setDeploymentKpiReport(bool $deploymentKpiReport)
    {
        $this->deploymentKpiReport = $deploymentKpiReport;
    }
    /**
     * @return bool true if the city area is included in the monthly deployement kpi report of the operator.
     */
    function getDeploymentKpiReport() : bool
    {
        return $this->deploymentKpiReport;
    }
    /**
     * @param Actions actions
     */
    function setActions(Actions $actions)
    {
        $this->actions = $actions;
    }
    /**
     * @return Actions actions
     */
    function getActions() : Actions
    {
        return $this->actions;
    }
}