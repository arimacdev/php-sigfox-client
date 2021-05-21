<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
class SiteUpdate extends BaseSite
{
    /**
     * ISO 3166-1 UN M.49 country code of the site location.
     * The first code is the country (region and department available for some countries).
     *
     * @var int[]
     */
    protected ?array $location = null;
    /**
     * Setter for location
     *
     * @param int[] $location ISO 3166-1 UN M.49 country code of the site location.
     *                        The first code is the country (region and department available for some countries).
     *                        
     *
     * @return self To use in method chains
     */
    public function setLocation(?array $location) : self
    {
        $this->location = $location;
        return $this;
    }
    /**
     * Getter for location
     *
     * @return int[] ISO 3166-1 UN M.49 country code of the site location.
     *               The first code is the country (region and department available for some countries).
     *               
     */
    public function getLocation() : ?array
    {
        return $this->location;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('location' => new ArraySerializer(new PrimitiveSerializer('int')));
        $serializers = array_merge($serializers, parent::getSerializeMetaData());
        return $serializers;
    }
}