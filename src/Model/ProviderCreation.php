<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
class ProviderCreation extends BaseProvider
{
    /**
     * identifier of the group of this provider
     *
     * @var string
     */
    protected ?string $groupId = null;
    /**
     * Setter for groupId
     *
     * @param string $groupId identifier of the group of this provider
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
     * @return string identifier of the group of this provider
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
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('groupId' => array(new Required()));
        $rules = array_merge($rules, parent::getValidationMetaData());
        return $rules;
    }
}