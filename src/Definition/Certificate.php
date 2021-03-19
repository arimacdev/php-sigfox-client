<?php

namespace Arimac\Sigfox\Definition;

/**
 * Defines a product or modem certificate type entity
 */
class Certificate
{
    /**
     * The product certificate's identifier
     */
    protected string $id;
    /**
     * The product certificate's name
     */
    protected string $key;
}