<?php

namespace Arimac\Sigfox\Definition;

/**
 * Defines the API user properties for creation
 */
class ApiUserCreation
{
    /**
     * The group identifer
     */
    protected ?string $groupId;
    /**
     * The API user name
     */
    protected ?string $name;
    /**
     * The API user timezone as a Java TimeZone ID ("full name" version only, like "America/Costa_Rica")
     */
    protected ?string $timezone;
    /**
     * The API user profiles
     */
    protected ?array $profileIds;
}