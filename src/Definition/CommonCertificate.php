<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\MinGroup;
/**
 * Defines the common properties of a certificate
 */
class CommonCertificate
{
    /**
     * The certificate's identifier
     *
     * @var string
     */
    protected ?string $id;
    /**
     * The certificate's name
     *
     * @var string
     */
    protected string $name;
    /**
     * The certificate's status code (0 -> ongoing, 1 -> finalized)
     *
     * @var int
     */
    protected ?int $status;
    /**
     * The certificate's key
     *
     * @var string
     */
    protected ?string $key;
    /** @var MinGroup */
    protected ?MinGroup $manufacturer;
    /**
     * The certificate's version
     *
     * @var string
     */
    protected ?string $version;
    /**
     * The certificate description
     *
     * @var string
     */
    protected ?string $description;
}