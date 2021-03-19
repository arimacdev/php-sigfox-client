<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonDevice;
use Arimac\Sigfox\Definition\MinDeviceType;
use Arimac\Sigfox\Definition\MinContractInfo;
use Arimac\Sigfox\Definition\MinGroup;
use Arimac\Sigfox\Definition\Certificate;
use Arimac\Sigfox\Definition\Certificate;
use Arimac\Sigfox\Definition\DeviceLocation;
use Arimac\Sigfox\Definition\LastComputedLocation;
use Arimac\Sigfox\Definition\Token;
use Arimac\Sigfox\Definition\Actions;
use Arimac\Sigfox\Definition\Resources;
/**
 * Defines the device's properties
 */
class Device extends CommonDevice
{
    /** LIMIT */
    public const LQI_LIMIT = 0;
    /** AVERAGE */
    public const LQI_AVERAGE = 1;
    /** GOOD */
    public const LQI_GOOD = 2;
    /** EXCELLENT */
    public const LQI_EXCELLENT = 3;
    /** NA */
    public const LQI_NA = 4;
    /** OK */
    public const STATE_OK = 0;
    /** DEAD */
    public const STATE_DEAD = 1;
    /** OFF_CONTRACT */
    public const STATE_OFF_CONTRACT = 2;
    /** DISABLED */
    public const STATE_DISABLED = 3;
    /** WARN */
    public const STATE_WARN = 4;
    /** DELETED */
    public const STATE_DELETED = 5;
    /** SUSPENDED */
    public const STATE_SUSPENDED = 6;
    /** NOT_ACTIVABLE */
    public const STATE_NOT_ACTIVABLE = 7;
    /** NO */
    public const COM_STATE_NO = 0;
    /** OK */
    public const COM_STATE_OK = 1;
    /** WARN */
    public const COM_STATE_WARN = 2;
    /** KO */
    public const COM_STATE_KO = 3;
    /** (na) */
    public const COM_STATE_ = 4;
    /** NOT_SEEN */
    public const COM_STATE_NOT_SEEN = 5;
    /** ALLOWED */
    public const AUTOMATIC_RENEWAL_STATUS_ALLOWED = 0;
    /** NOT_ALLOWED */
    public const AUTOMATIC_RENEWAL_STATUS_NOT_ALLOWED = 1;
    /** RENEWED */
    public const AUTOMATIC_RENEWAL_STATUS_RENEWED = 2;
    /** ENDED */
    public const AUTOMATIC_RENEWAL_STATUS_ENDED = 3;
    /**
     * Can the device communicate using satellite communication
     *
     * @var bool
     */
    protected ?bool $satelliteCapable;
    /**
     * Has the device repeater function
     *
     * @var bool
     */
    protected ?bool $repeater;
    /**
     * The message modulo
     *
     * @var int
     */
    protected ?int $messageModulo;
    /** @var MinDeviceType */
    protected ?MinDeviceType $deviceType;
    /** @var MinContractInfo */
    protected ?MinContractInfo $contract;
    /** @var MinGroup */
    protected ?MinGroup $group;
    /** @var Certificate */
    protected ?Certificate $modemCertificate;
    /**
     * The device is a prototype
     *
     * @var bool
     */
    protected ?bool $prototype;
    /** @var Certificate */
    protected ?Certificate $productCertificate;
    /** @var DeviceLocation */
    protected ?DeviceLocation $location;
    /** @var LastComputedLocation */
    protected ?LastComputedLocation $lastComputedLocation;
    /**
     * The device's PAC (Porting Access Code)
     *
     * @var string
     */
    protected string $pac;
    /**
     * The last device's sequence number.
     * Absent if the device has never communicated or if the SIGFOX message protocol is V0
     *
     * @var int
     */
    protected ?int $sequenceNumber;
    /**
     * The last trashed device's sequence number.
     * Absent if there is no message trashed or if the SIGFOX message protocol is V0
     *
     * @var int
     */
    protected ?int $trashSequenceNumber;
    /**
     * The last time (in milliseconds since the Unix Epoch) the device has communicated
     *
     * @var int
     */
    protected ?int $lastCom;
    /**
     * Link Quality Indicator
     * - `Device::LQI_LIMIT`
     * - `Device::LQI_AVERAGE`
     * - `Device::LQI_GOOD`
     * - `Device::LQI_EXCELLENT`
     * - `Device::LQI_NA`
     *
     * @var int
     */
    protected ?int $lqi;
    /**
     * The device's activation time (in milliseconds since the Unix Epoch)
     *
     * @var int
     */
    protected ?int $activationTime;
    /**
     * The device's provisionning time (in milliseconds since the Unix Epoch)
     *
     * @var int
     */
    protected int $creationTime;
    /**
     * State of this device.
     * - `Device::STATE_OK`
     * - `Device::STATE_DEAD`
     * - `Device::STATE_OFF_CONTRACT`
     * - `Device::STATE_DISABLED`
     * - `Device::STATE_WARN`
     * - `Device::STATE_DELETED`
     * - `Device::STATE_SUSPENDED`
     * - `Device::STATE_NOT_ACTIVABLE`
     *
     * @var int
     */
    protected int $state;
    /**
     * Communication state of this device.
     * - `Device::COM_STATE_NO`
     * - `Device::COM_STATE_OK`
     * - `Device::COM_STATE_WARN`
     * - `Device::COM_STATE_KO`
     * - `Device::COM_STATE_`
     * - `Device::COM_STATE_NOT_SEEN`
     *
     * @var int
     */
    protected int $comState;
    /** @var Token */
    protected ?Token $token;
    /**
     * The device's unsubscription time (in milliseconds since the Unix Epoch)
     *
     * @var int
     */
    protected ?int $unsubscriptionTime;
    /**
     * The id of device's creator user
     *
     * @var string
     */
    protected ?string $createdBy;
    /**
     * Date of the last edition of this device (in milliseconds since the Unix Epoch)
     *
     * @var int
     */
    protected ?int $lastEditionTime;
    /**
     * The id of device's last editor user
     *
     * @var string
     */
    protected ?string $lastEditedBy;
    /**
     * Allow token renewal ?
     *
     * @var bool
     */
    protected bool $automaticRenewal;
    /**
     * Computed automatic renewal status.
     * - `Device::AUTOMATIC_RENEWAL_STATUS_ALLOWED`
     * - `Device::AUTOMATIC_RENEWAL_STATUS_NOT_ALLOWED`
     * - `Device::AUTOMATIC_RENEWAL_STATUS_RENEWED`
     * - `Device::AUTOMATIC_RENEWAL_STATUS_ENDED`
     *
     * @var int
     */
    protected ?int $automaticRenewalStatus;
    /**
     * true if the device is activable and can take a token
     *
     * @var bool
     */
    protected ?bool $activable;
    /** @var Actions */
    protected ?Actions $actions;
    /** @var Resources */
    protected ?Resources $resources;
}