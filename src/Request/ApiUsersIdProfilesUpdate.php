<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Definition\ProfileIds;
use Arimac\Sigfox\Serializer\ClassSerializer;
/**
 * Associate new profiles to a given API user.
 */
class ApiUsersIdProfilesUpdate extends Request
{
    /**
     * The API profile to update
     *
     * @var ProfileIds
     */
    protected ?ProfileIds $profileIds = null;
    /**
     * @internal
     */
    protected array $body = array('profileIds');
    /**
     * @internal
     */
    protected array $validations = array('profileIds' => array('required'));
    /**
     * Setter for profileIds
     *
     * @param ProfileIds $profileIds The API profile to update
     *
     * @return self To use in method chains
     */
    public function setProfileIds(?ProfileIds $profileIds) : self
    {
        $this->profileIds = $profileIds;
        return $this;
    }
    /**
     * Getter for profileIds
     *
     * @return ProfileIds The API profile to update
     */
    public function getProfileIds() : ?ProfileIds
    {
        return $this->profileIds;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        return array('profileIds' => new ClassSerializer(self::class, 'profileIds', ProfileIds::class));
    }
}