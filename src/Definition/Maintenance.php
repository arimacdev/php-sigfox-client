<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\BaseMaintenance;
use Arimac\Sigfox\Definition\MinGroup;
use Arimac\Sigfox\Definition\Contact;
use Arimac\Sigfox\Definition\Actions;
use Arimac\Sigfox\Definition\Resources;
class Maintenance extends BaseMaintenance
{
    /** @var MinGroup */
    protected MinGroup $group;
    /** @var Contact[] */
    protected array $contacts;
    /** @var Actions */
    protected Actions $actions;
    /** @var Resources */
    protected Resources $resources;
}