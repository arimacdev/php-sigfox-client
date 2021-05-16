<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
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
     * @return self To use in method chains
     */
    public function setGroupId(?string $groupId) : self
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
        return array('groupId' => new PrimitiveSerializer(self::class, 'groupId', 'string'));
    }
}