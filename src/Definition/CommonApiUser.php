<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
/**
 * Defines the generic API user properties
 */
class CommonApiUser extends Definition
{
    /**
     * The API user name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * The API user timezone
     *
     * @var string
     */
    protected ?string $timezone = null;
    /**
     * @param string $name The API user name
     */
    function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The API user name
     */
    function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @param string $timezone The API user timezone
     */
    function setTimezone(?string $timezone)
    {
        $this->timezone = $timezone;
    }
    /**
     * @return string The API user timezone
     */
    function getTimezone() : ?string
    {
        return $this->timezone;
    }
}