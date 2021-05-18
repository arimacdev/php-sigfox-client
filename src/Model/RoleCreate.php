<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
class RoleCreate extends CommonRole
{
    /**
     * The role's parent's identifier
     *
     * @var string
     */
    protected ?string $parentRoleId = null;
    /**
     * the permisions included in this role, if the role is not META or META_EMPTY type,
     *
     * @var int[]
     */
    protected ?array $perms = null;
    /**
     * Setter for parentRoleId
     *
     * @param string $parentRoleId The role's parent's identifier
     *
     * @return self To use in method chains
     */
    public function setParentRoleId(?string $parentRoleId) : self
    {
        $this->parentRoleId = $parentRoleId;
        return $this;
    }
    /**
     * Getter for parentRoleId
     *
     * @return string The role's parent's identifier
     */
    public function getParentRoleId() : ?string
    {
        return $this->parentRoleId;
    }
    /**
     * Setter for perms
     *
     * @param int[] $perms the permisions included in this role, if the role is not META or META_EMPTY type,
     *
     * @return self To use in method chains
     */
    public function setPerms(?array $perms) : self
    {
        $this->perms = $perms;
        return $this;
    }
    /**
     * Getter for perms
     *
     * @return int[] the permisions included in this role, if the role is not META or META_EMPTY type,
     */
    public function getPerms() : ?array
    {
        return $this->perms;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('parentRoleId' => new PrimitiveSerializer('string'), 'perms' => new ArraySerializer(new PrimitiveSerializer('int')));
        $serializers = array_merge($serializers, parent::getSerializeMetaData());
        return $serializers;
    }
}