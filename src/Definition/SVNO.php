<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Defines the SVNO group type properties
 */
class SVNO extends Group
{
    /**
     * SO or NIP group id for a DIST & SVNO  group. This field is mandatory for DIST & SVNO group creation.
     *
     * @var string
     */
    protected ?string $networkOperatorId = null;
    protected $serialize = array(new PrimitiveSerializer(self::class, 'networkOperatorId', 'string'));
    /**
     * Setter for networkOperatorId
     *
     * @param string $networkOperatorId SO or NIP group id for a DIST & SVNO  group. This field is mandatory for DIST
     *                                  & SVNO group creation.
     *
     * @return self To use in method chains
     */
    public function setNetworkOperatorId(?string $networkOperatorId) : self
    {
        $this->networkOperatorId = $networkOperatorId;
        return $this;
    }
    /**
     * Getter for networkOperatorId
     *
     * @return string SO or NIP group id for a DIST & SVNO  group. This field is mandatory for DIST & SVNO group
     *                creation.
     */
    public function getNetworkOperatorId() : string
    {
        return $this->networkOperatorId;
    }
}