<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\BaseHost;
class HostCreation extends BaseHost
{
    /**
     * identifier of the group of this host
     *
     * @var string
     */
    protected string $groupId;
}