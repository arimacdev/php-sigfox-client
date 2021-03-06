<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Defines the NIP group's update properties
 */
class NIPUpdate extends CommonGroupUpdate
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
     * @return static To use in method chains
     */
    public function setCountryISOAlpha3(?string $countryISOAlpha3)
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
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('countryISOAlpha3' => new PrimitiveSerializer('string'));
        $serializers = array_merge($serializers, parent::getSerializeMetaData());
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array();
        $rules = array_merge($rules, parent::getValidationMetaData());
        return $rules;
    }
}