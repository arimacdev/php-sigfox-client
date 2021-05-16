<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Delete profiles or a given profile associated to the groupId
 */
class UsersIdProfilesProfileIdDelete extends Request
{
    /**
     * The group identifier
     *
     * @var string
     */
    protected ?string $groupId = null;
    protected array $query = array('groupId');
    /**
     * Setter for groupId
     *
     * @param string $groupId The group identifier
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
     * @return string The group identifier
     */
    public function getGroupId() : ?string
    {
        return $this->groupId;
    }
    /**
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('groupId' => new PrimitiveSerializer(self::class, 'groupId', 'string'));
    }
}