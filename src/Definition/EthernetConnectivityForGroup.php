<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\EthernetConnectivityBase;
use Arimac\Sigfox\Definition\MinGroup;
use Arimac\Sigfox\Definition\Actions;
use Arimac\Sigfox\Definition\Resources;
/**
 * Ethernet connectivity configuration for a group.
 */
class EthernetConnectivityForGroup extends EthernetConnectivityBase
{
    /**
     * The group's identifier
     *
     * @var string
     */
    protected string $id;
    /** @var MinGroup */
    protected MinGroup $group;
    /** @var Actions */
    protected Actions $actions;
    /** @var Resources */
    protected Resources $resources;
}