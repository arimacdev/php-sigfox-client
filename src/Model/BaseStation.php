<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model\BaseStation\LocationItem;
use Arimac\Sigfox\Model\BaseStation\Queue;
use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Validator\Rules\Child;
use Arimac\Sigfox\Validator\Rules\ChildSet;
use Arimac\Sigfox\Validator\Rules\Min;
use Arimac\Sigfox\Validator\Rules\Max;
/**
 * Defines the base station's properties
 */
class BaseStation extends Model
{
    /**
     * ETH
     */
    public const CONNECTION_TYPE_ETH = 0;
    /**
     * GSM
     */
    public const CONNECTION_TYPE_GSM = 1;
    /**
     * NO
     */
    public const COMMUNICATION_STATE_NO = 0;
    /**
     * OK
     */
    public const COMMUNICATION_STATE_OK = 1;
    /**
     * WARN
     */
    public const COMMUNICATION_STATE_WARN = 2;
    /**
     * KO
     */
    public const COMMUNICATION_STATE_KO = 3;
    /**
     * OK KO
     */
    public const COMMUNICATION_STATE_OK_KO = 4;
    /**
     * NO
     */
    public const STATE_NO = 0;
    /**
     * OK
     */
    public const STATE_OK = 1;
    /**
     * WARN
     */
    public const STATE_WARN = 2;
    /**
     * KO
     */
    public const STATE_KO = 3;
    /**
     * OK KO
     */
    public const STATE_OK_KO = 4;
    /**
     * STOCK
     */
    public const LIFECYCLE_STATUS_STOCK = 0;
    /**
     * PROD
     */
    public const LIFECYCLE_STATUS_PROD = 1;
    /**
     * MAINTENANCE
     */
    public const LIFECYCLE_STATUS_MAINTENANCE = 2;
    /**
     * DEAD
     */
    public const LIFECYCLE_STATUS_DEAD = 3;
    /**
     * V0
     */
    public const PROTOCOL_V0 = 1;
    /**
     * V1
     */
    public const PROTOCOL_V1 = 2;
    /**
     * BOTH
     */
    public const PROTOCOL_BOTH = 3;
    /**
     * LNA
     */
    public const PRE_AMP1_LNA = 0;
    /**
     * BYPASS
     */
    public const PRE_AMP1_BYPASS = 1;
    /**
     * ATTEND
     */
    public const PRE_AMP1_ATTEND = 2;
    /**
     * LNA
     */
    public const PRE_AMP2_LNA = 0;
    /**
     * BYPASS
     */
    public const PRE_AMP2_BYPASS = 1;
    /**
     * ATTEND
     */
    public const PRE_AMP2_ATTEND = 2;
    /**
     * YES
     */
    public const R_A_M_LOG_YES = 0;
    /**
     * NO
     */
    public const R_A_M_LOG_NO = 1;
    /**
     * AUTO
     */
    public const R_A_M_LOG_AUTO = 2;
    /**
     * DROP
     */
    public const R_A_M_LOG_DROP = 3;
    /**
     * NONE
     */
    public const WWAN_MODE_NONE = 0;
    /**
     * AUTO
     */
    public const WWAN_MODE_AUTO = 1;
    /**
     * WCDMA
     */
    public const WWAN_MODE_WCDMA = 2;
    /**
     * WCDMA_PREF
     */
    public const WWAN_MODE_WCDMA_PREF = 3;
    /**
     * GPRS_PREF
     */
    public const WWAN_MODE_GPRS_PREF = 4;
    /**
     * GPRS
     */
    public const WWAN_MODE_GPRS = 5;
    /**
     * bit rate 100 b/s
     */
    public const BIT_RATE_BIT_RATE_100_BS = 0;
    /**
     * bit rate 600 b/s
     */
    public const BIT_RATE_BIT_RATE_600_BS = 1;
    /**
     * OTHER
     */
    public const MAST_EQUIPMENT_OTHER = 0;
    /**
     * LNA_V2_SBS_868_P
     */
    public const MAST_EQUIPMENT_LNA_V2_SBS_868_P = 1;
    /**
     * LNA_V2_SBS_902_P
     */
    public const MAST_EQUIPMENT_LNA_V2_SBS_902_P = 2;
    /**
     * LNA_V2_NB_SBS_868_P
     */
    public const MAST_EQUIPMENT_LNA_V2_NB_SBS_868_P = 3;
    /**
     * LNA_V1_SBS_868_P
     */
    public const MAST_EQUIPMENT_LNA_V1_SBS_868_P = 4;
    /**
     * LNA_V2_SBS_920_P
     */
    public const MAST_EQUIPMENT_LNA_V2_SBS_920_P = 5;
    /**
     * LNA_V2_SBS_923_P
     */
    public const MAST_EQUIPMENT_LNA_V2_SBS_923_P = 6;
    /**
     * MINI
     */
    public const MAST_EQUIPMENT_MINI = 7;
    /**
     * LNA_V4_867
     */
    public const MAST_EQUIPMENT_LNA_V4_867 = 8;
    /**
     * LNA_V4_915
     */
    public const MAST_EQUIPMENT_LNA_V4_915 = 9;
    /**
     * LNAC_867
     */
    public const MAST_EQUIPMENT_LNAC_867 = 10;
    /**
     * LNAC_868
     */
    public const MAST_EQUIPMENT_LNAC_868 = 11;
    /**
     * LNAC_902
     */
    public const MAST_EQUIPMENT_LNAC_902 = 12;
    /**
     * LNAC_916_TX
     */
    public const MAST_EQUIPMENT_LNAC_916_TX = 13;
    /**
     * LNAC_921
     */
    public const MAST_EQUIPMENT_LNAC_921 = 14;
    /**
     * LNAC_921_TX
     */
    public const MAST_EQUIPMENT_LNAC_921_TX = 15;
    /**
     * LNAC_922_TX
     */
    public const MAST_EQUIPMENT_LNAC_922_TX = 16;
    /**
     * LNA_V3_SBS_868_P
     */
    public const MAST_EQUIPMENT_LNA_V3_SBS_868_P = 17;
    /**
     * LNA_V3_SBS_902_P
     */
    public const MAST_EQUIPMENT_LNA_V3_SBS_902_P = 18;
    /**
     * LNA_V3_SBS_920_P
     */
    public const MAST_EQUIPMENT_LNA_V3_SBS_920_P = 19;
    /**
     * LNA_V3_SBS_923_P
     */
    public const MAST_EQUIPMENT_LNA_V3_SBS_923_P = 20;
    /**
     * NONE
     */
    public const MAST_EQUIPMENT_NONE = 21;
    /**
     * LNAC_868_TX
     */
    public const MAST_EQUIPMENT_LNAC_868_TX = 22;
    /**
     * None
     */
    public const CAVITY_FILTER_VERSION_NONE = -1;
    /**
     * Other
     */
    public const CAVITY_FILTER_VERSION_OTHER = 0;
    /**
     * ETSI 868MHz (Matech)
     */
    public const CAVITY_FILTER_VERSION_ETSI_868MHZ_MATECH = 1;
    /**
     * ETSI 868MHz (Elhyte)
     */
    public const CAVITY_FILTER_VERSION_ETSI_868MHZ_ELHYTE = 2;
    /**
     * FCC 905MHz (Matech)
     */
    public const CAVITY_FILTER_VERSION_FCC_905MHZ_MATECH = 3;
    /**
     * FCC 905MHz (Elhyte)
     */
    public const CAVITY_FILTER_VERSION_FCC_905MHZ_ELHYTE = 4;
    /**
     * FCC 920MHz
     */
    public const CAVITY_FILTER_VERSION_FCC_920MHZ = 5;
    /**
     * FCC 923MHz
     */
    public const CAVITY_FILTER_VERSION_FCC_923MHZ = 6;
    /**
     * FCC 922.5MHz
     */
    public const CAVITY_FILTER_VERSION_FCC_922_5MHZ = 7;
    /**
     * ETSI 867MHz (Matech)
     */
    public const CAVITY_FILTER_VERSION_ETSI_867MHZ_MATECH = 8;
    /**
     * ETSI 867MHz (Techniwave)
     */
    public const CAVITY_FILTER_VERSION_ETSI_867MHZ_TECHNIWAVE = 9;
    /**
     * OUTDOOR
     */
    public const ANTENNA_LOCATION_CODE_OUTDOOR = 0;
    /**
     * INDOOR
     */
    public const ANTENNA_LOCATION_CODE_INDOOR = 1;
    /**
     * GLOBAL
     */
    public const SERVICE_COVERAGE_GLOBAL = 0;
    /**
     * CUSTOMER
     */
    public const SERVICE_COVERAGE_CUSTOMER = 1;
    /**
     * DEFAULT
     */
    public const GEOLOC_COMPUTATION_DEFAULT = 0;
    /**
     * ENABLED
     */
    public const GEOLOC_COMPUTATION_ENABLED = 1;
    /**
     * DISABLED
     */
    public const GEOLOC_COMPUTATION_DISABLED = 2;
    /**
     * Not contributing
     */
    public const GEOLOC_GLOBAL_STATE_OF_CONTRIBUTION_NOT_CONTRIBUTING = 0;
    /**
     * Currently contributing
     */
    public const GEOLOC_GLOBAL_STATE_OF_CONTRIBUTION_CURRENTLY_CONTRIBUTING = 1;
    /**
     * Grey listed
     */
    public const GEOLOC_GLOBAL_STATE_OF_CONTRIBUTION_GREY_LISTED = 2;
    /**
     * Black listed
     */
    public const GEOLOC_GLOBAL_STATE_OF_CONTRIBUTION_BLACK_LISTED = 3;
    /**
     * Contribution status not available for the moment
     */
    public const GEOLOC_GLOBAL_STATE_OF_CONTRIBUTION_NOT_AVAILABLE = 4;
    /**
     * The base station's identifier (hexadecimal format)
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * The base station's name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * The current version of the software installed on this base station
     *
     * @var string
     */
    protected ?string $versionCurrent = null;
    /**
     * The current version of the hardware of this base station
     *
     * @var string
     */
    protected ?string $hwVersion = null;
    /**
     * @var MinGroup
     */
    protected ?MinGroup $group = null;
    /**
     * The first commissioning time of the station (in milliseconds)
     *
     * @var int
     */
    protected ?int $firstCommissioningTime = null;
    /**
     * The commissioning time of the station (in milliseconds)
     *
     * @var int
     */
    protected ?int $commissioningTime = null;
    /**
     * The decommissioning time of the station (in milliseconds)
     *
     * @var int
     */
    protected ?int $decommissioningTime = null;
    /**
     * The number of operating days of the station. To present if the station was not decommissioned, or to
     * decommisioning time otherwise
     *
     * @var int
     */
    protected ?int $operatingDays = null;
    /**
     * Date of the delivery made by the manufacturer for this base station
     *
     * @var int
     */
    protected ?int $manufacturerDeliveryTime = null;
    /**
     * Date of the beginning of the warranty for this base station
     *
     * @var int
     */
    protected ?int $warrantyTime = null;
    /**
     * Date of the last communication made with this base station
     *
     * @var int
     */
    protected ?int $lastCommunicationTime = null;
    /**
     * Date of the last PING received from this base station
     *
     * @var int
     */
    protected ?int $lastPingTime = null;
    /**
     * Date of the last restart of this base station
     *
     * @var int
     */
    protected ?int $restartTime = null;
    /**
     * Base station connection type.
     * 
     * - {@see BaseStation::CONNECTION_TYPE_ETH}
     * - {@see BaseStation::CONNECTION_TYPE_GSM}
     *
     * @var int
     */
    protected ?int $connectionType = null;
    /**
     * Description of the base station
     *
     * @var string
     */
    protected ?string $description = null;
    /**
     * ISO 3166-1 UN M.49 country code of the site location. The first code is the country (region and department
     * available for some countries).
     *
     * @var LocationItem[]
     */
    protected ?array $location = null;
    /**
     * @var MinHwFamily
     */
    protected ?MinHwFamily $hwFamily = null;
    /**
     * Number of seconds the base station keep alive
     *
     * @var int
     */
    protected ?int $keepAlive = null;
    /**
     * The base station's latitude
     *
     * @var double
     */
    protected ?float $lat = null;
    /**
     * The base station's longitude
     *
     * @var double
     */
    protected ?float $lng = null;
    /**
     * Base station communication state.
     * 
     * - {@see BaseStation::COMMUNICATION_STATE_NO}
     * - {@see BaseStation::COMMUNICATION_STATE_OK}
     * - {@see BaseStation::COMMUNICATION_STATE_WARN}
     * - {@see BaseStation::COMMUNICATION_STATE_KO}
     * - {@see BaseStation::COMMUNICATION_STATE_OK_KO}
     *
     * @var int
     */
    protected ?int $communicationState = null;
    /**
     * Base station state.
     * 
     * - {@see BaseStation::STATE_NO}
     * - {@see BaseStation::STATE_OK}
     * - {@see BaseStation::STATE_WARN}
     * - {@see BaseStation::STATE_KO}
     * - {@see BaseStation::STATE_OK_KO}
     *
     * @var int
     */
    protected ?int $state = null;
    /**
     * Base station lifecycle status
     * 
     * - {@see BaseStation::LIFECYCLE_STATUS_STOCK}
     * - {@see BaseStation::LIFECYCLE_STATUS_PROD}
     * - {@see BaseStation::LIFECYCLE_STATUS_MAINTENANCE}
     * - {@see BaseStation::LIFECYCLE_STATUS_DEAD}
     *
     * @var int
     */
    protected ?int $lifecycleStatus = null;
    /**
     * @var Queue
     */
    protected ?Queue $queue = null;
    /**
     * true if the base station is muted
     *
     * @var bool
     */
    protected ?bool $muted = null;
    /**
     * true if the transmission is authorized on this base station
     *
     * @var bool
     */
    protected ?bool $transmissionAuthorized = null;
    /**
     * true if the downlink is enabled on this base station
     *
     * @var bool
     */
    protected ?bool $downlinkEnabled = null;
    /**
     * Name if the installer of this base station
     *
     * @var string
     */
    protected ?string $installer = null;
    /**
     * Date of the creation of the base station (in milliseconds since Unix Epoch)
     *
     * @var int
     */
    protected ?int $creationTime = null;
    /**
     * Id of the user who created this base station
     *
     * @var string
     */
    protected ?string $createdBy = null;
    /**
     * Date of the last modification made on this base station (in milliseconds since Unix Epoch)
     *
     * @var int
     */
    protected ?int $lastEditionTime = null;
    /**
     * Id of the user who edited this base station for the last time
     *
     * @var string
     */
    protected ?string $lastEditedBy = null;
    /**
     * Uplink base frequency of this base station (in Hz)
     *
     * @var int
     */
    protected ?int $baseFrequency = null;
    /**
     * Downlink center frequency of this base station (in Hz)
     *
     * @var int
     */
    protected ?int $downlinkCenterFrequency = null;
    /**
     * Macro channel of this base station (in Hz)
     *
     * @var int
     */
    protected ?int $macroChannel = null;
    /**
     * TX power amplification of this base station (in %)
     *
     * @var int
     */
    protected ?int $txPowerAmplification = null;
    /**
     * Base station protocol.
     * 
     * - {@see BaseStation::PROTOCOL_V0}
     * - {@see BaseStation::PROTOCOL_V1}
     * - {@see BaseStation::PROTOCOL_BOTH}
     *
     * @var int
     */
    protected ?int $protocol = null;
    /**
     * Base station pre amp 1.
     * 
     * - {@see BaseStation::PRE_AMP1_LNA}
     * - {@see BaseStation::PRE_AMP1_BYPASS}
     * - {@see BaseStation::PRE_AMP1_ATTEND}
     *
     * @var int
     */
    protected ?int $preAmp1 = null;
    /**
     * Base station pre amp 2.
     * 
     * - {@see BaseStation::PRE_AMP2_LNA}
     * - {@see BaseStation::PRE_AMP2_BYPASS}
     * - {@see BaseStation::PRE_AMP2_ATTEND}
     *
     * @var int
     */
    protected ?int $preAmp2 = null;
    /**
     * Base station RAM log.
     * 
     * - {@see BaseStation::R_A_M_LOG_YES}
     * - {@see BaseStation::R_A_M_LOG_NO}
     * - {@see BaseStation::R_A_M_LOG_AUTO}
     * - {@see BaseStation::R_A_M_LOG_DROP}
     *
     * @var int
     */
    protected ?int $RAMLog = null;
    /**
     * Base station WWAN mode.
     * 
     * - {@see BaseStation::WWAN_MODE_NONE}
     * - {@see BaseStation::WWAN_MODE_AUTO}
     * - {@see BaseStation::WWAN_MODE_WCDMA}
     * - {@see BaseStation::WWAN_MODE_WCDMA_PREF}
     * - {@see BaseStation::WWAN_MODE_GPRS_PREF}
     * - {@see BaseStation::WWAN_MODE_GPRS}
     *
     * @var int
     */
    protected ?int $wwanMode = null;
    /**
     * Base station bit rate.
     * 
     * - {@see BaseStation::BIT_RATE_BIT_RATE_100_BS}
     * - {@see BaseStation::BIT_RATE_BIT_RATE_600_BS}
     *
     * @var int
     */
    protected ?int $bitRate = null;
    /**
     * true if the base station is available for the global coverage computation
     *
     * @var bool
     */
    protected ?bool $globalCoverageEnable = null;
    /**
     * Antenna height of the base station (in m)
     *
     * @var int
     */
    protected ?int $elevation = null;
    /**
     * Radius of the base station (in km)
     *
     * @var int
     */
    protected ?int $splatRadius = null;
    /**
     * LNA version of the base station. Mini stations have type 7 -> MINI. Mini Access Stations have type 21.
     * 
     * - {@see BaseStation::MAST_EQUIPMENT_OTHER}
     * - {@see BaseStation::MAST_EQUIPMENT_LNA_V2_SBS_868_P}
     * - {@see BaseStation::MAST_EQUIPMENT_LNA_V2_SBS_902_P}
     * - {@see BaseStation::MAST_EQUIPMENT_LNA_V2_NB_SBS_868_P}
     * - {@see BaseStation::MAST_EQUIPMENT_LNA_V1_SBS_868_P}
     * - {@see BaseStation::MAST_EQUIPMENT_LNA_V2_SBS_920_P}
     * - {@see BaseStation::MAST_EQUIPMENT_LNA_V2_SBS_923_P}
     * - {@see BaseStation::MAST_EQUIPMENT_MINI}
     * - {@see BaseStation::MAST_EQUIPMENT_LNA_V4_867}
     * - {@see BaseStation::MAST_EQUIPMENT_LNA_V4_915}
     * - {@see BaseStation::MAST_EQUIPMENT_LNAC_867}
     * - {@see BaseStation::MAST_EQUIPMENT_LNAC_868}
     * - {@see BaseStation::MAST_EQUIPMENT_LNAC_902}
     * - {@see BaseStation::MAST_EQUIPMENT_LNAC_916_TX}
     * - {@see BaseStation::MAST_EQUIPMENT_LNAC_921}
     * - {@see BaseStation::MAST_EQUIPMENT_LNAC_921_TX}
     * - {@see BaseStation::MAST_EQUIPMENT_LNAC_922_TX}
     * - {@see BaseStation::MAST_EQUIPMENT_LNA_V3_SBS_868_P}
     * - {@see BaseStation::MAST_EQUIPMENT_LNA_V3_SBS_902_P}
     * - {@see BaseStation::MAST_EQUIPMENT_LNA_V3_SBS_920_P}
     * - {@see BaseStation::MAST_EQUIPMENT_LNA_V3_SBS_923_P}
     * - {@see BaseStation::MAST_EQUIPMENT_NONE}
     * - {@see BaseStation::MAST_EQUIPMENT_LNAC_868_TX}
     *
     * @var int
     */
    protected ?int $mastEquipment = null;
    /**
     * The base station's mast equipment description
     *
     * @var string
     */
    protected ?string $mastEquipmentDescription = null;
    /**
     * true if the LNA is by-passed
     *
     * @var bool
     */
    protected ?bool $lnaByPass = null;
    /**
     * Cavity filter version of the base station.
     * 
     * - {@see BaseStation::CAVITY_FILTER_VERSION_NONE}
     * - {@see BaseStation::CAVITY_FILTER_VERSION_OTHER}
     * - {@see BaseStation::CAVITY_FILTER_VERSION_ETSI_868MHZ_MATECH}
     * - {@see BaseStation::CAVITY_FILTER_VERSION_ETSI_868MHZ_ELHYTE}
     * - {@see BaseStation::CAVITY_FILTER_VERSION_FCC_905MHZ_MATECH}
     * - {@see BaseStation::CAVITY_FILTER_VERSION_FCC_905MHZ_ELHYTE}
     * - {@see BaseStation::CAVITY_FILTER_VERSION_FCC_920MHZ}
     * - {@see BaseStation::CAVITY_FILTER_VERSION_FCC_923MHZ}
     * - {@see BaseStation::CAVITY_FILTER_VERSION_FCC_922_5MHZ}
     * - {@see BaseStation::CAVITY_FILTER_VERSION_ETSI_867MHZ_MATECH}
     * - {@see BaseStation::CAVITY_FILTER_VERSION_ETSI_867MHZ_TECHNIWAVE}
     *
     * @var int
     */
    protected ?int $cavityFilterVersion = null;
    /**
     * The base station's cavity filter version description
     *
     * @var string
     */
    protected ?string $cavityFilterVersionDescription = null;
    /**
     * Environment loss of this base station (in dB)
     *
     * @var double
     */
    protected ?float $environmentLoss = null;
    /**
     * Cable loss of this base station (in dB)
     *
     * @var double
     */
    protected ?float $cableLoss = null;
    /**
     * Antenna gain of this base station (in dB).
     *
     * @var double
     */
    protected ?float $antennaGain = null;
    /**
     * Antenna noise figure of this base station (in dB). This setting is only relevant when an antenna with a filter
     * is installed.
     *
     * @var double
     */
    protected ?float $antennaNoiseFigure = null;
    /**
     * Antenna insertion loss of this base station (in dB). This setting is only relevant when an antenna with a
     * filter is installed.
     *
     * @var double
     */
    protected ?float $antennaInsertionLoss = null;
    /**
     * Antenna max admissible power of this base station (in dBm). This setting is only relevant when an antenna with
     * a filter is installed.
     *
     * @var double
     */
    protected ?float $antennaMaxAdmissiblePower = null;
    /**
     * true if the base station has a gain flag
     *
     * @var bool
     */
    protected ?bool $gainFlag = null;
    /**
     * Mast equipment gain of this base station (in dB)
     *
     * @var double
     */
    protected ?float $mastEquipmentGain = null;
    /**
     * Mast equipment noise figure of this base station (in dB)
     *
     * @var double
     */
    protected ?float $mastEquipmentNoiseFigure = null;
    /**
     * LNA insertion loss of this base station (in dB)
     *
     * @var double
     */
    protected ?float $lnaInsertionLoss = null;
    /**
     * Cavity filter insertion loss of this base station (in dB)
     *
     * @var double
     */
    protected ?float $cavityFilterInsertionLoss = null;
    /**
     * TX power margin of this base station (in dBm)
     *
     * @var double
     */
    protected ?float $txPowerMargin = null;
    /**
     * power capability of this base station (in dBm)
     *
     * @var double
     */
    protected ?float $powerCapability = null;
    /**
     * Antenna location.
     * 
     * - {@see BaseStation::ANTENNA_LOCATION_CODE_OUTDOOR}
     * - {@see BaseStation::ANTENNA_LOCATION_CODE_INDOOR}
     *
     * @var int
     */
    protected ?int $antennaLocationCode = null;
    /**
     * Service coverage (for Mini base station)
     * 
     * - {@see BaseStation::SERVICE_COVERAGE_GLOBAL}
     * - {@see BaseStation::SERVICE_COVERAGE_CUSTOMER}
     *
     * @var int
     */
    protected ?int $serviceCoverage = null;
    /**
     * Defines whether the Base Station should contribute to the Sigfox Network location service.
     * 
     * - {@see BaseStation::GEOLOC_COMPUTATION_DEFAULT}
     * - {@see BaseStation::GEOLOC_COMPUTATION_ENABLED}
     * - {@see BaseStation::GEOLOC_COMPUTATION_DISABLED}
     *
     * @var int
     */
    protected ?int $geolocComputation = null;
    /**
     * The status, computed by the geolocation services, of the Base Station's contribution to the Sigfox Network
     * location service.
     * 
     * - {@see BaseStation::GEOLOC_GLOBAL_STATE_OF_CONTRIBUTION_NOT_CONTRIBUTING}
     * - {@see BaseStation::GEOLOC_GLOBAL_STATE_OF_CONTRIBUTION_CURRENTLY_CONTRIBUTING}
     * - {@see BaseStation::GEOLOC_GLOBAL_STATE_OF_CONTRIBUTION_GREY_LISTED}
     * - {@see BaseStation::GEOLOC_GLOBAL_STATE_OF_CONTRIBUTION_BLACK_LISTED}
     * - {@see BaseStation::GEOLOC_GLOBAL_STATE_OF_CONTRIBUTION_NOT_AVAILABLE}
     *
     * @var int
     */
    protected ?int $geolocGlobalStateOfContribution = null;
    /**
     * @var Antenna
     */
    protected ?Antenna $antenna = null;
    /**
     * @var int[]
     */
    protected ?array $availableConnections = null;
    /**
     * the base station???s marker code
     *
     * @var string
     */
    protected ?string $makerCode = null;
    /**
     * @var string[]
     */
    protected ?array $actions = null;
    /**
     * @var string[]
     */
    protected ?array $resources = null;
    /**
     * Setter for id
     *
     * @param string $id The base station's identifier (hexadecimal format)
     *
     * @return static To use in method chains
     */
    public function setId(?string $id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return string The base station's identifier (hexadecimal format)
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * Setter for name
     *
     * @param string $name The base station's name
     *
     * @return static To use in method chains
     */
    public function setName(?string $name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Getter for name
     *
     * @return string The base station's name
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Setter for versionCurrent
     *
     * @param string $versionCurrent The current version of the software installed on this base station
     *
     * @return static To use in method chains
     */
    public function setVersionCurrent(?string $versionCurrent)
    {
        $this->versionCurrent = $versionCurrent;
        return $this;
    }
    /**
     * Getter for versionCurrent
     *
     * @return string The current version of the software installed on this base station
     */
    public function getVersionCurrent() : ?string
    {
        return $this->versionCurrent;
    }
    /**
     * Setter for hwVersion
     *
     * @param string $hwVersion The current version of the hardware of this base station
     *
     * @return static To use in method chains
     */
    public function setHwVersion(?string $hwVersion)
    {
        $this->hwVersion = $hwVersion;
        return $this;
    }
    /**
     * Getter for hwVersion
     *
     * @return string The current version of the hardware of this base station
     */
    public function getHwVersion() : ?string
    {
        return $this->hwVersion;
    }
    /**
     * Setter for group
     *
     * @param MinGroup $group
     *
     * @return static To use in method chains
     */
    public function setGroup(?MinGroup $group)
    {
        $this->group = $group;
        return $this;
    }
    /**
     * Getter for group
     *
     * @return MinGroup
     */
    public function getGroup() : ?MinGroup
    {
        return $this->group;
    }
    /**
     * Setter for firstCommissioningTime
     *
     * @param int $firstCommissioningTime The first commissioning time of the station (in milliseconds)
     *
     * @return static To use in method chains
     */
    public function setFirstCommissioningTime(?int $firstCommissioningTime)
    {
        $this->firstCommissioningTime = $firstCommissioningTime;
        return $this;
    }
    /**
     * Getter for firstCommissioningTime
     *
     * @return int The first commissioning time of the station (in milliseconds)
     */
    public function getFirstCommissioningTime() : ?int
    {
        return $this->firstCommissioningTime;
    }
    /**
     * Setter for commissioningTime
     *
     * @param int $commissioningTime The commissioning time of the station (in milliseconds)
     *
     * @return static To use in method chains
     */
    public function setCommissioningTime(?int $commissioningTime)
    {
        $this->commissioningTime = $commissioningTime;
        return $this;
    }
    /**
     * Getter for commissioningTime
     *
     * @return int The commissioning time of the station (in milliseconds)
     */
    public function getCommissioningTime() : ?int
    {
        return $this->commissioningTime;
    }
    /**
     * Setter for decommissioningTime
     *
     * @param int $decommissioningTime The decommissioning time of the station (in milliseconds)
     *
     * @return static To use in method chains
     */
    public function setDecommissioningTime(?int $decommissioningTime)
    {
        $this->decommissioningTime = $decommissioningTime;
        return $this;
    }
    /**
     * Getter for decommissioningTime
     *
     * @return int The decommissioning time of the station (in milliseconds)
     */
    public function getDecommissioningTime() : ?int
    {
        return $this->decommissioningTime;
    }
    /**
     * Setter for operatingDays
     *
     * @param int $operatingDays The number of operating days of the station. To present if the station was not
     *                           decommissioned, or to decommisioning time otherwise
     *
     * @return static To use in method chains
     */
    public function setOperatingDays(?int $operatingDays)
    {
        $this->operatingDays = $operatingDays;
        return $this;
    }
    /**
     * Getter for operatingDays
     *
     * @return int The number of operating days of the station. To present if the station was not decommissioned, or
     *             to decommisioning time otherwise
     */
    public function getOperatingDays() : ?int
    {
        return $this->operatingDays;
    }
    /**
     * Setter for manufacturerDeliveryTime
     *
     * @param int $manufacturerDeliveryTime Date of the delivery made by the manufacturer for this base station
     *
     * @return static To use in method chains
     */
    public function setManufacturerDeliveryTime(?int $manufacturerDeliveryTime)
    {
        $this->manufacturerDeliveryTime = $manufacturerDeliveryTime;
        return $this;
    }
    /**
     * Getter for manufacturerDeliveryTime
     *
     * @return int Date of the delivery made by the manufacturer for this base station
     */
    public function getManufacturerDeliveryTime() : ?int
    {
        return $this->manufacturerDeliveryTime;
    }
    /**
     * Setter for warrantyTime
     *
     * @param int $warrantyTime Date of the beginning of the warranty for this base station
     *
     * @return static To use in method chains
     */
    public function setWarrantyTime(?int $warrantyTime)
    {
        $this->warrantyTime = $warrantyTime;
        return $this;
    }
    /**
     * Getter for warrantyTime
     *
     * @return int Date of the beginning of the warranty for this base station
     */
    public function getWarrantyTime() : ?int
    {
        return $this->warrantyTime;
    }
    /**
     * Setter for lastCommunicationTime
     *
     * @param int $lastCommunicationTime Date of the last communication made with this base station
     *
     * @return static To use in method chains
     */
    public function setLastCommunicationTime(?int $lastCommunicationTime)
    {
        $this->lastCommunicationTime = $lastCommunicationTime;
        return $this;
    }
    /**
     * Getter for lastCommunicationTime
     *
     * @return int Date of the last communication made with this base station
     */
    public function getLastCommunicationTime() : ?int
    {
        return $this->lastCommunicationTime;
    }
    /**
     * Setter for lastPingTime
     *
     * @param int $lastPingTime Date of the last PING received from this base station
     *
     * @return static To use in method chains
     */
    public function setLastPingTime(?int $lastPingTime)
    {
        $this->lastPingTime = $lastPingTime;
        return $this;
    }
    /**
     * Getter for lastPingTime
     *
     * @return int Date of the last PING received from this base station
     */
    public function getLastPingTime() : ?int
    {
        return $this->lastPingTime;
    }
    /**
     * Setter for restartTime
     *
     * @param int $restartTime Date of the last restart of this base station
     *
     * @return static To use in method chains
     */
    public function setRestartTime(?int $restartTime)
    {
        $this->restartTime = $restartTime;
        return $this;
    }
    /**
     * Getter for restartTime
     *
     * @return int Date of the last restart of this base station
     */
    public function getRestartTime() : ?int
    {
        return $this->restartTime;
    }
    /**
     * Setter for connectionType
     *
     * @param int $connectionType Base station connection type.
     *                            
     *                            - {@see BaseStation::CONNECTION_TYPE_ETH}
     *                            - {@see BaseStation::CONNECTION_TYPE_GSM}
     *                            
     *
     * @return static To use in method chains
     */
    public function setConnectionType(?int $connectionType)
    {
        $this->connectionType = $connectionType;
        return $this;
    }
    /**
     * Getter for connectionType
     *
     * @return int Base station connection type.
     *             
     *             - {@see BaseStation::CONNECTION_TYPE_ETH}
     *             - {@see BaseStation::CONNECTION_TYPE_GSM}
     *             
     */
    public function getConnectionType() : ?int
    {
        return $this->connectionType;
    }
    /**
     * Setter for description
     *
     * @param string $description Description of the base station
     *
     * @return static To use in method chains
     */
    public function setDescription(?string $description)
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Getter for description
     *
     * @return string Description of the base station
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Setter for location
     *
     * @param LocationItem[] $location ISO 3166-1 UN M.49 country code of the site location. The first code is the
     *                                 country (region and department available for some countries).
     *
     * @return static To use in method chains
     */
    public function setLocation(?array $location)
    {
        $this->location = $location;
        return $this;
    }
    /**
     * Getter for location
     *
     * @return LocationItem[] ISO 3166-1 UN M.49 country code of the site location. The first code is the country
     *                        (region and department available for some countries).
     */
    public function getLocation() : ?array
    {
        return $this->location;
    }
    /**
     * Setter for hwFamily
     *
     * @param MinHwFamily $hwFamily
     *
     * @return static To use in method chains
     */
    public function setHwFamily(?MinHwFamily $hwFamily)
    {
        $this->hwFamily = $hwFamily;
        return $this;
    }
    /**
     * Getter for hwFamily
     *
     * @return MinHwFamily
     */
    public function getHwFamily() : ?MinHwFamily
    {
        return $this->hwFamily;
    }
    /**
     * Setter for keepAlive
     *
     * @param int $keepAlive Number of seconds the base station keep alive
     *
     * @return static To use in method chains
     */
    public function setKeepAlive(?int $keepAlive)
    {
        $this->keepAlive = $keepAlive;
        return $this;
    }
    /**
     * Getter for keepAlive
     *
     * @return int Number of seconds the base station keep alive
     */
    public function getKeepAlive() : ?int
    {
        return $this->keepAlive;
    }
    /**
     * Setter for lat
     *
     * @param double $lat The base station's latitude
     *
     * @return static To use in method chains
     */
    public function setLat(?float $lat)
    {
        $this->lat = $lat;
        return $this;
    }
    /**
     * Getter for lat
     *
     * @return double The base station's latitude
     */
    public function getLat() : ?float
    {
        return $this->lat;
    }
    /**
     * Setter for lng
     *
     * @param double $lng The base station's longitude
     *
     * @return static To use in method chains
     */
    public function setLng(?float $lng)
    {
        $this->lng = $lng;
        return $this;
    }
    /**
     * Getter for lng
     *
     * @return double The base station's longitude
     */
    public function getLng() : ?float
    {
        return $this->lng;
    }
    /**
     * Setter for communicationState
     *
     * @param int $communicationState Base station communication state.
     *                                
     *                                - {@see BaseStation::COMMUNICATION_STATE_NO}
     *                                - {@see BaseStation::COMMUNICATION_STATE_OK}
     *                                - {@see BaseStation::COMMUNICATION_STATE_WARN}
     *                                - {@see BaseStation::COMMUNICATION_STATE_KO}
     *                                - {@see BaseStation::COMMUNICATION_STATE_OK_KO}
     *                                
     *
     * @return static To use in method chains
     */
    public function setCommunicationState(?int $communicationState)
    {
        $this->communicationState = $communicationState;
        return $this;
    }
    /**
     * Getter for communicationState
     *
     * @return int Base station communication state.
     *             
     *             - {@see BaseStation::COMMUNICATION_STATE_NO}
     *             - {@see BaseStation::COMMUNICATION_STATE_OK}
     *             - {@see BaseStation::COMMUNICATION_STATE_WARN}
     *             - {@see BaseStation::COMMUNICATION_STATE_KO}
     *             - {@see BaseStation::COMMUNICATION_STATE_OK_KO}
     *             
     */
    public function getCommunicationState() : ?int
    {
        return $this->communicationState;
    }
    /**
     * Setter for state
     *
     * @param int $state Base station state.
     *                   
     *                   - {@see BaseStation::STATE_NO}
     *                   - {@see BaseStation::STATE_OK}
     *                   - {@see BaseStation::STATE_WARN}
     *                   - {@see BaseStation::STATE_KO}
     *                   - {@see BaseStation::STATE_OK_KO}
     *                   
     *
     * @return static To use in method chains
     */
    public function setState(?int $state)
    {
        $this->state = $state;
        return $this;
    }
    /**
     * Getter for state
     *
     * @return int Base station state.
     *             
     *             - {@see BaseStation::STATE_NO}
     *             - {@see BaseStation::STATE_OK}
     *             - {@see BaseStation::STATE_WARN}
     *             - {@see BaseStation::STATE_KO}
     *             - {@see BaseStation::STATE_OK_KO}
     *             
     */
    public function getState() : ?int
    {
        return $this->state;
    }
    /**
     * Setter for lifecycleStatus
     *
     * @param int $lifecycleStatus Base station lifecycle status
     *                             
     *                             - {@see BaseStation::LIFECYCLE_STATUS_STOCK}
     *                             - {@see BaseStation::LIFECYCLE_STATUS_PROD}
     *                             - {@see BaseStation::LIFECYCLE_STATUS_MAINTENANCE}
     *                             - {@see BaseStation::LIFECYCLE_STATUS_DEAD}
     *                             
     *
     * @return static To use in method chains
     */
    public function setLifecycleStatus(?int $lifecycleStatus)
    {
        $this->lifecycleStatus = $lifecycleStatus;
        return $this;
    }
    /**
     * Getter for lifecycleStatus
     *
     * @return int Base station lifecycle status
     *             
     *             - {@see BaseStation::LIFECYCLE_STATUS_STOCK}
     *             - {@see BaseStation::LIFECYCLE_STATUS_PROD}
     *             - {@see BaseStation::LIFECYCLE_STATUS_MAINTENANCE}
     *             - {@see BaseStation::LIFECYCLE_STATUS_DEAD}
     *             
     */
    public function getLifecycleStatus() : ?int
    {
        return $this->lifecycleStatus;
    }
    /**
     * Setter for queue
     *
     * @param Queue $queue
     *
     * @return static To use in method chains
     */
    public function setQueue(?Queue $queue)
    {
        $this->queue = $queue;
        return $this;
    }
    /**
     * Getter for queue
     *
     * @return Queue
     */
    public function getQueue() : ?Queue
    {
        return $this->queue;
    }
    /**
     * Setter for muted
     *
     * @param bool $muted true if the base station is muted
     *
     * @return static To use in method chains
     */
    public function setMuted(?bool $muted)
    {
        $this->muted = $muted;
        return $this;
    }
    /**
     * Getter for muted
     *
     * @return bool true if the base station is muted
     */
    public function getMuted() : ?bool
    {
        return $this->muted;
    }
    /**
     * Setter for transmissionAuthorized
     *
     * @param bool $transmissionAuthorized true if the transmission is authorized on this base station
     *
     * @return static To use in method chains
     */
    public function setTransmissionAuthorized(?bool $transmissionAuthorized)
    {
        $this->transmissionAuthorized = $transmissionAuthorized;
        return $this;
    }
    /**
     * Getter for transmissionAuthorized
     *
     * @return bool true if the transmission is authorized on this base station
     */
    public function getTransmissionAuthorized() : ?bool
    {
        return $this->transmissionAuthorized;
    }
    /**
     * Setter for downlinkEnabled
     *
     * @param bool $downlinkEnabled true if the downlink is enabled on this base station
     *
     * @return static To use in method chains
     */
    public function setDownlinkEnabled(?bool $downlinkEnabled)
    {
        $this->downlinkEnabled = $downlinkEnabled;
        return $this;
    }
    /**
     * Getter for downlinkEnabled
     *
     * @return bool true if the downlink is enabled on this base station
     */
    public function getDownlinkEnabled() : ?bool
    {
        return $this->downlinkEnabled;
    }
    /**
     * Setter for installer
     *
     * @param string $installer Name if the installer of this base station
     *
     * @return static To use in method chains
     */
    public function setInstaller(?string $installer)
    {
        $this->installer = $installer;
        return $this;
    }
    /**
     * Getter for installer
     *
     * @return string Name if the installer of this base station
     */
    public function getInstaller() : ?string
    {
        return $this->installer;
    }
    /**
     * Setter for creationTime
     *
     * @param int $creationTime Date of the creation of the base station (in milliseconds since Unix Epoch)
     *
     * @return static To use in method chains
     */
    public function setCreationTime(?int $creationTime)
    {
        $this->creationTime = $creationTime;
        return $this;
    }
    /**
     * Getter for creationTime
     *
     * @return int Date of the creation of the base station (in milliseconds since Unix Epoch)
     */
    public function getCreationTime() : ?int
    {
        return $this->creationTime;
    }
    /**
     * Setter for createdBy
     *
     * @param string $createdBy Id of the user who created this base station
     *
     * @return static To use in method chains
     */
    public function setCreatedBy(?string $createdBy)
    {
        $this->createdBy = $createdBy;
        return $this;
    }
    /**
     * Getter for createdBy
     *
     * @return string Id of the user who created this base station
     */
    public function getCreatedBy() : ?string
    {
        return $this->createdBy;
    }
    /**
     * Setter for lastEditionTime
     *
     * @param int $lastEditionTime Date of the last modification made on this base station (in milliseconds since
     *                             Unix Epoch)
     *
     * @return static To use in method chains
     */
    public function setLastEditionTime(?int $lastEditionTime)
    {
        $this->lastEditionTime = $lastEditionTime;
        return $this;
    }
    /**
     * Getter for lastEditionTime
     *
     * @return int Date of the last modification made on this base station (in milliseconds since Unix Epoch)
     */
    public function getLastEditionTime() : ?int
    {
        return $this->lastEditionTime;
    }
    /**
     * Setter for lastEditedBy
     *
     * @param string $lastEditedBy Id of the user who edited this base station for the last time
     *
     * @return static To use in method chains
     */
    public function setLastEditedBy(?string $lastEditedBy)
    {
        $this->lastEditedBy = $lastEditedBy;
        return $this;
    }
    /**
     * Getter for lastEditedBy
     *
     * @return string Id of the user who edited this base station for the last time
     */
    public function getLastEditedBy() : ?string
    {
        return $this->lastEditedBy;
    }
    /**
     * Setter for baseFrequency
     *
     * @param int $baseFrequency Uplink base frequency of this base station (in Hz)
     *
     * @return static To use in method chains
     */
    public function setBaseFrequency(?int $baseFrequency)
    {
        $this->baseFrequency = $baseFrequency;
        return $this;
    }
    /**
     * Getter for baseFrequency
     *
     * @return int Uplink base frequency of this base station (in Hz)
     */
    public function getBaseFrequency() : ?int
    {
        return $this->baseFrequency;
    }
    /**
     * Setter for downlinkCenterFrequency
     *
     * @param int $downlinkCenterFrequency Downlink center frequency of this base station (in Hz)
     *
     * @return static To use in method chains
     */
    public function setDownlinkCenterFrequency(?int $downlinkCenterFrequency)
    {
        $this->downlinkCenterFrequency = $downlinkCenterFrequency;
        return $this;
    }
    /**
     * Getter for downlinkCenterFrequency
     *
     * @return int Downlink center frequency of this base station (in Hz)
     */
    public function getDownlinkCenterFrequency() : ?int
    {
        return $this->downlinkCenterFrequency;
    }
    /**
     * Setter for macroChannel
     *
     * @param int $macroChannel Macro channel of this base station (in Hz)
     *
     * @return static To use in method chains
     */
    public function setMacroChannel(?int $macroChannel)
    {
        $this->macroChannel = $macroChannel;
        return $this;
    }
    /**
     * Getter for macroChannel
     *
     * @return int Macro channel of this base station (in Hz)
     */
    public function getMacroChannel() : ?int
    {
        return $this->macroChannel;
    }
    /**
     * Setter for txPowerAmplification
     *
     * @param int $txPowerAmplification TX power amplification of this base station (in %)
     *
     * @return static To use in method chains
     */
    public function setTxPowerAmplification(?int $txPowerAmplification)
    {
        $this->txPowerAmplification = $txPowerAmplification;
        return $this;
    }
    /**
     * Getter for txPowerAmplification
     *
     * @return int TX power amplification of this base station (in %)
     */
    public function getTxPowerAmplification() : ?int
    {
        return $this->txPowerAmplification;
    }
    /**
     * Setter for protocol
     *
     * @param int $protocol Base station protocol.
     *                      
     *                      - {@see BaseStation::PROTOCOL_V0}
     *                      - {@see BaseStation::PROTOCOL_V1}
     *                      - {@see BaseStation::PROTOCOL_BOTH}
     *                      
     *
     * @return static To use in method chains
     */
    public function setProtocol(?int $protocol)
    {
        $this->protocol = $protocol;
        return $this;
    }
    /**
     * Getter for protocol
     *
     * @return int Base station protocol.
     *             
     *             - {@see BaseStation::PROTOCOL_V0}
     *             - {@see BaseStation::PROTOCOL_V1}
     *             - {@see BaseStation::PROTOCOL_BOTH}
     *             
     */
    public function getProtocol() : ?int
    {
        return $this->protocol;
    }
    /**
     * Setter for preAmp1
     *
     * @param int $preAmp1 Base station pre amp 1.
     *                     
     *                     - {@see BaseStation::PRE_AMP1_LNA}
     *                     - {@see BaseStation::PRE_AMP1_BYPASS}
     *                     - {@see BaseStation::PRE_AMP1_ATTEND}
     *                     
     *
     * @return static To use in method chains
     */
    public function setPreAmp1(?int $preAmp1)
    {
        $this->preAmp1 = $preAmp1;
        return $this;
    }
    /**
     * Getter for preAmp1
     *
     * @return int Base station pre amp 1.
     *             
     *             - {@see BaseStation::PRE_AMP1_LNA}
     *             - {@see BaseStation::PRE_AMP1_BYPASS}
     *             - {@see BaseStation::PRE_AMP1_ATTEND}
     *             
     */
    public function getPreAmp1() : ?int
    {
        return $this->preAmp1;
    }
    /**
     * Setter for preAmp2
     *
     * @param int $preAmp2 Base station pre amp 2.
     *                     
     *                     - {@see BaseStation::PRE_AMP2_LNA}
     *                     - {@see BaseStation::PRE_AMP2_BYPASS}
     *                     - {@see BaseStation::PRE_AMP2_ATTEND}
     *                     
     *
     * @return static To use in method chains
     */
    public function setPreAmp2(?int $preAmp2)
    {
        $this->preAmp2 = $preAmp2;
        return $this;
    }
    /**
     * Getter for preAmp2
     *
     * @return int Base station pre amp 2.
     *             
     *             - {@see BaseStation::PRE_AMP2_LNA}
     *             - {@see BaseStation::PRE_AMP2_BYPASS}
     *             - {@see BaseStation::PRE_AMP2_ATTEND}
     *             
     */
    public function getPreAmp2() : ?int
    {
        return $this->preAmp2;
    }
    /**
     * Setter for RAMLog
     *
     * @param int $RAMLog Base station RAM log.
     *                    
     *                    - {@see BaseStation::R_A_M_LOG_YES}
     *                    - {@see BaseStation::R_A_M_LOG_NO}
     *                    - {@see BaseStation::R_A_M_LOG_AUTO}
     *                    - {@see BaseStation::R_A_M_LOG_DROP}
     *                    
     *
     * @return static To use in method chains
     */
    public function setRAMLog(?int $RAMLog)
    {
        $this->RAMLog = $RAMLog;
        return $this;
    }
    /**
     * Getter for RAMLog
     *
     * @return int Base station RAM log.
     *             
     *             - {@see BaseStation::R_A_M_LOG_YES}
     *             - {@see BaseStation::R_A_M_LOG_NO}
     *             - {@see BaseStation::R_A_M_LOG_AUTO}
     *             - {@see BaseStation::R_A_M_LOG_DROP}
     *             
     */
    public function getRAMLog() : ?int
    {
        return $this->RAMLog;
    }
    /**
     * Setter for wwanMode
     *
     * @param int $wwanMode Base station WWAN mode.
     *                      
     *                      - {@see BaseStation::WWAN_MODE_NONE}
     *                      - {@see BaseStation::WWAN_MODE_AUTO}
     *                      - {@see BaseStation::WWAN_MODE_WCDMA}
     *                      - {@see BaseStation::WWAN_MODE_WCDMA_PREF}
     *                      - {@see BaseStation::WWAN_MODE_GPRS_PREF}
     *                      - {@see BaseStation::WWAN_MODE_GPRS}
     *                      
     *
     * @return static To use in method chains
     */
    public function setWwanMode(?int $wwanMode)
    {
        $this->wwanMode = $wwanMode;
        return $this;
    }
    /**
     * Getter for wwanMode
     *
     * @return int Base station WWAN mode.
     *             
     *             - {@see BaseStation::WWAN_MODE_NONE}
     *             - {@see BaseStation::WWAN_MODE_AUTO}
     *             - {@see BaseStation::WWAN_MODE_WCDMA}
     *             - {@see BaseStation::WWAN_MODE_WCDMA_PREF}
     *             - {@see BaseStation::WWAN_MODE_GPRS_PREF}
     *             - {@see BaseStation::WWAN_MODE_GPRS}
     *             
     */
    public function getWwanMode() : ?int
    {
        return $this->wwanMode;
    }
    /**
     * Setter for bitRate
     *
     * @param int $bitRate Base station bit rate.
     *                     
     *                     - {@see BaseStation::BIT_RATE_BIT_RATE_100_BS}
     *                     - {@see BaseStation::BIT_RATE_BIT_RATE_600_BS}
     *                     
     *
     * @return static To use in method chains
     */
    public function setBitRate(?int $bitRate)
    {
        $this->bitRate = $bitRate;
        return $this;
    }
    /**
     * Getter for bitRate
     *
     * @return int Base station bit rate.
     *             
     *             - {@see BaseStation::BIT_RATE_BIT_RATE_100_BS}
     *             - {@see BaseStation::BIT_RATE_BIT_RATE_600_BS}
     *             
     */
    public function getBitRate() : ?int
    {
        return $this->bitRate;
    }
    /**
     * Setter for globalCoverageEnable
     *
     * @param bool $globalCoverageEnable true if the base station is available for the global coverage computation
     *
     * @return static To use in method chains
     */
    public function setGlobalCoverageEnable(?bool $globalCoverageEnable)
    {
        $this->globalCoverageEnable = $globalCoverageEnable;
        return $this;
    }
    /**
     * Getter for globalCoverageEnable
     *
     * @return bool true if the base station is available for the global coverage computation
     */
    public function getGlobalCoverageEnable() : ?bool
    {
        return $this->globalCoverageEnable;
    }
    /**
     * Setter for elevation
     *
     * @param int $elevation Antenna height of the base station (in m)
     *
     * @return static To use in method chains
     */
    public function setElevation(?int $elevation)
    {
        $this->elevation = $elevation;
        return $this;
    }
    /**
     * Getter for elevation
     *
     * @return int Antenna height of the base station (in m)
     */
    public function getElevation() : ?int
    {
        return $this->elevation;
    }
    /**
     * Setter for splatRadius
     *
     * @param int $splatRadius Radius of the base station (in km)
     *
     * @return static To use in method chains
     */
    public function setSplatRadius(?int $splatRadius)
    {
        $this->splatRadius = $splatRadius;
        return $this;
    }
    /**
     * Getter for splatRadius
     *
     * @return int Radius of the base station (in km)
     */
    public function getSplatRadius() : ?int
    {
        return $this->splatRadius;
    }
    /**
     * Setter for mastEquipment
     *
     * @param int $mastEquipment LNA version of the base station. Mini stations have type 7 -> MINI. Mini Access
     *                           Stations have type 21.
     *                           
     *                           - {@see BaseStation::MAST_EQUIPMENT_OTHER}
     *                           - {@see BaseStation::MAST_EQUIPMENT_LNA_V2_SBS_868_P}
     *                           - {@see BaseStation::MAST_EQUIPMENT_LNA_V2_SBS_902_P}
     *                           - {@see BaseStation::MAST_EQUIPMENT_LNA_V2_NB_SBS_868_P}
     *                           - {@see BaseStation::MAST_EQUIPMENT_LNA_V1_SBS_868_P}
     *                           - {@see BaseStation::MAST_EQUIPMENT_LNA_V2_SBS_920_P}
     *                           - {@see BaseStation::MAST_EQUIPMENT_LNA_V2_SBS_923_P}
     *                           - {@see BaseStation::MAST_EQUIPMENT_MINI}
     *                           - {@see BaseStation::MAST_EQUIPMENT_LNA_V4_867}
     *                           - {@see BaseStation::MAST_EQUIPMENT_LNA_V4_915}
     *                           - {@see BaseStation::MAST_EQUIPMENT_LNAC_867}
     *                           - {@see BaseStation::MAST_EQUIPMENT_LNAC_868}
     *                           - {@see BaseStation::MAST_EQUIPMENT_LNAC_902}
     *                           - {@see BaseStation::MAST_EQUIPMENT_LNAC_916_TX}
     *                           - {@see BaseStation::MAST_EQUIPMENT_LNAC_921}
     *                           - {@see BaseStation::MAST_EQUIPMENT_LNAC_921_TX}
     *                           - {@see BaseStation::MAST_EQUIPMENT_LNAC_922_TX}
     *                           - {@see BaseStation::MAST_EQUIPMENT_LNA_V3_SBS_868_P}
     *                           - {@see BaseStation::MAST_EQUIPMENT_LNA_V3_SBS_902_P}
     *                           - {@see BaseStation::MAST_EQUIPMENT_LNA_V3_SBS_920_P}
     *                           - {@see BaseStation::MAST_EQUIPMENT_LNA_V3_SBS_923_P}
     *                           - {@see BaseStation::MAST_EQUIPMENT_NONE}
     *                           - {@see BaseStation::MAST_EQUIPMENT_LNAC_868_TX}
     *                           
     *
     * @return static To use in method chains
     */
    public function setMastEquipment(?int $mastEquipment)
    {
        $this->mastEquipment = $mastEquipment;
        return $this;
    }
    /**
     * Getter for mastEquipment
     *
     * @return int LNA version of the base station. Mini stations have type 7 -> MINI. Mini Access Stations have type
     *             21.
     *             
     *             - {@see BaseStation::MAST_EQUIPMENT_OTHER}
     *             - {@see BaseStation::MAST_EQUIPMENT_LNA_V2_SBS_868_P}
     *             - {@see BaseStation::MAST_EQUIPMENT_LNA_V2_SBS_902_P}
     *             - {@see BaseStation::MAST_EQUIPMENT_LNA_V2_NB_SBS_868_P}
     *             - {@see BaseStation::MAST_EQUIPMENT_LNA_V1_SBS_868_P}
     *             - {@see BaseStation::MAST_EQUIPMENT_LNA_V2_SBS_920_P}
     *             - {@see BaseStation::MAST_EQUIPMENT_LNA_V2_SBS_923_P}
     *             - {@see BaseStation::MAST_EQUIPMENT_MINI}
     *             - {@see BaseStation::MAST_EQUIPMENT_LNA_V4_867}
     *             - {@see BaseStation::MAST_EQUIPMENT_LNA_V4_915}
     *             - {@see BaseStation::MAST_EQUIPMENT_LNAC_867}
     *             - {@see BaseStation::MAST_EQUIPMENT_LNAC_868}
     *             - {@see BaseStation::MAST_EQUIPMENT_LNAC_902}
     *             - {@see BaseStation::MAST_EQUIPMENT_LNAC_916_TX}
     *             - {@see BaseStation::MAST_EQUIPMENT_LNAC_921}
     *             - {@see BaseStation::MAST_EQUIPMENT_LNAC_921_TX}
     *             - {@see BaseStation::MAST_EQUIPMENT_LNAC_922_TX}
     *             - {@see BaseStation::MAST_EQUIPMENT_LNA_V3_SBS_868_P}
     *             - {@see BaseStation::MAST_EQUIPMENT_LNA_V3_SBS_902_P}
     *             - {@see BaseStation::MAST_EQUIPMENT_LNA_V3_SBS_920_P}
     *             - {@see BaseStation::MAST_EQUIPMENT_LNA_V3_SBS_923_P}
     *             - {@see BaseStation::MAST_EQUIPMENT_NONE}
     *             - {@see BaseStation::MAST_EQUIPMENT_LNAC_868_TX}
     *             
     */
    public function getMastEquipment() : ?int
    {
        return $this->mastEquipment;
    }
    /**
     * Setter for mastEquipmentDescription
     *
     * @param string $mastEquipmentDescription The base station's mast equipment description
     *
     * @return static To use in method chains
     */
    public function setMastEquipmentDescription(?string $mastEquipmentDescription)
    {
        $this->mastEquipmentDescription = $mastEquipmentDescription;
        return $this;
    }
    /**
     * Getter for mastEquipmentDescription
     *
     * @return string The base station's mast equipment description
     */
    public function getMastEquipmentDescription() : ?string
    {
        return $this->mastEquipmentDescription;
    }
    /**
     * Setter for lnaByPass
     *
     * @param bool $lnaByPass true if the LNA is by-passed
     *
     * @return static To use in method chains
     */
    public function setLnaByPass(?bool $lnaByPass)
    {
        $this->lnaByPass = $lnaByPass;
        return $this;
    }
    /**
     * Getter for lnaByPass
     *
     * @return bool true if the LNA is by-passed
     */
    public function getLnaByPass() : ?bool
    {
        return $this->lnaByPass;
    }
    /**
     * Setter for cavityFilterVersion
     *
     * @param int $cavityFilterVersion Cavity filter version of the base station.
     *                                 
     *                                 - {@see BaseStation::CAVITY_FILTER_VERSION_NONE}
     *                                 - {@see BaseStation::CAVITY_FILTER_VERSION_OTHER}
     *                                 - {@see BaseStation::CAVITY_FILTER_VERSION_ETSI_868MHZ_MATECH}
     *                                 - {@see BaseStation::CAVITY_FILTER_VERSION_ETSI_868MHZ_ELHYTE}
     *                                 - {@see BaseStation::CAVITY_FILTER_VERSION_FCC_905MHZ_MATECH}
     *                                 - {@see BaseStation::CAVITY_FILTER_VERSION_FCC_905MHZ_ELHYTE}
     *                                 - {@see BaseStation::CAVITY_FILTER_VERSION_FCC_920MHZ}
     *                                 - {@see BaseStation::CAVITY_FILTER_VERSION_FCC_923MHZ}
     *                                 - {@see BaseStation::CAVITY_FILTER_VERSION_FCC_922_5MHZ}
     *                                 - {@see BaseStation::CAVITY_FILTER_VERSION_ETSI_867MHZ_MATECH}
     *                                 - {@see BaseStation::CAVITY_FILTER_VERSION_ETSI_867MHZ_TECHNIWAVE}
     *                                 
     *
     * @return static To use in method chains
     */
    public function setCavityFilterVersion(?int $cavityFilterVersion)
    {
        $this->cavityFilterVersion = $cavityFilterVersion;
        return $this;
    }
    /**
     * Getter for cavityFilterVersion
     *
     * @return int Cavity filter version of the base station.
     *             
     *             - {@see BaseStation::CAVITY_FILTER_VERSION_NONE}
     *             - {@see BaseStation::CAVITY_FILTER_VERSION_OTHER}
     *             - {@see BaseStation::CAVITY_FILTER_VERSION_ETSI_868MHZ_MATECH}
     *             - {@see BaseStation::CAVITY_FILTER_VERSION_ETSI_868MHZ_ELHYTE}
     *             - {@see BaseStation::CAVITY_FILTER_VERSION_FCC_905MHZ_MATECH}
     *             - {@see BaseStation::CAVITY_FILTER_VERSION_FCC_905MHZ_ELHYTE}
     *             - {@see BaseStation::CAVITY_FILTER_VERSION_FCC_920MHZ}
     *             - {@see BaseStation::CAVITY_FILTER_VERSION_FCC_923MHZ}
     *             - {@see BaseStation::CAVITY_FILTER_VERSION_FCC_922_5MHZ}
     *             - {@see BaseStation::CAVITY_FILTER_VERSION_ETSI_867MHZ_MATECH}
     *             - {@see BaseStation::CAVITY_FILTER_VERSION_ETSI_867MHZ_TECHNIWAVE}
     *             
     */
    public function getCavityFilterVersion() : ?int
    {
        return $this->cavityFilterVersion;
    }
    /**
     * Setter for cavityFilterVersionDescription
     *
     * @param string $cavityFilterVersionDescription The base station's cavity filter version description
     *
     * @return static To use in method chains
     */
    public function setCavityFilterVersionDescription(?string $cavityFilterVersionDescription)
    {
        $this->cavityFilterVersionDescription = $cavityFilterVersionDescription;
        return $this;
    }
    /**
     * Getter for cavityFilterVersionDescription
     *
     * @return string The base station's cavity filter version description
     */
    public function getCavityFilterVersionDescription() : ?string
    {
        return $this->cavityFilterVersionDescription;
    }
    /**
     * Setter for environmentLoss
     *
     * @param double $environmentLoss Environment loss of this base station (in dB)
     *
     * @return static To use in method chains
     */
    public function setEnvironmentLoss(?float $environmentLoss)
    {
        $this->environmentLoss = $environmentLoss;
        return $this;
    }
    /**
     * Getter for environmentLoss
     *
     * @return double Environment loss of this base station (in dB)
     */
    public function getEnvironmentLoss() : ?float
    {
        return $this->environmentLoss;
    }
    /**
     * Setter for cableLoss
     *
     * @param double $cableLoss Cable loss of this base station (in dB)
     *
     * @return static To use in method chains
     */
    public function setCableLoss(?float $cableLoss)
    {
        $this->cableLoss = $cableLoss;
        return $this;
    }
    /**
     * Getter for cableLoss
     *
     * @return double Cable loss of this base station (in dB)
     */
    public function getCableLoss() : ?float
    {
        return $this->cableLoss;
    }
    /**
     * Setter for antennaGain
     *
     * @param double $antennaGain Antenna gain of this base station (in dB).
     *
     * @return static To use in method chains
     */
    public function setAntennaGain(?float $antennaGain)
    {
        $this->antennaGain = $antennaGain;
        return $this;
    }
    /**
     * Getter for antennaGain
     *
     * @return double Antenna gain of this base station (in dB).
     */
    public function getAntennaGain() : ?float
    {
        return $this->antennaGain;
    }
    /**
     * Setter for antennaNoiseFigure
     *
     * @param double $antennaNoiseFigure Antenna noise figure of this base station (in dB). This setting is only
     *                                   relevant when an antenna with a filter is installed.
     *
     * @return static To use in method chains
     */
    public function setAntennaNoiseFigure(?float $antennaNoiseFigure)
    {
        $this->antennaNoiseFigure = $antennaNoiseFigure;
        return $this;
    }
    /**
     * Getter for antennaNoiseFigure
     *
     * @return double Antenna noise figure of this base station (in dB). This setting is only relevant when an
     *                antenna with a filter is installed.
     */
    public function getAntennaNoiseFigure() : ?float
    {
        return $this->antennaNoiseFigure;
    }
    /**
     * Setter for antennaInsertionLoss
     *
     * @param double $antennaInsertionLoss Antenna insertion loss of this base station (in dB). This setting is only
     *                                     relevant when an antenna with a filter is installed.
     *
     * @return static To use in method chains
     */
    public function setAntennaInsertionLoss(?float $antennaInsertionLoss)
    {
        $this->antennaInsertionLoss = $antennaInsertionLoss;
        return $this;
    }
    /**
     * Getter for antennaInsertionLoss
     *
     * @return double Antenna insertion loss of this base station (in dB). This setting is only relevant when an
     *                antenna with a filter is installed.
     */
    public function getAntennaInsertionLoss() : ?float
    {
        return $this->antennaInsertionLoss;
    }
    /**
     * Setter for antennaMaxAdmissiblePower
     *
     * @param double $antennaMaxAdmissiblePower Antenna max admissible power of this base station (in dBm). This
     *                                          setting is only relevant when an antenna with a filter is installed.
     *
     * @return static To use in method chains
     */
    public function setAntennaMaxAdmissiblePower(?float $antennaMaxAdmissiblePower)
    {
        $this->antennaMaxAdmissiblePower = $antennaMaxAdmissiblePower;
        return $this;
    }
    /**
     * Getter for antennaMaxAdmissiblePower
     *
     * @return double Antenna max admissible power of this base station (in dBm). This setting is only relevant when
     *                an antenna with a filter is installed.
     */
    public function getAntennaMaxAdmissiblePower() : ?float
    {
        return $this->antennaMaxAdmissiblePower;
    }
    /**
     * Setter for gainFlag
     *
     * @param bool $gainFlag true if the base station has a gain flag
     *
     * @return static To use in method chains
     */
    public function setGainFlag(?bool $gainFlag)
    {
        $this->gainFlag = $gainFlag;
        return $this;
    }
    /**
     * Getter for gainFlag
     *
     * @return bool true if the base station has a gain flag
     */
    public function getGainFlag() : ?bool
    {
        return $this->gainFlag;
    }
    /**
     * Setter for mastEquipmentGain
     *
     * @param double $mastEquipmentGain Mast equipment gain of this base station (in dB)
     *
     * @return static To use in method chains
     */
    public function setMastEquipmentGain(?float $mastEquipmentGain)
    {
        $this->mastEquipmentGain = $mastEquipmentGain;
        return $this;
    }
    /**
     * Getter for mastEquipmentGain
     *
     * @return double Mast equipment gain of this base station (in dB)
     */
    public function getMastEquipmentGain() : ?float
    {
        return $this->mastEquipmentGain;
    }
    /**
     * Setter for mastEquipmentNoiseFigure
     *
     * @param double $mastEquipmentNoiseFigure Mast equipment noise figure of this base station (in dB)
     *
     * @return static To use in method chains
     */
    public function setMastEquipmentNoiseFigure(?float $mastEquipmentNoiseFigure)
    {
        $this->mastEquipmentNoiseFigure = $mastEquipmentNoiseFigure;
        return $this;
    }
    /**
     * Getter for mastEquipmentNoiseFigure
     *
     * @return double Mast equipment noise figure of this base station (in dB)
     */
    public function getMastEquipmentNoiseFigure() : ?float
    {
        return $this->mastEquipmentNoiseFigure;
    }
    /**
     * Setter for lnaInsertionLoss
     *
     * @param double $lnaInsertionLoss LNA insertion loss of this base station (in dB)
     *
     * @return static To use in method chains
     */
    public function setLnaInsertionLoss(?float $lnaInsertionLoss)
    {
        $this->lnaInsertionLoss = $lnaInsertionLoss;
        return $this;
    }
    /**
     * Getter for lnaInsertionLoss
     *
     * @return double LNA insertion loss of this base station (in dB)
     */
    public function getLnaInsertionLoss() : ?float
    {
        return $this->lnaInsertionLoss;
    }
    /**
     * Setter for cavityFilterInsertionLoss
     *
     * @param double $cavityFilterInsertionLoss Cavity filter insertion loss of this base station (in dB)
     *
     * @return static To use in method chains
     */
    public function setCavityFilterInsertionLoss(?float $cavityFilterInsertionLoss)
    {
        $this->cavityFilterInsertionLoss = $cavityFilterInsertionLoss;
        return $this;
    }
    /**
     * Getter for cavityFilterInsertionLoss
     *
     * @return double Cavity filter insertion loss of this base station (in dB)
     */
    public function getCavityFilterInsertionLoss() : ?float
    {
        return $this->cavityFilterInsertionLoss;
    }
    /**
     * Setter for txPowerMargin
     *
     * @param double $txPowerMargin TX power margin of this base station (in dBm)
     *
     * @return static To use in method chains
     */
    public function setTxPowerMargin(?float $txPowerMargin)
    {
        $this->txPowerMargin = $txPowerMargin;
        return $this;
    }
    /**
     * Getter for txPowerMargin
     *
     * @return double TX power margin of this base station (in dBm)
     */
    public function getTxPowerMargin() : ?float
    {
        return $this->txPowerMargin;
    }
    /**
     * Setter for powerCapability
     *
     * @param double $powerCapability power capability of this base station (in dBm)
     *
     * @return static To use in method chains
     */
    public function setPowerCapability(?float $powerCapability)
    {
        $this->powerCapability = $powerCapability;
        return $this;
    }
    /**
     * Getter for powerCapability
     *
     * @return double power capability of this base station (in dBm)
     */
    public function getPowerCapability() : ?float
    {
        return $this->powerCapability;
    }
    /**
     * Setter for antennaLocationCode
     *
     * @param int $antennaLocationCode Antenna location.
     *                                 
     *                                 - {@see BaseStation::ANTENNA_LOCATION_CODE_OUTDOOR}
     *                                 - {@see BaseStation::ANTENNA_LOCATION_CODE_INDOOR}
     *                                 
     *
     * @return static To use in method chains
     */
    public function setAntennaLocationCode(?int $antennaLocationCode)
    {
        $this->antennaLocationCode = $antennaLocationCode;
        return $this;
    }
    /**
     * Getter for antennaLocationCode
     *
     * @return int Antenna location.
     *             
     *             - {@see BaseStation::ANTENNA_LOCATION_CODE_OUTDOOR}
     *             - {@see BaseStation::ANTENNA_LOCATION_CODE_INDOOR}
     *             
     */
    public function getAntennaLocationCode() : ?int
    {
        return $this->antennaLocationCode;
    }
    /**
     * Setter for serviceCoverage
     *
     * @param int $serviceCoverage Service coverage (for Mini base station)
     *                             
     *                             - {@see BaseStation::SERVICE_COVERAGE_GLOBAL}
     *                             - {@see BaseStation::SERVICE_COVERAGE_CUSTOMER}
     *                             
     *
     * @return static To use in method chains
     */
    public function setServiceCoverage(?int $serviceCoverage)
    {
        $this->serviceCoverage = $serviceCoverage;
        return $this;
    }
    /**
     * Getter for serviceCoverage
     *
     * @return int Service coverage (for Mini base station)
     *             
     *             - {@see BaseStation::SERVICE_COVERAGE_GLOBAL}
     *             - {@see BaseStation::SERVICE_COVERAGE_CUSTOMER}
     *             
     */
    public function getServiceCoverage() : ?int
    {
        return $this->serviceCoverage;
    }
    /**
     * Setter for geolocComputation
     *
     * @param int $geolocComputation Defines whether the Base Station should contribute to the Sigfox Network
     *                               location service.
     *                               
     *                               - {@see BaseStation::GEOLOC_COMPUTATION_DEFAULT}
     *                               - {@see BaseStation::GEOLOC_COMPUTATION_ENABLED}
     *                               - {@see BaseStation::GEOLOC_COMPUTATION_DISABLED}
     *                               
     *
     * @return static To use in method chains
     */
    public function setGeolocComputation(?int $geolocComputation)
    {
        $this->geolocComputation = $geolocComputation;
        return $this;
    }
    /**
     * Getter for geolocComputation
     *
     * @return int Defines whether the Base Station should contribute to the Sigfox Network location service.
     *             
     *             - {@see BaseStation::GEOLOC_COMPUTATION_DEFAULT}
     *             - {@see BaseStation::GEOLOC_COMPUTATION_ENABLED}
     *             - {@see BaseStation::GEOLOC_COMPUTATION_DISABLED}
     *             
     */
    public function getGeolocComputation() : ?int
    {
        return $this->geolocComputation;
    }
    /**
     * Setter for geolocGlobalStateOfContribution
     *
     * @param int $geolocGlobalStateOfContribution The status, computed by the geolocation services, of the Base
     *                                             Station's contribution to the Sigfox Network location service.
     *                                             
     *                                             - {@see
     *                                             BaseStation::GEOLOC_GLOBAL_STATE_OF_CONTRIBUTION_NOT_CONTRIBUTING}
     *                                             - {@see
     *                                             BaseStation::GEOLOC_GLOBAL_STATE_OF_CONTRIBUTION_CURRENTLY_CONTRIBUTING}
     *                                             - {@see
     *                                             BaseStation::GEOLOC_GLOBAL_STATE_OF_CONTRIBUTION_GREY_LISTED}
     *                                             - {@see
     *                                             BaseStation::GEOLOC_GLOBAL_STATE_OF_CONTRIBUTION_BLACK_LISTED}
     *                                             - {@see
     *                                             BaseStation::GEOLOC_GLOBAL_STATE_OF_CONTRIBUTION_NOT_AVAILABLE}
     *                                             
     *
     * @return static To use in method chains
     */
    public function setGeolocGlobalStateOfContribution(?int $geolocGlobalStateOfContribution)
    {
        $this->geolocGlobalStateOfContribution = $geolocGlobalStateOfContribution;
        return $this;
    }
    /**
     * Getter for geolocGlobalStateOfContribution
     *
     * @return int The status, computed by the geolocation services, of the Base Station's contribution to the Sigfox
     *             Network location service.
     *             
     *             - {@see BaseStation::GEOLOC_GLOBAL_STATE_OF_CONTRIBUTION_NOT_CONTRIBUTING}
     *             - {@see BaseStation::GEOLOC_GLOBAL_STATE_OF_CONTRIBUTION_CURRENTLY_CONTRIBUTING}
     *             - {@see BaseStation::GEOLOC_GLOBAL_STATE_OF_CONTRIBUTION_GREY_LISTED}
     *             - {@see BaseStation::GEOLOC_GLOBAL_STATE_OF_CONTRIBUTION_BLACK_LISTED}
     *             - {@see BaseStation::GEOLOC_GLOBAL_STATE_OF_CONTRIBUTION_NOT_AVAILABLE}
     *             
     */
    public function getGeolocGlobalStateOfContribution() : ?int
    {
        return $this->geolocGlobalStateOfContribution;
    }
    /**
     * Setter for antenna
     *
     * @param Antenna $antenna
     *
     * @return static To use in method chains
     */
    public function setAntenna(?Antenna $antenna)
    {
        $this->antenna = $antenna;
        return $this;
    }
    /**
     * Getter for antenna
     *
     * @return Antenna
     */
    public function getAntenna() : ?Antenna
    {
        return $this->antenna;
    }
    /**
     * Setter for availableConnections
     *
     * @param int[] $availableConnections
     *
     * @return static To use in method chains
     */
    public function setAvailableConnections(?array $availableConnections)
    {
        $this->availableConnections = $availableConnections;
        return $this;
    }
    /**
     * Getter for availableConnections
     *
     * @return int[]
     */
    public function getAvailableConnections() : ?array
    {
        return $this->availableConnections;
    }
    /**
     * Setter for makerCode
     *
     * @param string $makerCode the base station???s marker code
     *
     * @return static To use in method chains
     */
    public function setMakerCode(?string $makerCode)
    {
        $this->makerCode = $makerCode;
        return $this;
    }
    /**
     * Getter for makerCode
     *
     * @return string the base station???s marker code
     */
    public function getMakerCode() : ?string
    {
        return $this->makerCode;
    }
    /**
     * Setter for actions
     *
     * @param string[] $actions
     *
     * @return static To use in method chains
     */
    public function setActions(?array $actions)
    {
        $this->actions = $actions;
        return $this;
    }
    /**
     * Getter for actions
     *
     * @return string[]
     */
    public function getActions() : ?array
    {
        return $this->actions;
    }
    /**
     * Setter for resources
     *
     * @param string[] $resources
     *
     * @return static To use in method chains
     */
    public function setResources(?array $resources)
    {
        $this->resources = $resources;
        return $this;
    }
    /**
     * Getter for resources
     *
     * @return string[]
     */
    public function getResources() : ?array
    {
        return $this->resources;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('id' => new PrimitiveSerializer('string'), 'name' => new PrimitiveSerializer('string'), 'versionCurrent' => new PrimitiveSerializer('string'), 'hwVersion' => new PrimitiveSerializer('string'), 'group' => new ClassSerializer(MinGroup::class), 'firstCommissioningTime' => new PrimitiveSerializer('int'), 'commissioningTime' => new PrimitiveSerializer('int'), 'decommissioningTime' => new PrimitiveSerializer('int'), 'operatingDays' => new PrimitiveSerializer('int'), 'manufacturerDeliveryTime' => new PrimitiveSerializer('int'), 'warrantyTime' => new PrimitiveSerializer('int'), 'lastCommunicationTime' => new PrimitiveSerializer('int'), 'lastPingTime' => new PrimitiveSerializer('int'), 'restartTime' => new PrimitiveSerializer('int'), 'connectionType' => new PrimitiveSerializer('int'), 'description' => new PrimitiveSerializer('string'), 'location' => new ArraySerializer(new ClassSerializer(LocationItem::class)), 'hwFamily' => new ClassSerializer(MinHwFamily::class), 'keepAlive' => new PrimitiveSerializer('int'), 'lat' => new PrimitiveSerializer('double'), 'lng' => new PrimitiveSerializer('double'), 'communicationState' => new PrimitiveSerializer('int'), 'state' => new PrimitiveSerializer('int'), 'lifecycleStatus' => new PrimitiveSerializer('int'), 'queue' => new ClassSerializer(Queue::class), 'muted' => new PrimitiveSerializer('bool'), 'transmissionAuthorized' => new PrimitiveSerializer('bool'), 'downlinkEnabled' => new PrimitiveSerializer('bool'), 'installer' => new PrimitiveSerializer('string'), 'creationTime' => new PrimitiveSerializer('int'), 'createdBy' => new PrimitiveSerializer('string'), 'lastEditionTime' => new PrimitiveSerializer('int'), 'lastEditedBy' => new PrimitiveSerializer('string'), 'baseFrequency' => new PrimitiveSerializer('int'), 'downlinkCenterFrequency' => new PrimitiveSerializer('int'), 'macroChannel' => new PrimitiveSerializer('int'), 'txPowerAmplification' => new PrimitiveSerializer('int'), 'protocol' => new PrimitiveSerializer('int'), 'preAmp1' => new PrimitiveSerializer('int'), 'preAmp2' => new PrimitiveSerializer('int'), 'RAMLog' => new PrimitiveSerializer('int'), 'wwanMode' => new PrimitiveSerializer('int'), 'bitRate' => new PrimitiveSerializer('int'), 'globalCoverageEnable' => new PrimitiveSerializer('bool'), 'elevation' => new PrimitiveSerializer('int'), 'splatRadius' => new PrimitiveSerializer('int'), 'mastEquipment' => new PrimitiveSerializer('int'), 'mastEquipmentDescription' => new PrimitiveSerializer('string'), 'lnaByPass' => new PrimitiveSerializer('bool'), 'cavityFilterVersion' => new PrimitiveSerializer('int'), 'cavityFilterVersionDescription' => new PrimitiveSerializer('string'), 'environmentLoss' => new PrimitiveSerializer('double'), 'cableLoss' => new PrimitiveSerializer('double'), 'antennaGain' => new PrimitiveSerializer('double'), 'antennaNoiseFigure' => new PrimitiveSerializer('double'), 'antennaInsertionLoss' => new PrimitiveSerializer('double'), 'antennaMaxAdmissiblePower' => new PrimitiveSerializer('double'), 'gainFlag' => new PrimitiveSerializer('bool'), 'mastEquipmentGain' => new PrimitiveSerializer('double'), 'mastEquipmentNoiseFigure' => new PrimitiveSerializer('double'), 'lnaInsertionLoss' => new PrimitiveSerializer('double'), 'cavityFilterInsertionLoss' => new PrimitiveSerializer('double'), 'txPowerMargin' => new PrimitiveSerializer('double'), 'powerCapability' => new PrimitiveSerializer('double'), 'antennaLocationCode' => new PrimitiveSerializer('int'), 'serviceCoverage' => new PrimitiveSerializer('int'), 'geolocComputation' => new PrimitiveSerializer('int'), 'geolocGlobalStateOfContribution' => new PrimitiveSerializer('int'), 'antenna' => new ClassSerializer(Antenna::class), 'availableConnections' => new ArraySerializer(new PrimitiveSerializer('int')), 'makerCode' => new PrimitiveSerializer('string'), 'actions' => new ArraySerializer(new PrimitiveSerializer('string')), 'resources' => new ArraySerializer(new PrimitiveSerializer('string')));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('group' => array(new Child()), 'location' => array(new ChildSet()), 'hwFamily' => array(new Child()), 'queue' => array(new Child()), 'macroChannel' => array(new Min(0)), 'txPowerMargin' => array(new Max(20), new Min(-20)), 'antenna' => array(new Child()));
        return $rules;
    }
}