<?php

namespace Arimac\Sigfox\Definition;

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
    public function getProfileId() : array
    {
        return $this->profileId;
    }
}