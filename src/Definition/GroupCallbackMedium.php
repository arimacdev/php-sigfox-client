<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\GroupCallbackEmail;
use Arimac\Sigfox\Definition\GroupCallbackHTTP;
/**
 * Callback types
 */
class GroupCallbackMedium extends GroupCallbackHTTP
{
    use GroupCallbackEmail;
}