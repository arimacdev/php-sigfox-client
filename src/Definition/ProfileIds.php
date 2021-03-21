<?php

namespace Arimac\Sigfox\Definition;

/**
 * The API user profile identifier(s)
 */
trait ProfileIds
{
    /** @var string[] */
    protected ?array $profileId = null;
    /**
     * @param string[] profileId
     */
    function setProfileId(?array $profileId)
    {
        $this->profileId = $profileId;
    }
    /**
     * @return string[] profileId
     */
    function getProfileId() : ?array
    {
        return $this->profileId;
    }
}