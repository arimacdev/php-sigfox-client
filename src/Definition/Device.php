<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
/**
 * Defines the device's properties
 */
class Device extends CommonDevice
{
    /**
     * LIMIT
     */
    public const LQI_LIMIT = 0;
    /**
     * AVERAGE
     */
    public const LQI_AVERAGE = 1;
    /**
     * GOOD
     */
    public const LQI_GOOD = 2;
    /**
     * EXCELLENT
     */
    public const LQI_EXCELLENT = 3;
    /**
     * NA
     */
    public const LQI_NA = 4;
    /**
     * OK
     */
    public const STATE_OK = 0;
    /**
     * DEAD
     */
    public const STATE_DEAD = 1;
    /**
     * OFF_CONTRACT
     */
    public const STATE_OFF_CONTRACT = 2;
    /**
     * DISABLED
     */
    public const STATE_DISABLED = 3;
    /**
     * WARN
     */
    public const STATE_WARN = 4;
    /**
     * DELETED
     */
    public const STATE_DELETED = 5;
    /**
     * SUSPENDED
     */
    public const STATE_SUSPENDED = 6;
    /**
     * NOT_ACTIVABLE
     */
    public const STATE_NOT_ACTIVABLE = 7;
    /**
     * NO
     */
    public const COM_STATE_NO = 0;
    /**
     * OK
     */
    public const COM_STATE_OK = 1;
    /**
     * WARN
     */
    public const COM_STATE_WARN = 2;
    /**
     * KO
     */
    public const COM_STATE_KO = 3;
    /**
     * (na)
     */
    public const COM_STATE_NA = 4;
    /**
     * NOT_SEEN
     */
    public const COM_STATE_NOT_SEEN = 5;
    /**
     * ALLOWED
     */
    public const AUTOMATIC_RENEWAL_STATUS_ALLOWED = 0;
    /**
     * NOT_ALLOWED
     */
    public const AUTOMATIC_RENEWAL_STATUS_NOT_ALLOWED = 1;
    /**
     * RENEWED
     */
    public const AUTOMATIC_RENEWAL_STATUS_RENEWED = 2;
    /**
     * ENDED
     */
    public const AUTOMATIC_RENEWAL_STATUS_ENDED = 3;
    /**
     * Can the device communicate using satellite communication
     *
     * @var bool
     */
    protected ?bool $satelliteCapable = null;
    /**
     * Has the device repeater function
     *
     * @var bool
     */
    protected ?bool $repeater = null;
    /**
     * The message modulo
     *
     * @var int
     */
    protected ?int $messageModulo = null;
    /**
     * @var MinDeviceType
     */
    protected ?MinDeviceType $deviceType = null;
    /**
     * @var MinContractInfo
     */
    protected ?MinContractInfo $contract = null;
    /**
     * @var MinGroup
     */
    protected ?MinGroup $group = null;
    /**
     * @var Certificate
     */
    protected ?Certificate $modemCertificate = null;
    /**
     * The device is a prototype
     *
     * @var bool
     */
    protected ?bool $prototype = null;
    /**
     * @var Certificate
     */
    protected ?Certificate $productCertificate = null;
    /**
     * @var DeviceLocation
     */
    protected ?DeviceLocation $location = null;
    /**
     * @var LastComputedLocation
     */
    protected ?LastComputedLocation $lastComputedLocation = null;
    /**
     * The device's PAC (Porting Access Code)
     *
     * @var string
     */
    protected ?string $pac = null;
    /**
     * The last device's sequence number.
     * Absent if the device has never communicated or if the SIGFOX message protocol is V0
     * 
     *
     * @var int
     */
    protected ?int $sequenceNumber = null;
    /**
     * The last trashed device's sequence number.
     * Absent if there is no message trashed or if the SIGFOX message protocol is V0
     * 
     *
     * @var int
     */
    protected ?int $trashSequenceNumber = null;
    /**
     * The last time (in milliseconds since the Unix Epoch) the device has communicated
     *
     * @var int
     */
    protected ?int $lastCom = null;
    /**
     * Link Quality Indicator
     *
     * @var self::LQI_*
     */
    protected ?int $lqi = null;
    /**
     * The device's activation time (in milliseconds since the Unix Epoch)
     *
     * @var int
     */
    protected ?int $activationTime = null;
    /**
     * The device's provisionning time (in milliseconds since the Unix Epoch)
     *
     * @var int
     */
    protected ?int $creationTime = null;
    /**
     * State of this device.
     *
     * @var self::STATE_*
     */
    protected ?int $state = null;
    /**
     * Communication state of this device.
     *
     * @var self::COM_STATE_*
     */
    protected ?int $comState = null;
    /**
     * @var Token
     */
    protected ?Token $token = null;
    /**
     * The device's unsubscription time (in milliseconds since the Unix Epoch)
     *
     * @var int
     */
    protected ?int $unsubscriptionTime = null;
    /**
     * The id of device's creator user
     *
     * @var string
     */
    protected ?string $createdBy = null;
    /**
     * Date of the last edition of this device (in milliseconds since the Unix Epoch)
     *
     * @var int
     */
    protected ?int $lastEditionTime = null;
    /**
     * The id of device's last editor user
     *
     * @var string
     */
    protected ?string $lastEditedBy = null;
    /**
     * Allow token renewal ?
     *
     * @var bool
     */
    protected ?bool $automaticRenewal = null;
    /**
     * Computed automatic renewal status.
     *
     * @var self::AUTOMATIC_RENEWAL_STATUS_*
     */
    protected ?int $automaticRenewalStatus = null;
    /**
     * true if the device is activable and can take a token
     *
     * @var bool
     */
    protected ?bool $activable = null;
    /**
     * @var string[]
     */
    protected ?array $actions = null;
    /**
     * @var string[]
     */
    protected ?array $resources = null;
    protected $serialize = array('deviceType' => MinDeviceType::class, 'contract' => MinContractInfo::class, 'group' => MinGroup::class, 'modemCertificate' => Certificate::class, 'productCertificate' => Certificate::class, 'location' => DeviceLocation::class, 'lastComputedLocation' => LastComputedLocation::class, 'token' => Token::class);
    /**
     * Setter for satelliteCapable
     *
     * @param bool $satelliteCapable Can the device communicate using satellite communication
     *
     * @return self To use in method chains
     */
    public function setSatelliteCapable(?bool $satelliteCapable) : self
    {
        $this->satelliteCapable = $satelliteCapable;
        return $this;
    }
    /**
     * Getter for satelliteCapable
     *
     * @return bool Can the device communicate using satellite communication
     */
    public function getSatelliteCapable() : bool
    {
        return $this->satelliteCapable;
    }
    /**
     * Setter for repeater
     *
     * @param bool $repeater Has the device repeater function
     *
     * @return self To use in method chains
     */
    public function setRepeater(?bool $repeater) : self
    {
        $this->repeater = $repeater;
        return $this;
    }
    /**
     * Getter for repeater
     *
     * @return bool Has the device repeater function
     */
    public function getRepeater() : bool
    {
        return $this->repeater;
    }
    /**
     * Setter for messageModulo
     *
     * @param int $messageModulo The message modulo
     *
     * @return self To use in method chains
     */
    public function setMessageModulo(?int $messageModulo) : self
    {
        $this->messageModulo = $messageModulo;
        return $this;
    }
    /**
     * Getter for messageModulo
     *
     * @return int The message modulo
     */
    public function getMessageModulo() : int
    {
        return $this->messageModulo;
    }
    /**
     * Setter for deviceType
     *
     * @param MinDeviceType $deviceType
     *
     * @return self To use in method chains
     */
    public function setDeviceType(?MinDeviceType $deviceType) : self
    {
        $this->deviceType = $deviceType;
        return $this;
    }
    /**
     * Getter for deviceType
     *
     * @return MinDeviceType
     */
    public function getDeviceType() : MinDeviceType
    {
        return $this->deviceType;
    }
    /**
     * Setter for contract
     *
     * @param MinContractInfo $contract
     *
     * @return self To use in method chains
     */
    public function setContract(?MinContractInfo $contract) : self
    {
        $this->contract = $contract;
        return $this;
    }
    /**
     * Getter for contract
     *
     * @return MinContractInfo
     */
    public function getContract() : MinContractInfo
    {
        return $this->contract;
    }
    /**
     * Setter for group
     *
     * @param MinGroup $group
     *
     * @return self To use in method chains
     */
    public function setGroup(?MinGroup $group) : self
    {
        $this->group = $group;
        return $this;
    }
    /**
     * Getter for group
     *
     * @return MinGroup
     */
    public function getGroup() : MinGroup
    {
        return $this->group;
    }
    /**
     * Setter for modemCertificate
     *
     * @param Certificate $modemCertificate
     *
     * @return self To use in method chains
     */
    public function setModemCertificate(?Certificate $modemCertificate) : self
    {
        $this->modemCertificate = $modemCertificate;
        return $this;
    }
    /**
     * Getter for modemCertificate
     *
     * @return Certificate
     */
    public function getModemCertificate() : Certificate
    {
        return $this->modemCertificate;
    }
    /**
     * Setter for prototype
     *
     * @param bool $prototype The device is a prototype
     *
     * @return self To use in method chains
     */
    public function setPrototype(?bool $prototype) : self
    {
        $this->prototype = $prototype;
        return $this;
    }
    /**
     * Getter for prototype
     *
     * @return bool The device is a prototype
     */
    public function getPrototype() : bool
    {
        return $this->prototype;
    }
    /**
     * Setter for productCertificate
     *
     * @param Certificate $productCertificate
     *
     * @return self To use in method chains
     */
    public function setProductCertificate(?Certificate $productCertificate) : self
    {
        $this->productCertificate = $productCertificate;
        return $this;
    }
    /**
     * Getter for productCertificate
     *
     * @return Certificate
     */
    public function getProductCertificate() : Certificate
    {
        return $this->productCertificate;
    }
    /**
     * Setter for location
     *
     * @param DeviceLocation $location
     *
     * @return self To use in method chains
     */
    public function setLocation(?DeviceLocation $location) : self
    {
        $this->location = $location;
        return $this;
    }
    /**
     * Getter for location
     *
     * @return DeviceLocation
     */
    public function getLocation() : DeviceLocation
    {
        return $this->location;
    }
    /**
     * Setter for lastComputedLocation
     *
     * @param LastComputedLocation $lastComputedLocation
     *
     * @return self To use in method chains
     */
    public function setLastComputedLocation(?LastComputedLocation $lastComputedLocation) : self
    {
        $this->lastComputedLocation = $lastComputedLocation;
        return $this;
    }
    /**
     * Getter for lastComputedLocation
     *
     * @return LastComputedLocation
     */
    public function getLastComputedLocation() : LastComputedLocation
    {
        return $this->lastComputedLocation;
    }
    /**
     * Setter for pac
     *
     * @param string $pac The device's PAC (Porting Access Code)
     *
     * @return self To use in method chains
     */
    public function setPac(?string $pac) : self
    {
        $this->pac = $pac;
        return $this;
    }
    /**
     * Getter for pac
     *
     * @return string The device's PAC (Porting Access Code)
     */
    public function getPac() : string
    {
        return $this->pac;
    }
    /**
     * Setter for sequenceNumber
     *
     * @param int $sequenceNumber The last device's sequence number.
     *                            Absent if the device has never communicated or if the SIGFOX message protocol is V0
     *                            
     *
     * @return self To use in method chains
     */
    public function setSequenceNumber(?int $sequenceNumber) : self
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }
    /**
     * Getter for sequenceNumber
     *
     * @return int The last device's sequence number.
     *             Absent if the device has never communicated or if the SIGFOX message protocol is V0
     *             
     */
    public function getSequenceNumber() : int
    {
        return $this->sequenceNumber;
    }
    /**
     * Setter for trashSequenceNumber
     *
     * @param int $trashSequenceNumber The last trashed device's sequence number.
     *                                 Absent if there is no message trashed or if the SIGFOX message protocol is V0
     *                                 
     *
     * @return self To use in method chains
     */
    public function setTrashSequenceNumber(?int $trashSequenceNumber) : self
    {
        $this->trashSequenceNumber = $trashSequenceNumber;
        return $this;
    }
    /**
     * Getter for trashSequenceNumber
     *
     * @return int The last trashed device's sequence number.
     *             Absent if there is no message trashed or if the SIGFOX message protocol is V0
     *             
     */
    public function getTrashSequenceNumber() : int
    {
        return $this->trashSequenceNumber;
    }
    /**
     * Setter for lastCom
     *
     * @param int $lastCom The last time (in milliseconds since the Unix Epoch) the device has communicated
     *
     * @return self To use in method chains
     */
    public function setLastCom(?int $lastCom) : self
    {
        $this->lastCom = $lastCom;
        return $this;
    }
    /**
     * Getter for lastCom
     *
     * @return int The last time (in milliseconds since the Unix Epoch) the device has communicated
     */
    public function getLastCom() : int
    {
        return $this->lastCom;
    }
    /**
     * Setter for lqi
     *
     * @param self::LQI_* $lqi Link Quality Indicator
     *
     * @return self To use in method chains
     */
    public function setLqi(?int $lqi) : self
    {
        $this->lqi = $lqi;
        return $this;
    }
    /**
     * Getter for lqi
     *
     * @return self::LQI_* Link Quality Indicator
     */
    public function getLqi() : int
    {
        return $this->lqi;
    }
    /**
     * Setter for activationTime
     *
     * @param int $activationTime The device's activation time (in milliseconds since the Unix Epoch)
     *
     * @return self To use in method chains
     */
    public function setActivationTime(?int $activationTime) : self
    {
        $this->activationTime = $activationTime;
        return $this;
    }
    /**
     * Getter for activationTime
     *
     * @return int The device's activation time (in milliseconds since the Unix Epoch)
     */
    public function getActivationTime() : int
    {
        return $this->activationTime;
    }
    /**
     * Setter for creationTime
     *
     * @param int $creationTime The device's provisionning time (in milliseconds since the Unix Epoch)
     *
     * @return self To use in method chains
     */
    public function setCreationTime(?int $creationTime) : self
    {
        $this->creationTime = $creationTime;
        return $this;
    }
    /**
     * Getter for creationTime
     *
     * @return int The device's provisionning time (in milliseconds since the Unix Epoch)
     */
    public function getCreationTime() : int
    {
        return $this->creationTime;
    }
    /**
     * Setter for state
     *
     * @param self::STATE_* $state State of this device.
     *
     * @return self To use in method chains
     */
    public function setState(?int $state) : self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * Getter for state
     *
     * @return self::STATE_* State of this device.
     */
    public function getState() : int
    {
        return $this->state;
    }
    /**
     * Setter for comState
     *
     * @param self::COM_STATE_* $comState Communication state of this device.
     *
     * @return self To use in method chains
     */
    public function setComState(?int $comState) : self
    {
        $this->comState = $comState;
        return $this;
    }
    /**
     * Getter for comState
     *
     * @return self::COM_STATE_* Communication state of this device.
     */
    public function getComState() : int
    {
        return $this->comState;
    }
    /**
     * Setter for token
     *
     * @param Token $token
     *
     * @return self To use in method chains
     */
    public function setToken(?Token $token) : self
    {
        $this->token = $token;
        return $this;
    }
    /**
     * Getter for token
     *
     * @return Token
     */
    public function getToken() : Token
    {
        return $this->token;
    }
    /**
     * Setter for unsubscriptionTime
     *
     * @param int $unsubscriptionTime The device's unsubscription time (in milliseconds since the Unix Epoch)
     *
     * @return self To use in method chains
     */
    public function setUnsubscriptionTime(?int $unsubscriptionTime) : self
    {
        $this->unsubscriptionTime = $unsubscriptionTime;
        return $this;
    }
    /**
     * Getter for unsubscriptionTime
     *
     * @return int The device's unsubscription time (in milliseconds since the Unix Epoch)
     */
    public function getUnsubscriptionTime() : int
    {
        return $this->unsubscriptionTime;
    }
    /**
     * Setter for createdBy
     *
     * @param string $createdBy The id of device's creator user
     *
     * @return self To use in method chains
     */
    public function setCreatedBy(?string $createdBy) : self
    {
        $this->createdBy = $createdBy;
        return $this;
    }
    /**
     * Getter for createdBy
     *
     * @return string The id of device's creator user
     */
    public function getCreatedBy() : string
    {
        return $this->createdBy;
    }
    /**
     * Setter for lastEditionTime
     *
     * @param int $lastEditionTime Date of the last edition of this device (in milliseconds since the Unix Epoch)
     *
     * @return self To use in method chains
     */
    public function setLastEditionTime(?int $lastEditionTime) : self
    {
        $this->lastEditionTime = $lastEditionTime;
        return $this;
    }
    /**
     * Getter for lastEditionTime
     *
     * @return int Date of the last edition of this device (in milliseconds since the Unix Epoch)
     */
    public function getLastEditionTime() : int
    {
        return $this->lastEditionTime;
    }
    /**
     * Setter for lastEditedBy
     *
     * @param string $lastEditedBy The id of device's last editor user
     *
     * @return self To use in method chains
     */
    public function setLastEditedBy(?string $lastEditedBy) : self
    {
        $this->lastEditedBy = $lastEditedBy;
        return $this;
    }
    /**
     * Getter for lastEditedBy
     *
     * @return string The id of device's last editor user
     */
    public function getLastEditedBy() : string
    {
        return $this->lastEditedBy;
    }
    /**
     * Setter for automaticRenewal
     *
     * @param bool $automaticRenewal Allow token renewal ?
     *
     * @return self To use in method chains
     */
    public function setAutomaticRenewal(?bool $automaticRenewal) : self
    {
        $this->automaticRenewal = $automaticRenewal;
        return $this;
    }
    /**
     * Getter for automaticRenewal
     *
     * @return bool Allow token renewal ?
     */
    public function getAutomaticRenewal() : bool
    {
        return $this->automaticRenewal;
    }
    /**
     * Setter for automaticRenewalStatus
     *
     * @param self::AUTOMATIC_RENEWAL_STATUS_* $automaticRenewalStatus Computed automatic renewal status.
     *
     * @return self To use in method chains
     */
    public function setAutomaticRenewalStatus(?int $automaticRenewalStatus) : self
    {
        $this->automaticRenewalStatus = $automaticRenewalStatus;
        return $this;
    }
    /**
     * Getter for automaticRenewalStatus
     *
     * @return self::AUTOMATIC_RENEWAL_STATUS_* Computed automatic renewal status.
     */
    public function getAutomaticRenewalStatus() : int
    {
        return $this->automaticRenewalStatus;
    }
    /**
     * Setter for activable
     *
     * @param bool $activable true if the device is activable and can take a token
     *
     * @return self To use in method chains
     */
    public function setActivable(?bool $activable) : self
    {
        $this->activable = $activable;
        return $this;
    }
    /**
     * Getter for activable
     *
     * @return bool true if the device is activable and can take a token
     */
    public function getActivable() : bool
    {
        return $this->activable;
    }
    /**
     * Setter for actions
     *
     * @param string[] $actions
     *
     * @return self To use in method chains
     */
    public function setActions(?array $actions) : self
    {
        $this->actions = $actions;
        return $this;
    }
    /**
     * Getter for actions
     *
     * @return string[]
     */
    public function getActions() : array
    {
        return $this->actions;
    }
    /**
     * Setter for resources
     *
     * @param string[] $resources
     *
     * @return self To use in method chains
     */
    public function setResources(?array $resources) : self
    {
        $this->resources = $resources;
        return $this;
    }
    /**
     * Getter for resources
     *
     * @return string[]
     */
    public function getResources() : array
    {
        return $this->resources;
    }
}