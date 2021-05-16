<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Defines the SVNO group's create properties
 */
class SVNOCreate extends CommonGroupCreate
{
    /**
     * SNO or NIP group id for a DIST & SVNO  group. This field is mandatory for DIST & SVNO group creation.
     *
     * @var string
     */
    protected ?string $networkOperatorId = null;
    /**
     * Setter for networkOperatorId
     *
     * @param string $networkOperatorId SNO or NIP group id for a DIST & SVNO  group. This field is mandatory for
     *                                  DIST & SVNO group creation.
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
     * @return string SNO or NIP group id for a DIST & SVNO  group. This field is mandatory for DIST & SVNO group
     *                creation.
     */
    public function getNetworkOperatorId() : ?string
    {
        return $this->networkOperatorId;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        return array('networkOperatorId' => new PrimitiveSerializer('string'));
    }
}