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
    protected string $networkOperatorId;
}