<?php

namespace Arimac\Sigfox\Definition;

/**
 * Defines the common properties of a certificate
 */
class CommonCertificate
{
    /**
     * The certificate's identifier
     */
    protected string $id;
    /**
     * The certificate's name
     */
    protected ?string $name;
    /**
     * The certificate's status code (0 -> ongoing, 1 -> finalized)
     */
    protected int $status;
    /**
     * The certificate's key
     */
    protected string $key;
    /**
     * The certificate's version
     */
    protected string $version;
    /**
     * The certificate description
     */
    protected string $description;
}