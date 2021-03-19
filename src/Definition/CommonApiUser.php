<?php

namespace Arimac\Sigfox\Definition;

/**
 * Defines the generic API user properties
 */
class CommonApiUser
{
    /**
     * The API user name
     *
     * @var string
     */
    protected string $name;
    /**
     * The API user timezone
     *
     * @var string
     */
    protected string $timezone;
}