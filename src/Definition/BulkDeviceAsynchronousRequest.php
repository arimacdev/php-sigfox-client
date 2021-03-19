<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CertificateUpdate;
/**
 * Defines the the common information shared by the devices created in an ansychronous bulk request
 */
class BulkDeviceAsynchronousRequest
{
    /**
     * The identifier of the device type under which the new devices will be created
     *
     * @var string
     */
    protected string $deviceTypeId;
    /** @var CertificateUpdate */
    protected ?CertificateUpdate $productCertificate;
    /**
     * Value describing if the devices are prototypes
     *
     * @var bool
     */
    protected ?bool $prototype;
    /**
     * Prefix to used in device name
     *
     * @var string
     */
    protected ?string $prefix;
    /** @var array */
    protected ?array $data;
}