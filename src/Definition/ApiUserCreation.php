<?php

namespace Arimac\Sigfox\Definition;

/**
 * Defines the API user properties for creation
 */
class ApiUserCreation
{
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
}