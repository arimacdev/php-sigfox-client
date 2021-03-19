<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CallbackEmail;
use Arimac\Sigfox\Definition\CallbackHTTP;
class CallbackMedium extends CallbackHTTP
{
    use CallbackEmail;
}