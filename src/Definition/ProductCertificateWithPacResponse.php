<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonCertificate;
use Arimac\Sigfox\Definition\RadioConfiguration;
use Arimac\Sigfox\Definition\ProductCertificateRadioConfiguration;
class ProductCertificateWithPacResponse extends CommonCertificate
{
    /**
     * External Id of the certificate
     *
     * @var string
     */
    protected string $externalId;
    /**
     * Certificate's code
     *
     * @var int
     */
    protected int $certificateCode;
    /**
     * Certificate's index
     *
     * @var int
     */
    protected int $certificateIndex;
    /**
     * Date of qualification (in milliseconds since the Unix Epoch)
     *
     * @var int
     */
    protected int $qualificationTime;
    /**
     * Report number
     *
     * @var string
     */
    protected string $reportNumber;
    /**
     * Input sensitivity
     *
     * @var int
     */
    protected int $inputSensitivity;
    /**
     * true if the payload will be encrypted
     *
     * @var bool
     */
    protected bool $encryptionPayload;
    /**
     * DevKit Flag
     *
     * @var bool
     */
    protected bool $devKit;
    /**
     * List of modes of the certificate [1=DOWNLINK, 2=MONARCH]
     *
     * @var int[]
     */
    protected array $modes;
    /** @var RadioConfiguration[] */
    protected array $standards;
    /** @var ProductCertificateRadioConfiguration[] */
    protected array $standardCfgs;
}