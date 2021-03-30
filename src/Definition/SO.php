<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\Group;
/**
 * Defines the SO group type properties
 */
class SO extends Group
{
    /**
     * This is the country ISO code (3 letters from the ISO 3166-1 alpha-3 country code) where the operator manages its network. Only available for SNO and NIP.
     *
     * @var string
     */
    protected ?string $countryISOAlpha3 = null;
    /**
     * @param string $countryISOAlpha3 This is the country ISO code (3 letters from the ISO 3166-1 alpha-3 country code) where the operator manages its network. Only available for SNO and NIP.
     */
    function setCountryISOAlpha3(?string $countryISOAlpha3)
    {
        $this->countryISOAlpha3 = $countryISOAlpha3;
    }
    /**
     * @return string This is the country ISO code (3 letters from the ISO 3166-1 alpha-3 country code) where the operator manages its network. Only available for SNO and NIP.
     */
    function getCountryISOAlpha3() : ?string
    {
        return $this->countryISOAlpha3;
    }
}