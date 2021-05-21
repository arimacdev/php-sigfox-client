<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
/**
 * The API user profile identifier(s)
 */
class ProfileIds extends Model
{
    /**
     * @var string[]
     */
    protected ?array $profileId = null;
    /**
     * Setter for profileId
     *
     * @param string[] $profileId
     *
     * @return self To use in method chains
     */
    public function setProfileId(?array $profileId) : self
    {
        $this->profileId = $profileId;
        return $this;
    }
    /**
     * Getter for profileId
     *
     * @return string[]
     */
    public function getProfileId() : ?array
    {
        return $this->profileId;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('profileId' => new ArraySerializer(new PrimitiveSerializer('string')));
        return $serializers;
    }
}