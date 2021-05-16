<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
/**
 * The API user profile identifier(s)
 */
trait ProfileIds
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
        return array('profileId' => new ArraySerializer(self::class, 'profileId', new PrimitiveSerializer(self::class, 'profileId', 'string')));
    }
}