<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
/**
 * Defines the API user properties for creation
 */
class ApiUserCreation extends Definition
{
    protected $required = array('groupId', 'name', 'profileIds', 'timezone');
    /**
     * The group identifer
     *
     * @var string
     */
    protected string $groupId;
    /**
     * The API user name
     *
     * @var string
     */
    protected string $name;
    /**
     * The API user timezone as a Java TimeZone ID ("full name" version only, like "America/Costa_Rica")
     *
     * @var string
     */
    protected string $timezone;
    /**
     * The API user profiles
     *
     * @var string[]
     */
    protected array $profileIds;
    /**
     * @param string $groupId The group identifer
     */
    function setGroupId(string $groupId)
    {
        $this->groupId = $groupId;
    }
    /**
     * @return string The group identifer
     */
    function getGroupId() : string
    {
        return $this->groupId;
    }
    /**
     * @param string $name The API user name
     */
    function setName(string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The API user name
     */
    function getName() : string
    {
        return $this->name;
    }
    /**
     * @param string $timezone The API user timezone as a Java TimeZone ID ("full name" version only, like "America/Costa_Rica")
     */
    function setTimezone(string $timezone)
    {
        $this->timezone = $timezone;
    }
    /**
     * @return string The API user timezone as a Java TimeZone ID ("full name" version only, like "America/Costa_Rica")
     */
    function getTimezone() : string
    {
        return $this->timezone;
    }
    /**
     * @param string[] $profileIds The API user profiles
     */
    function setProfileIds(array $profileIds)
    {
        $this->profileIds = $profileIds;
    }
    /**
     * @return string[] The API user profiles
     */
    function getProfileIds() : array
    {
        return $this->profileIds;
    }
}