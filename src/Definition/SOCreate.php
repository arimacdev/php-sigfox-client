<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonGroupCreate;
/**
 * Defines the SO group's create properties
 */
class SOCreate extends CommonGroupCreate
{
    /**
     * This is the country ISO code (3 letters from the ISO 3166-1 alpha-3 country code) where the operator manages its network. Only available for SO and NIP.
     *
     * @var string
     */
    protected string $countryISOAlpha3;
}