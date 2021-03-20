<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonGroupCreate;
/**
 * Defines the DIST group's create properties
 */
class DISTCreate extends CommonGroupCreate
{
    /**
     * SO or NIP group id for a DIST & SVNO  group. This field is mandatory for DIST & SVNO group creation.
     *
     * @var string
     */
    protected string $networkOperatorId;
    /**
     * @param string networkOperatorId SO or NIP group id for a DIST & SVNO  group. This field is mandatory for DIST & SVNO group creation.
     */
    function setNetworkOperatorId(string $networkOperatorId)
    {
        $this->networkOperatorId = $networkOperatorId;
    }
    /**
     * @return string SO or NIP group id for a DIST & SVNO  group. This field is mandatory for DIST & SVNO group creation.
     */
    function getNetworkOperatorId() : string
    {
        return $this->networkOperatorId;
    }
}