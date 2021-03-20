<?php

namespace Arimac\Sigfox\Definition;

/**
 * Generic information about a User
 */
class CommonUser
{
    /**
     * The user's first name
     *
     * @var string
     */
    protected string $firstName;
    /**
     * The user's last name
     *
     * @var string
     */
    protected string $lastName;
    /**
     * The user's timezone
     *
     * @var string
     */
    protected string $timezone;
    /**
     * @param string firstName The user's first name
     */
    function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }
    /**
     * @return string The user's first name
     */
    function getFirstName() : string
    {
        return $this->firstName;
    }
    /**
     * @param string lastName The user's last name
     */
    function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
    }
    /**
     * @return string The user's last name
     */
    function getLastName() : string
    {
        return $this->lastName;
    }
    /**
     * @param string timezone The user's timezone
     */
    function setTimezone(string $timezone)
    {
        $this->timezone = $timezone;
    }
    /**
     * @return string The user's timezone
     */
    function getTimezone() : string
    {
        return $this->timezone;
    }
}