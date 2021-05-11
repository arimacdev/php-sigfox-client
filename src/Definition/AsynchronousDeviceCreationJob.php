<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Extendable;
class AsynchronousDeviceCreationJob extends BulkDeviceAsynchronousRequest
{
    use Extendable;
    protected ?bool $extendable = null;
}