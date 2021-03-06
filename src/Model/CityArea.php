<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
/**
 * Define the city area's properties
 */
class CityArea extends Model
{
    /**
     * The city area's identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * The city area's name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * The city area operator's identifier
     *
     * @var string
     */
    protected ?string $groupId = null;
    /**
     * true if the city area is not editable by an operator user.
     *
     * @var bool
     */
    protected ?bool $readOnly = null;
    /**
     * true if the city area is included in the monthly deployement kpi report of the operator.
     *
     * @var bool
     */
    protected ?bool $deploymentKpiReport = null;
    /**
     * @var string[]
     */
    protected ?array $actions = null;
    /**
     * Setter for id
     *
     * @param string $id The city area's identifier
     *
     * @return static To use in method chains
     */
    public function setId(?string $id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return string The city area's identifier
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * Setter for name
     *
     * @param string $name The city area's name
     *
     * @return static To use in method chains
     */
    public function setName(?string $name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Getter for name
     *
     * @return string The city area's name
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Setter for groupId
     *
     * @param string $groupId The city area operator's identifier
     *
     * @return static To use in method chains
     */
    public function setGroupId(?string $groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }
    /**
     * Getter for groupId
     *
     * @return string The city area operator's identifier
     */
    public function getGroupId() : ?string
    {
        return $this->groupId;
    }
    /**
     * Setter for readOnly
     *
     * @param bool $readOnly true if the city area is not editable by an operator user.
     *
     * @return static To use in method chains
     */
    public function setReadOnly(?bool $readOnly)
    {
        $this->readOnly = $readOnly;
        return $this;
    }
    /**
     * Getter for readOnly
     *
     * @return bool true if the city area is not editable by an operator user.
     */
    public function getReadOnly() : ?bool
    {
        return $this->readOnly;
    }
    /**
     * Setter for deploymentKpiReport
     *
     * @param bool $deploymentKpiReport true if the city area is included in the monthly deployement kpi report of
     *                                  the operator.
     *
     * @return static To use in method chains
     */
    public function setDeploymentKpiReport(?bool $deploymentKpiReport)
    {
        $this->deploymentKpiReport = $deploymentKpiReport;
        return $this;
    }
    /**
     * Getter for deploymentKpiReport
     *
     * @return bool true if the city area is included in the monthly deployement kpi report of the operator.
     */
    public function getDeploymentKpiReport() : ?bool
    {
        return $this->deploymentKpiReport;
    }
    /**
     * Setter for actions
     *
     * @param string[] $actions
     *
     * @return static To use in method chains
     */
    public function setActions(?array $actions)
    {
        $this->actions = $actions;
        return $this;
    }
    /**
     * Getter for actions
     *
     * @return string[]
     */
    public function getActions() : ?array
    {
        return $this->actions;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('id' => new PrimitiveSerializer('string'), 'name' => new PrimitiveSerializer('string'), 'groupId' => new PrimitiveSerializer('string'), 'readOnly' => new PrimitiveSerializer('bool'), 'deploymentKpiReport' => new PrimitiveSerializer('bool'), 'actions' => new ArraySerializer(new PrimitiveSerializer('string')));
        return $serializers;
    }
}