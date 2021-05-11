<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Delete profiles or a given profile associated to the groupId
 * 
 */
class UsersIdProfilesProfileIdDelete extends Definition
{
    /**
     * The group identifier
     *
     * @var string
     */
    protected ?string $groupId = null;
    protected $serialize = array(new PrimitiveSerializer(self::class, 'groupId', 'string'));
    protected $query = array('groupId');
    protected $validations = array('groupId' => array('required'));
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
}