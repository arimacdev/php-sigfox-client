<?php

namespace Arimac\Sigfox\Definition;

class BaseProvider
{
    /**
     * The provider's name
     *
     * @var string
     */
    protected string $name;
    /**
     * The provider's annual cost. This field can be unset when updating.
     *
     * @var int
     */
    protected int $annualCost;
}