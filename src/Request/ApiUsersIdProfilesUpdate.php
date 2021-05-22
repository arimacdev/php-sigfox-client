<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Model\ProfileIds;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
use Arimac\Sigfox\Validator\Rules\Child;
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
    protected ?string $body = 'profileIds';
    /**
     * Setter for profileIds
     *
     * @param ProfileIds $profileIds The API profile to update
     *
     * @return static To use in method chains
     */
    public function setProfileIds(?ProfileIds $profileIds)
    {
        $this->profileIds = $profileIds;
        return $this;
    }
    /**
     * Getter for profileIds
     *
     * @internal
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
        $serializers = array('profileIds' => new ClassSerializer(ProfileIds::class));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('profileIds' => array(new Required(), new Child()));
        return $rules;
    }
}