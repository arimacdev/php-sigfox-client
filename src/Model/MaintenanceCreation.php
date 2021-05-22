<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class MaintenanceCreation extends BaseMaintenance
{
    /**
     * identifier of the group of this maintenance
     *
     * @var string
     */
    protected ?string $groupId = null;
    /**
     * Setter for groupId
     *
     * @param string $groupId identifier of the group of this maintenance
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
     * @return string identifier of the group of this maintenance
     */
    public function getGroupId() : ?string
    {
        return $this->groupId;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('groupId' => new PrimitiveSerializer('string'));
        $serializers = array_merge($serializers, parent::getSerializeMetaData());
        return $serializers;
    }
}