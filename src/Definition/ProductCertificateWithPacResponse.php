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
    protected ?string $externalId = null;
    /**
     * Certificate's code
     *
     * @var int
     */
    protected ?int $certificateCode = null;
    /**
     * Certificate's index
     *
     * @var int
     */
    protected ?int $certificateIndex = null;
    /**
     * Date of qualification (in milliseconds since the Unix Epoch)
     *
     * @var int
     */
    protected ?int $qualificationTime = null;
    /**
     * Report number
     *
     * @var string
     */
    protected ?string $reportNumber = null;
    /**
     * Input sensitivity
     *
     * @var int
     */
    protected ?int $inputSensitivity = null;
    /**
     * true if the payload will be encrypted
     *
     * @var bool
     */
    protected ?bool $encryptionPayload = null;
    /**
     * DevKit Flag
     *
     * @var bool
     */
    protected ?bool $devKit = null;
    /**
     * List of modes of the certificate [1=DOWNLINK, 2=MONARCH]
     *
     * @var int[]
     */
    protected ?array $modes = null;
    /** @var RadioConfiguration[] */
    protected ?array $standards = null;
    /** @var ProductCertificateRadioConfiguration[] */
    protected ?array $standardCfgs = null;
    /**
     * @param string $externalId External Id of the certificate
     */
    function setExternalId(?string $externalId)
    {
        $this->externalId = $externalId;
    }
    /**
     * @return string External Id of the certificate
     */
    function getExternalId() : ?string
    {
        return $this->externalId;
    }
    /**
     * @param int $certificateCode Certificate's code
     */
    function setCertificateCode(?int $certificateCode)
    {
        $this->certificateCode = $certificateCode;
    }
    /**
     * @return int Certificate's code
     */
    function getCertificateCode() : ?int
    {
        return $this->certificateCode;
    }
    /**
     * @param int $certificateIndex Certificate's index
     */
    function setCertificateIndex(?int $certificateIndex)
    {
        $this->certificateIndex = $certificateIndex;
    }
    /**
     * @return int Certificate's index
     */
    function getCertificateIndex() : ?int
    {
        return $this->certificateIndex;
    }
    /**
     * @param int $qualificationTime Date of qualification (in milliseconds since the Unix Epoch)
     */
    function setQualificationTime(?int $qualificationTime)
    {
        $this->qualificationTime = $qualificationTime;
    }
    /**
     * @return int Date of qualification (in milliseconds since the Unix Epoch)
     */
    function getQualificationTime() : ?int
    {
        return $this->qualificationTime;
    }
    /**
     * @param string $reportNumber Report number
     */
    function setReportNumber(?string $reportNumber)
    {
        $this->reportNumber = $reportNumber;
    }
    /**
     * @return string Report number
     */
    function getReportNumber() : ?string
    {
        return $this->reportNumber;
    }
    /**
     * @param int $inputSensitivity Input sensitivity
     */
    function setInputSensitivity(?int $inputSensitivity)
    {
        $this->inputSensitivity = $inputSensitivity;
    }
    /**
     * @return int Input sensitivity
     */
    function getInputSensitivity() : ?int
    {
        return $this->inputSensitivity;
    }
    /**
     * @param bool $encryptionPayload true if the payload will be encrypted
     */
    function setEncryptionPayload(?bool $encryptionPayload)
    {
        $this->encryptionPayload = $encryptionPayload;
    }
    /**
     * @return bool true if the payload will be encrypted
     */
    function getEncryptionPayload() : ?bool
    {
        return $this->encryptionPayload;
    }
    /**
     * @param bool $devKit DevKit Flag
     */
    function setDevKit(?bool $devKit)
    {
        $this->devKit = $devKit;
    }
    /**
     * @return bool DevKit Flag
     */
    function getDevKit() : ?bool
    {
        return $this->devKit;
    }
    /**
     * @param int[] $modes List of modes of the certificate [1=DOWNLINK, 2=MONARCH]
     */
    function setModes(?array $modes)
    {
        $this->modes = $modes;
    }
    /**
     * @return int[] List of modes of the certificate [1=DOWNLINK, 2=MONARCH]
     */
    function getModes() : ?array
    {
        return $this->modes;
    }
    /**
     * @param RadioConfiguration[] standards
     */
    function setStandards(?array $standards)
    {
        $this->standards = $standards;
    }
    /**
     * @return RadioConfiguration[] standards
     */
    function getStandards() : ?array
    {
        return $this->standards;
    }
    /**
     * @param ProductCertificateRadioConfiguration[] standardCfgs
     */
    function setStandardCfgs(?array $standardCfgs)
    {
        $this->standardCfgs = $standardCfgs;
    }
    /**
     * @return ProductCertificateRadioConfiguration[] standardCfgs
     */
    function getStandardCfgs() : ?array
    {
        return $this->standardCfgs;
    }
}