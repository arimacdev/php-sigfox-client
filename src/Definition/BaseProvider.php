<?php

namespace Arimac\Sigfox\Definition;

class BaseProvider
{
    /**
     * The provider's name
     */
    protected string $name;
    /**
     * The provider's annual cost. This field can be unset when updating.
     */
    protected int $annualCost;
}