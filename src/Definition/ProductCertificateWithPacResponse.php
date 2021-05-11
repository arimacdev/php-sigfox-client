<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
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
    /**
     * @var RadioConfiguration[]
     */
    protected ?array $standards = null;
    /**
     * @var ProductCertificateRadioConfiguration[]
     */
    protected ?array $standardCfgs = null;
    protected $serialize = array(new PrimitiveSerializer(self::class, 'externalId', 'string'), new PrimitiveSerializer(self::class, 'certificateCode', 'int'), new PrimitiveSerializer(self::class, 'certificateIndex', 'int'), new PrimitiveSerializer(self::class, 'qualificationTime', 'int'), new PrimitiveSerializer(self::class, 'reportNumber', 'string'), new PrimitiveSerializer(self::class, 'inputSensitivity', 'int'), new PrimitiveSerializer(self::class, 'encryptionPayload', 'bool'), new PrimitiveSerializer(self::class, 'devKit', 'bool'), new ArraySerializer(self::class, 'modes', new PrimitiveSerializer(self::class, 'modes', 'int')), new ArraySerializer(self::class, 'standards', new ClassSerializer(self::class, 'standards', RadioConfiguration::class)), new ArraySerializer(self::class, 'standardCfgs', new ClassSerializer(self::class, 'standardCfgs', ProductCertificateRadioConfiguration::class)));
    /**
     * Setter for externalId
     *
     * @param string $externalId External Id of the certificate
     *
     * @return self To use in method chains
     */
    public function setExternalId(?string $externalId) : self
    {
        $this->externalId = $externalId;
        return $this;
    }
    /**
     * Getter for externalId
     *
     * @return string External Id of the certificate
     */
    public function getExternalId() : string
    {
        return $this->externalId;
    }
    /**
     * Setter for certificateCode
     *
     * @param int $certificateCode Certificate's code
     *
     * @return self To use in method chains
     */
    public function setCertificateCode(?int $certificateCode) : self
    {
        $this->certificateCode = $certificateCode;
        return $this;
    }
    /**
     * Getter for certificateCode
     *
     * @return int Certificate's code
     */
    public function getCertificateCode() : int
    {
        return $this->certificateCode;
    }
    /**
     * Setter for certificateIndex
     *
     * @param int $certificateIndex Certificate's index
     *
     * @return self To use in method chains
     */
    public function setCertificateIndex(?int $certificateIndex) : self
    {
        $this->certificateIndex = $certificateIndex;
        return $this;
    }
    /**
     * Getter for certificateIndex
     *
     * @return int Certificate's index
     */
    public function getCertificateIndex() : int
    {
        return $this->certificateIndex;
    }
    /**
     * Setter for qualificationTime
     *
     * @param int $qualificationTime Date of qualification (in milliseconds since the Unix Epoch)
     *
     * @return self To use in method chains
     */
    public function setQualificationTime(?int $qualificationTime) : self
    {
        $this->qualificationTime = $qualificationTime;
        return $this;
    }
    /**
     * Getter for qualificationTime
     *
     * @return int Date of qualification (in milliseconds since the Unix Epoch)
     */
    public function getQualificationTime() : int
    {
        return $this->qualificationTime;
    }
    /**
     * Setter for reportNumber
     *
     * @param string $reportNumber Report number
     *
     * @return self To use in method chains
     */
    public function setReportNumber(?string $reportNumber) : self
    {
        $this->reportNumber = $reportNumber;
        return $this;
    }
    /**
     * Getter for reportNumber
     *
     * @return string Report number
     */
    public function getReportNumber() : string
    {
        return $this->reportNumber;
    }
    /**
     * Setter for inputSensitivity
     *
     * @param int $inputSensitivity Input sensitivity
     *
     * @return self To use in method chains
     */
    public function setInputSensitivity(?int $inputSensitivity) : self
    {
        $this->inputSensitivity = $inputSensitivity;
        return $this;
    }
    /**
     * Getter for inputSensitivity
     *
     * @return int Input sensitivity
     */
    public function getInputSensitivity() : int
    {
        return $this->inputSensitivity;
    }
    /**
     * Setter for encryptionPayload
     *
     * @param bool $encryptionPayload true if the payload will be encrypted
     *
     * @return self To use in method chains
     */
    public function setEncryptionPayload(?bool $encryptionPayload) : self
    {
        $this->encryptionPayload = $encryptionPayload;
        return $this;
    }
    /**
     * Getter for encryptionPayload
     *
     * @return bool true if the payload will be encrypted
     */
    public function getEncryptionPayload() : bool
    {
        return $this->encryptionPayload;
    }
    /**
     * Setter for devKit
     *
     * @param bool $devKit DevKit Flag
     *
     * @return self To use in method chains
     */
    public function setDevKit(?bool $devKit) : self
    {
        $this->devKit = $devKit;
        return $this;
    }
    /**
     * Getter for devKit
     *
     * @return bool DevKit Flag
     */
    public function getDevKit() : bool
    {
        return $this->devKit;
    }
    /**
     * Setter for modes
     *
     * @param int[] $modes List of modes of the certificate [1=DOWNLINK, 2=MONARCH]
     *
     * @return self To use in method chains
     */
    public function setModes(?array $modes) : self
    {
        $this->modes = $modes;
        return $this;
    }
    /**
     * Getter for modes
     *
     * @return int[] List of modes of the certificate [1=DOWNLINK, 2=MONARCH]
     */
    public function getModes() : array
    {
        return $this->modes;
    }
    /**
     * Setter for standards
     *
     * @param RadioConfiguration[] $standards
     *
     * @return self To use in method chains
     */
    public function setStandards(?array $standards) : self
    {
        $this->standards = $standards;
        return $this;
    }
    /**
     * Getter for standards
     *
     * @return RadioConfiguration[]
     */
    public function getStandards() : array
    {
        return $this->standards;
    }
    /**
     * Setter for standardCfgs
     *
     * @param ProductCertificateRadioConfiguration[] $standardCfgs
     *
     * @return self To use in method chains
     */
    public function setStandardCfgs(?array $standardCfgs) : self
    {
        $this->standardCfgs = $standardCfgs;
        return $this;
    }
    /**
     * Getter for standardCfgs
     *
     * @return ProductCertificateRadioConfiguration[]
     */
    public function getStandardCfgs() : array
    {
        return $this->standardCfgs;
    }
}