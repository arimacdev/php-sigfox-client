<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonGroupCreate;
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
     * @param string $networkOperatorId SNO or NIP group id for a DIST & SVNO  group. This field is mandatory for DIST & SVNO group creation.
     */
    function setNetworkOperatorId(?string $networkOperatorId)
    {
        $this->networkOperatorId = $networkOperatorId;
    }
    /**
     * @return string SNO or NIP group id for a DIST & SVNO  group. This field is mandatory for DIST & SVNO group creation.
     */
    function getNetworkOperatorId() : ?string
    {
        return $this->networkOperatorId;
    }
}