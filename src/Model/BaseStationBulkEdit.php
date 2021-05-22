<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Validator\Rules\Required;
use Arimac\Sigfox\Validator\Rules\ChildSet;
class BaseStationBulkEdit extends Model
{
    /**
     * Operator id of named base stations for bulk update
     *
     * @var string
     */
    protected ?string $groupId = null;
    /**
     * @var BaseStationUpdate[]
     */
    protected ?array $basestations = null;
    /**
     * Setter for groupId
     *
     * @param string $groupId Operator id of named base stations for bulk update
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
     * @return string Operator id of named base stations for bulk update
     */
    public function getGroupId() : ?string
    {
        return $this->groupId;
    }
    /**
     * Setter for basestations
     *
     * @param BaseStationUpdate[] $basestations
     *
     * @return static To use in method chains
     */
    public function setBasestations(?array $basestations)
    {
        $this->basestations = $basestations;
        return $this;
    }
    /**
     * Getter for basestations
     *
     * @return BaseStationUpdate[]
     */
    public function getBasestations() : ?array
    {
        return $this->basestations;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('groupId' => new PrimitiveSerializer('string'), 'basestations' => new ArraySerializer(new ClassSerializer(BaseStationUpdate::class)));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('groupId' => array(new Required()), 'basestations' => array(new Required(), new ChildSet()));
        return $rules;
    }
}