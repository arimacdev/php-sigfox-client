<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Defines the SO group's create properties
 */
class SOCreate extends CommonGroupCreate
{
    /**
     * This is the country ISO code (3 letters from the ISO 3166-1 alpha-3 country code) where the operator manages
     * its network. Only available for SO and NIP.
     *
     * @var string
     */
    protected ?string $countryISOAlpha3 = null;
    /**
     * Setter for countryISOAlpha3
     *
     * @param string $countryISOAlpha3 This is the country ISO code (3 letters from the ISO 3166-1 alpha-3 country
     *                                 code) where the operator manages its network. Only available for SO and NIP.
     *
     * @return self To use in method chains
     */
    public function setCountryISOAlpha3(?string $countryISOAlpha3) : self
    {
        $this->countryISOAlpha3 = $countryISOAlpha3;
        return $this;
    }
    /**
     * Getter for countryISOAlpha3
     *
     * @return string This is the country ISO code (3 letters from the ISO 3166-1 alpha-3 country code) where the
     *                operator manages its network. Only available for SO and NIP.
     */
    public function getCountryISOAlpha3() : ?string
    {
        return $this->countryISOAlpha3;
    }
    /**
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('countryISOAlpha3' => new PrimitiveSerializer(self::class, 'countryISOAlpha3', 'string'));
    }
}