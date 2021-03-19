<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\Group;
/**
 * Defines the NIP group type properties
 */
class NIP extends Group
{
    /**
     * This is the country ISO code (3 letters from the ISO 3166-1 alpha-3 country code) where the operator manages its network. Only available for SNO and NIP.
     *
     * @var string
     */
    protected string $countryISOAlpha3;
}