<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Defines the DIST group's create properties
 */
class DISTCreate extends CommonGroupCreate
{
    /**
     * SO or NIP group id for a DIST & SVNO  group. This field is mandatory for DIST & SVNO group creation.
     *
     * @var string
     */
    protected ?string $networkOperatorId = null;
    /**
     * Setter for networkOperatorId
     *
     * @param string $networkOperatorId SO or NIP group id for a DIST & SVNO  group. This field is mandatory for DIST
     *                                  & SVNO group creation.
     *
     * @return static To use in method chains
     */
    public function setNetworkOperatorId(?string $networkOperatorId)
    {
        $this->networkOperatorId = $networkOperatorId;
        return $this;
    }
    /**
     * Getter for networkOperatorId
     *
     * @return string SO or NIP group id for a DIST & SVNO  group. This field is mandatory for DIST & SVNO group
     *                creation.
     */
    public function getNetworkOperatorId() : ?string
    {
        return $this->networkOperatorId;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('networkOperatorId' => new PrimitiveSerializer('string'));
        $serializers = array_merge($serializers, parent::getSerializeMetaData());
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array();
        $rules = array_merge($rules, parent::getValidationMetaData());
        return $rules;
    }
}