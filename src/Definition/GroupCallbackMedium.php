<?php

namespace Arimac\Sigfox\Definition;

/**
 * Callback types
 */
class GroupCallbackMedium extends GroupCallbackHTTP
{
    use GroupCallbackEmail;
}