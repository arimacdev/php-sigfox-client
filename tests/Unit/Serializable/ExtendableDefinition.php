<?php

namespace Arimac\Sigfox\Test\Unit\Serializable;

use Arimac\Sigfox\Extendable;

class ExtendableDefinition extends PrimitivePropertiesDefinition
{
    use Extendable;
    protected bool $extendable = true;
}
