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
    /**
     * @param bool satelliteCapable Can the device communicate using satellite communication
     */
    function setSatelliteCapable(?bool $satelliteCapable)
    {
        $this->satelliteCapable = $satelliteCapable;
    }
    /**
     * @return bool Can the device communicate using satellite communication
     */
    function getSatelliteCapable() : ?bool
    {
        return $this->satelliteCapable;
    }
    /**
     * @param bool repeater Has the device repeater function
     */
    function setRepeater(?bool $repeater)
    {
        $this->repeater = $repeater;
    }
    /**
     * @return bool Has the device repeater function
     */
    function getRepeater() : ?bool
    {
        return $this->repeater;
    }
    /**
     * @param int messageModulo The message modulo
     */
    function setMessageModulo(?int $messageModulo)
    {
        $this->messageModulo = $messageModulo;
    }
    /**
     * @return int The message modulo
     */
    function getMessageModulo() : ?int
    {
        return $this->messageModulo;
    }
    /**
     * @param MinDeviceType deviceType
     */
    function setDeviceType(?MinDeviceType $deviceType)
    {
        $this->deviceType = $deviceType;
    }
    /**
     * @return MinDeviceType deviceType
     */
    function getDeviceType() : ?MinDeviceType
    {
        return $this->deviceType;
    }
    /**
     * @param MinContractInfo contract
     */
    function setContract(?MinContractInfo $contract)
    {
        $this->contract = $contract;
    }
    /**
     * @return MinContractInfo contract
     */
    function getContract() : ?MinContractInfo
    {
        return $this->contract;
    }
    /**
     * @param MinGroup group
     */
    function setGroup(?MinGroup $group)
    {
        $this->group = $group;
    }
    /**
     * @return MinGroup group
     */
    function getGroup() : ?MinGroup
    {
        return $this->group;
    }
    /**
     * @param Certificate modemCertificate
     */
    function setModemCertificate(?Certificate $modemCertificate)
    {
        $this->modemCertificate = $modemCertificate;
    }
    /**
     * @return Certificate modemCertificate
     */
    function getModemCertificate() : ?Certificate
    {
        return $this->modemCertificate;
    }
    /**
     * @param bool prototype The device is a prototype
     */
    function setPrototype(?bool $prototype)
    {
        $this->prototype = $prototype;
    }
    /**
     * @return bool The device is a prototype
     */
    function getPrototype() : ?bool
    {
        return $this->prototype;
    }
    /**
     * @param Certificate productCertificate
     */
    function setProductCertificate(?Certificate $productCertificate)
    {
        $this->productCertificate = $productCertificate;
    }
    /**
     * @return Certificate productCertificate
     */
    function getProductCertificate() : ?Certificate
    {
        return $this->productCertificate;
    }
    /**
     * @param DeviceLocation location
     */
    function setLocation(?DeviceLocation $location)
    {
        $this->location = $location;
    }
    /**
     * @return DeviceLocation location
     */
    function getLocation() : ?DeviceLocation
    {
        return $this->location;
    }
    /**
     * @param LastComputedLocation lastComputedLocation
     */
    function setLastComputedLocation(?LastComputedLocation $lastComputedLocation)
    {
        $this->lastComputedLocation = $lastComputedLocation;
    }
    /**
     * @return LastComputedLocation lastComputedLocation
     */
    function getLastComputedLocation() : ?LastComputedLocation
    {
        return $this->lastComputedLocation;
    }
    /**
     * @param string pac The device's PAC (Porting Access Code)
     */
    function setPac(string $pac)
    {
        $this->pac = $pac;
    }
    /**
     * @return string The device's PAC (Porting Access Code)
     */
    function getPac() : string
    {
        return $this->pac;
    }
    /**
     * @param int sequenceNumber The last device's sequence number.
     * Absent if the device has never communicated or if the SIGFOX message protocol is V0
     */
    function setSequenceNumber(?int $sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
    }
    /**
     * @return int The last device's sequence number.
     * Absent if the device has never communicated or if the SIGFOX message protocol is V0
     */
    function getSequenceNumber() : ?int
    {
        return $this->sequenceNumber;
    }
    /**
     * @param int trashSequenceNumber The last trashed device's sequence number.
     * Absent if there is no message trashed or if the SIGFOX message protocol is V0
     */
    function setTrashSequenceNumber(?int $trashSequenceNumber)
    {
        $this->trashSequenceNumber = $trashSequenceNumber;
    }
    /**
     * @return int The last trashed device's sequence number.
     * Absent if there is no message trashed or if the SIGFOX message protocol is V0
     */
    function getTrashSequenceNumber() : ?int
    {
        return $this->trashSequenceNumber;
    }
    /**
     * @param int lastCom The last time (in milliseconds since the Unix Epoch) the device has communicated
     */
    function setLastCom(?int $lastCom)
    {
        $this->lastCom = $lastCom;
    }
    /**
     * @return int The last time (in milliseconds since the Unix Epoch) the device has communicated
     */
    function getLastCom() : ?int
    {
        return $this->lastCom;
    }
    /**
     * @param int lqi Link Quality Indicator
     * - `Device::LQI_LIMIT`
     * - `Device::LQI_AVERAGE`
     * - `Device::LQI_GOOD`
     * - `Device::LQI_EXCELLENT`
     * - `Device::LQI_NA`
     */
    function setLqi(?int $lqi)
    {
        $this->lqi = $lqi;
    }
    /**
     * @return int Link Quality Indicator
     * - `Device::LQI_LIMIT`
     * - `Device::LQI_AVERAGE`
     * - `Device::LQI_GOOD`
     * - `Device::LQI_EXCELLENT`
     * - `Device::LQI_NA`
     */
    function getLqi() : ?int
    {
        return $this->lqi;
    }
    /**
     * @param int activationTime The device's activation time (in milliseconds since the Unix Epoch)
     */
    function setActivationTime(?int $activationTime)
    {
        $this->activationTime = $activationTime;
    }
    /**
     * @return int The device's activation time (in milliseconds since the Unix Epoch)
     */
    function getActivationTime() : ?int
    {
        return $this->activationTime;
    }
    /**
     * @param int creationTime The device's provisionning time (in milliseconds since the Unix Epoch)
     */
    function setCreationTime(int $creationTime)
    {
        $this->creationTime = $creationTime;
    }
    /**
     * @return int The device's provisionning time (in milliseconds since the Unix Epoch)
     */
    function getCreationTime() : int
    {
        return $this->creationTime;
    }
    /**
     * @param int state State of this device.
     * - `Device::STATE_OK`
     * - `Device::STATE_DEAD`
     * - `Device::STATE_OFF_CONTRACT`
     * - `Device::STATE_DISABLED`
     * - `Device::STATE_WARN`
     * - `Device::STATE_DELETED`
     * - `Device::STATE_SUSPENDED`
     * - `Device::STATE_NOT_ACTIVABLE`
     */
    function setState(int $state)
    {
        $this->state = $state;
    }
    /**
     * @return int State of this device.
     * - `Device::STATE_OK`
     * - `Device::STATE_DEAD`
     * - `Device::STATE_OFF_CONTRACT`
     * - `Device::STATE_DISABLED`
     * - `Device::STATE_WARN`
     * - `Device::STATE_DELETED`
     * - `Device::STATE_SUSPENDED`
     * - `Device::STATE_NOT_ACTIVABLE`
     */
    function getState() : int
    {
        return $this->state;
    }
    /**
     * @param int comState Communication state of this device.
     * - `Device::COM_STATE_NO`
     * - `Device::COM_STATE_OK`
     * - `Device::COM_STATE_WARN`
     * - `Device::COM_STATE_KO`
     * - `Device::COM_STATE_`
     * - `Device::COM_STATE_NOT_SEEN`
     */
    function setComState(int $comState)
    {
        $this->comState = $comState;
    }
    /**
     * @return int Communication state of this device.
     * - `Device::COM_STATE_NO`
     * - `Device::COM_STATE_OK`
     * - `Device::COM_STATE_WARN`
     * - `Device::COM_STATE_KO`
     * - `Device::COM_STATE_`
     * - `Device::COM_STATE_NOT_SEEN`
     */
    function getComState() : int
    {
        return $this->comState;
    }
    /**
     * @param Token token
     */
    function setToken(?Token $token)
    {
        $this->token = $token;
    }
    /**
     * @return Token token
     */
    function getToken() : ?Token
    {
        return $this->token;
    }
    /**
     * @param int unsubscriptionTime The device's unsubscription time (in milliseconds since the Unix Epoch)
     */
    function setUnsubscriptionTime(?int $unsubscriptionTime)
    {
        $this->unsubscriptionTime = $unsubscriptionTime;
    }
    /**
     * @return int The device's unsubscription time (in milliseconds since the Unix Epoch)
     */
    function getUnsubscriptionTime() : ?int
    {
        return $this->unsubscriptionTime;
    }
    /**
     * @param string createdBy The id of device's creator user
     */
    function setCreatedBy(?string $createdBy)
    {
        $this->createdBy = $createdBy;
    }
    /**
     * @return string The id of device's creator user
     */
    function getCreatedBy() : ?string
    {
        return $this->createdBy;
    }
    /**
     * @param int lastEditionTime Date of the last edition of this device (in milliseconds since the Unix Epoch)
     */
    function setLastEditionTime(?int $lastEditionTime)
    {
        $this->lastEditionTime = $lastEditionTime;
    }
    /**
     * @return int Date of the last edition of this device (in milliseconds since the Unix Epoch)
     */
    function getLastEditionTime() : ?int
    {
        return $this->lastEditionTime;
    }
    /**
     * @param string lastEditedBy The id of device's last editor user
     */
    function setLastEditedBy(?string $lastEditedBy)
    {
        $this->lastEditedBy = $lastEditedBy;
    }
    /**
     * @return string The id of device's last editor user
     */
    function getLastEditedBy() : ?string
    {
        return $this->lastEditedBy;
    }
    /**
     * @param bool automaticRenewal Allow token renewal ?
     */
    function setAutomaticRenewal(bool $automaticRenewal)
    {
        $this->automaticRenewal = $automaticRenewal;
    }
    /**
     * @return bool Allow token renewal ?
     */
    function getAutomaticRenewal() : bool
    {
        return $this->automaticRenewal;
    }
    /**
     * @param int automaticRenewalStatus Computed automatic renewal status.
     * - `Device::AUTOMATIC_RENEWAL_STATUS_ALLOWED`
     * - `Device::AUTOMATIC_RENEWAL_STATUS_NOT_ALLOWED`
     * - `Device::AUTOMATIC_RENEWAL_STATUS_RENEWED`
     * - `Device::AUTOMATIC_RENEWAL_STATUS_ENDED`
     */
    function setAutomaticRenewalStatus(?int $automaticRenewalStatus)
    {
        $this->automaticRenewalStatus = $automaticRenewalStatus;
    }
    /**
     * @return int Computed automatic renewal status.
     * - `Device::AUTOMATIC_RENEWAL_STATUS_ALLOWED`
     * - `Device::AUTOMATIC_RENEWAL_STATUS_NOT_ALLOWED`
     * - `Device::AUTOMATIC_RENEWAL_STATUS_RENEWED`
     * - `Device::AUTOMATIC_RENEWAL_STATUS_ENDED`
     */
    function getAutomaticRenewalStatus() : ?int
    {
        return $this->automaticRenewalStatus;
    }
    /**
     * @param bool activable true if the device is activable and can take a token
     */
    function setActivable(?bool $activable)
    {
        $this->activable = $activable;
    }
    /**
     * @return bool true if the device is activable and can take a token
     */
    function getActivable() : ?bool
    {
        return $this->activable;
    }
    /**
     * @param Actions actions
     */
    function setActions(?Actions $actions)
    {
        $this->actions = $actions;
    }
    /**
     * @return Actions actions
     */
    function getActions() : ?Actions
    {
        return $this->actions;
    }
    /**
     * @param Resources resources
     */
    function setResources(?Resources $resources)
    {
        $this->resources = $resources;
    }
    /**
     * @return Resources resources
     */
    function getResources() : ?Resources
    {
        return $this->resources;
    }
}