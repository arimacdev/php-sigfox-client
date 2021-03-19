<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\object;
use Arimac\Sigfox\Definition\object;
use Arimac\Sigfox\Definition\object;
use Arimac\Sigfox\Definition\object;
use Arimac\Sigfox\Definition\Actions;
use Arimac\Sigfox\Definition\Resources;
/**
 * Defines the base station's properties
 */
class BaseStation
{
    /** ETH */
    public const CONNECTION_TYPE_ETH = 0;
    /** GSM */
    public const CONNECTION_TYPE_GSM = 1;
    /** NO */
    public const COMMUNICATION_STATE_NO = 0;
    /** OK */
    public const COMMUNICATION_STATE_OK = 1;
    /** WARN */
    public const COMMUNICATION_STATE_WARN = 2;
    /** KO */
    public const COMMUNICATION_STATE_KO = 3;
    /** OK KO */
    public const COMMUNICATION_STATE_OK_KO = 4;
    /** NO */
    public const STATE_NO = 0;
    /** OK */
    public const STATE_OK = 1;
    /** WARN */
    public const STATE_WARN = 2;
    /** KO */
    public const STATE_KO = 3;
    /** OK KO */
    public const STATE_OK_KO = 4;
    /** STOCK */
    public const LIFECYCLE_STATUS_STOCK = 0;
    /** PROD */
    public const LIFECYCLE_STATUS_PROD = 1;
    /** MAINTENANCE */
    public const LIFECYCLE_STATUS_MAINTENANCE = 2;
    /** DEAD */
    public const LIFECYCLE_STATUS_DEAD = 3;
    /** V0 */
    public const PROTOCOL_V0 = 1;
    /** V1 */
    public const PROTOCOL_V1 = 2;
    /** BOTH */
    public const PROTOCOL_BOTH = 3;
    /** LNA */
    public const PRE_AMP1_LNA = 0;
    /** BYPASS */
    public const PRE_AMP1_BYPASS = 1;
    /** ATTEND */
    public const PRE_AMP1_ATTEND = 2;
    /** LNA */
    public const PRE_AMP2_LNA = 0;
    /** BYPASS */
    public const PRE_AMP2_BYPASS = 1;
    /** ATTEND */
    public const PRE_AMP2_ATTEND = 2;
    /** YES */
    public const R_A_M_LOG_YES = 0;
    /** NO */
    public const R_A_M_LOG_NO = 1;
    /** AUTO */
    public const R_A_M_LOG_AUTO = 2;
    /** DROP */
    public const R_A_M_LOG_DROP = 3;
    /** NONE */
    public const WWAN_MODE_NONE = 0;
    /** AUTO */
    public const WWAN_MODE_AUTO = 1;
    /** WCDMA */
    public const WWAN_MODE_WCDMA = 2;
    /** WCDMA_PREF */
    public const WWAN_MODE_WCDMA_PREF = 3;
    /** GPRS_PREF */
    public const WWAN_MODE_GPRS_PREF = 4;
    /** GPRS */
    public const WWAN_MODE_GPRS = 5;
    /** bit rate 100 b/s */
    public const BIT_RATE_BIT_RATE_100_BS = 0;
    /** bit rate 600 b/s */
    public const BIT_RATE_BIT_RATE_600_BS = 1;
    /** OTHER */
    public const MAST_EQUIPMENT_OTHER = 0;
    /** LNA_V2_SBS_868_P */
    public const MAST_EQUIPMENT_LNA_V2_SBS_868_P = 1;
    /** LNA_V2_SBS_902_P */
    public const MAST_EQUIPMENT_LNA_V2_SBS_902_P = 2;
    /** LNA_V2_NB_SBS_868_P */
    public const MAST_EQUIPMENT_LNA_V2_NB_SBS_868_P = 3;
    /** LNA_V1_SBS_868_P */
    public const MAST_EQUIPMENT_LNA_V1_SBS_868_P = 4;
    /** LNA_V2_SBS_920_P */
    public const MAST_EQUIPMENT_LNA_V2_SBS_920_P = 5;
    /** LNA_V2_SBS_923_P */
    public const MAST_EQUIPMENT_LNA_V2_SBS_923_P = 6;
    /** MINI */
    public const MAST_EQUIPMENT_MINI = 7;
    /** LNA_V4_867 */
    public const MAST_EQUIPMENT_LNA_V4_867 = 8;
    /** LNA_V4_915 */
    public const MAST_EQUIPMENT_LNA_V4_915 = 9;
    /** LNAC_867 */
    public const MAST_EQUIPMENT_LNAC_867 = 10;
    /** LNAC_868 */
    public const MAST_EQUIPMENT_LNAC_868 = 11;
    /** LNAC_902 */
    public const MAST_EQUIPMENT_LNAC_902 = 12;
    /** LNAC_916_TX */
    public const MAST_EQUIPMENT_LNAC_916_TX = 13;
    /** LNAC_921 */
    public const MAST_EQUIPMENT_LNAC_921 = 14;
    /** LNAC_921_TX */
    public const MAST_EQUIPMENT_LNAC_921_TX = 15;
    /** LNAC_922_TX */
    public const MAST_EQUIPMENT_LNAC_922_TX = 16;
    /** LNA_V3_SBS_868_P */
    public const MAST_EQUIPMENT_LNA_V3_SBS_868_P = 17;
    /** LNA_V3_SBS_902_P */
    public const MAST_EQUIPMENT_LNA_V3_SBS_902_P = 18;
    /** LNA_V3_SBS_920_P */
    public const MAST_EQUIPMENT_LNA_V3_SBS_920_P = 19;
    /** LNA_V3_SBS_923_P */
    public const MAST_EQUIPMENT_LNA_V3_SBS_923_P = 20;
    /** NONE */
    public const MAST_EQUIPMENT_NONE = 21;
    /** LNAC_868_TX */
    public const MAST_EQUIPMENT_LNAC_868_TX = 22;
    /** Other */
    public const CAVITY_FILTER_VERSION_OTHER = 0;
    /** ETSI 868MHz (Matech) */
    public const CAVITY_FILTER_VERSION_ETSI_868MHZ_MATECH = 1;
    /** ETSI 868MHz (Elhyte) */
    public const CAVITY_FILTER_VERSION_ETSI_868MHZ_ELHYTE = 2;
    /** FCC 905MHz (Matech) */
    public const CAVITY_FILTER_VERSION_FCC_905MHZ_MATECH = 3;
    /** FCC 905MHz (Elhyte) */
    public const CAVITY_FILTER_VERSION_FCC_905MHZ_ELHYTE = 4;
    /** FCC 920MHz */
    public const CAVITY_FILTER_VERSION_FCC_920MHZ = 5;
    /** FCC 923MHz */
    public const CAVITY_FILTER_VERSION_FCC_923MHZ = 6;
    /** FCC 922.5MHz */
    public const CAVITY_FILTER_VERSION_FCC_9225MHZ = 7;
    /** ETSI 867MHz (Matech) */
    public const CAVITY_FILTER_VERSION_ETSI_867MHZ_MATECH = 8;
    /** ETSI 867MHz (Techniwave) */
    public const CAVITY_FILTER_VERSION_ETSI_867MHZ_TECHNIWAVE = 9;
    /** OUTDOOR */
    public const ANTENNA_LOCATION_CODE_OUTDOOR = 0;
    /** INDOOR */
    public const ANTENNA_LOCATION_CODE_INDOOR = 1;
    /** GLOBAL */
    public const SERVICE_COVERAGE_GLOBAL = 0;
    /** CUSTOMER */
    public const SERVICE_COVERAGE_CUSTOMER = 1;
    /** DEFAULT */
    public const GEOLOC_COMPUTATION_DEFAULT = 0;
    /** ENABLED */
    public const GEOLOC_COMPUTATION_ENABLED = 1;
    /** DISABLED */
    public const GEOLOC_COMPUTATION_DISABLED = 2;
    /** Not contributing */
    public const GEOLOC_GLOBAL_STATE_OF_CONTRIBUTION_NOT_CONTRIBUTING = 0;
    /** Currently contributing */
    public const GEOLOC_GLOBAL_STATE_OF_CONTRIBUTION_CURRENTLY_CONTRIBUTING = 1;
    /** Grey listed */
    public const GEOLOC_GLOBAL_STATE_OF_CONTRIBUTION_GREY_LISTED = 2;
    /** Black listed */
    public const GEOLOC_GLOBAL_STATE_OF_CONTRIBUTION_BLACK_LISTED = 3;
    /** Contribution status not available for the moment */
    public const GEOLOC_GLOBAL_STATE_OF_CONTRIBUTION_CONTRIBUTION_STATUS_NOT_AVAILABLE_FOR_THE_MOMENT = 4;
    /**
     * The base station's identifier (hexadecimal format)
     *
     * @var string
     */
    protected string $id;
    /**
     * The base station's name
     *
     * @var string
     */
    protected string $name;
    /**
     * The current version of the software installed on this base station
     *
     * @var string
     */
    protected string $versionCurrent;
    /**
     * The current version of the hardware of this base station
     *
     * @var string
     */
    protected string $hwVersion;
    /** @var object */
    protected object $group;
    /**
     * The first commissioning time of the station (in milliseconds)
     *
     * @var int
     */
    protected int $firstCommissioningTime;
    /**
     * The commissioning time of the station (in milliseconds)
     *
     * @var int
     */
    protected int $commissioningTime;
    /**
     * The decommissioning time of the station (in milliseconds)
     *
     * @var int
     */
    protected int $decommissioningTime;
    /**
     * The number of operating days of the station. To present if the station was not decommissioned, or to decommisioning time otherwise
     *
     * @var int
     */
    protected int $operatingDays;
    /**
     * Date of the delivery made by the manufacturer for this base station
     *
     * @var int
     */
    protected int $manufacturerDeliveryTime;
    /**
     * Date of the beginning of the warranty for this base station
     *
     * @var int
     */
    protected int $warrantyTime;
    /**
     * Date of the last communication made with this base station
     *
     * @var int
     */
    protected int $lastCommunicationTime;
    /**
     * Date of the last PING received from this base station
     *
     * @var int
     */
    protected int $lastPingTime;
    /**
     * Date of the last restart of this base station
     *
     * @var int
     */
    protected int $restartTime;
    /**
     * Base station connection type.
     * - `BaseStation::CONNECTION_TYPE_ETH`
     * - `BaseStation::CONNECTION_TYPE_GSM`
     *
     * @var int
     */
    protected int $connectionType;
    /**
     * Description of the base station
     *
     * @var string
     */
    protected string $description;
    /**
     * ISO 3166-1 UN M.49 country code of the site location. The first code is the country (region and department available for some countries).
     *
     * @var array
     */
    protected array $location;
    /** @var object */
    protected object $hwFamily;
    /**
     * Number of seconds the base station keep alive
     *
     * @var int
     */
    protected int $keepAlive;
    /**
     * The base station's latitude
     *
     * @var int
     */
    protected int $lat;
    /**
     * The base station's longitude
     *
     * @var int
     */
    protected int $lng;
    /**
     * Base station communication state.
     * - `BaseStation::COMMUNICATION_STATE_NO`
     * - `BaseStation::COMMUNICATION_STATE_OK`
     * - `BaseStation::COMMUNICATION_STATE_WARN`
     * - `BaseStation::COMMUNICATION_STATE_KO`
     * - `BaseStation::COMMUNICATION_STATE_OK_KO`
     *
     * @var int
     */
    protected int $communicationState;
    /**
     * Base station state.
     * - `BaseStation::STATE_NO`
     * - `BaseStation::STATE_OK`
     * - `BaseStation::STATE_WARN`
     * - `BaseStation::STATE_KO`
     * - `BaseStation::STATE_OK_KO`
     *
     * @var int
     */
    protected int $state;
    /**
     * Base station lifecycle status
     * - `BaseStation::LIFECYCLE_STATUS_STOCK`
     * - `BaseStation::LIFECYCLE_STATUS_PROD`
     * - `BaseStation::LIFECYCLE_STATUS_MAINTENANCE`
     * - `BaseStation::LIFECYCLE_STATUS_DEAD`
     *
     * @var int
     */
    protected int $lifecycleStatus;
    /** @var object */
    protected object $queue;
    /**
     * true if the base station is muted
     *
     * @var bool
     */
    protected bool $muted;
    /**
     * true if the transmission is authorized on this base station
     *
     * @var bool
     */
    protected bool $transmissionAuthorized;
    /**
     * true if the downlink is enabled on this base station
     *
     * @var bool
     */
    protected bool $downlinkEnabled;
    /**
     * Name if the installer of this base station
     *
     * @var string
     */
    protected string $installer;
    /**
     * Date of the creation of the base station (in milliseconds since Unix Epoch)
     *
     * @var int
     */
    protected int $creationTime;
    /**
     * Id of the user who created this base station
     *
     * @var string
     */
    protected string $createdBy;
    /**
     * Date of the last modification made on this base station (in milliseconds since Unix Epoch)
     *
     * @var int
     */
    protected int $lastEditionTime;
    /**
     * Id of the user who edited this base station for the last time
     *
     * @var string
     */
    protected string $lastEditedBy;
    /**
     * Uplink base frequency of this base station (in Hz)
     *
     * @var int
     */
    protected int $baseFrequency;
    /**
     * Downlink center frequency of this base station (in Hz)
     *
     * @var int
     */
    protected int $downlinkCenterFrequency;
    /**
     * Macro channel of this base station (in Hz)
     *
     * @var int
     */
    protected int $macroChannel;
    /**
     * TX power amplification of this base station (in %)
     *
     * @var int
     */
    protected int $txPowerAmplification;
    /**
     * Base station protocol.
     * - `BaseStation::PROTOCOL_V0`
     * - `BaseStation::PROTOCOL_V1`
     * - `BaseStation::PROTOCOL_BOTH`
     *
     * @var int
     */
    protected int $protocol;
    /**
     * Base station pre amp 1.
     * - `BaseStation::PRE_AMP1_LNA`
     * - `BaseStation::PRE_AMP1_BYPASS`
     * - `BaseStation::PRE_AMP1_ATTEND`
     *
     * @var int
     */
    protected int $preAmp1;
    /**
     * Base station pre amp 2.
     * - `BaseStation::PRE_AMP2_LNA`
     * - `BaseStation::PRE_AMP2_BYPASS`
     * - `BaseStation::PRE_AMP2_ATTEND`
     *
     * @var int
     */
    protected int $preAmp2;
    /**
     * Base station RAM log.
     * - `BaseStation::R_A_M_LOG_YES`
     * - `BaseStation::R_A_M_LOG_NO`
     * - `BaseStation::R_A_M_LOG_AUTO`
     * - `BaseStation::R_A_M_LOG_DROP`
     *
     * @var int
     */
    protected int $RAMLog;
    /**
     * Base station WWAN mode.
     * - `BaseStation::WWAN_MODE_NONE`
     * - `BaseStation::WWAN_MODE_AUTO`
     * - `BaseStation::WWAN_MODE_WCDMA`
     * - `BaseStation::WWAN_MODE_WCDMA_PREF`
     * - `BaseStation::WWAN_MODE_GPRS_PREF`
     * - `BaseStation::WWAN_MODE_GPRS`
     *
     * @var int
     */
    protected int $wwanMode;
    /**
     * Base station bit rate.
     * - `BaseStation::BIT_RATE_BIT_RATE_100_BS`
     * - `BaseStation::BIT_RATE_BIT_RATE_600_BS`
     *
     * @var int
     */
    protected int $bitRate;
    /**
     * true if the base station is available for the global coverage computation
     *
     * @var bool
     */
    protected bool $globalCoverageEnable;
    /**
     * Antenna height of the base station (in m)
     *
     * @var int
     */
    protected int $elevation;
    /**
     * Radius of the base station (in km)
     *
     * @var int
     */
    protected int $splatRadius;
    /**
     * LNA version of the base station. Mini stations have type 7 -> MINI. Mini Access Stations have type 21.
     * - `BaseStation::MAST_EQUIPMENT_OTHER`
     * - `BaseStation::MAST_EQUIPMENT_LNA_V2_SBS_868_P`
     * - `BaseStation::MAST_EQUIPMENT_LNA_V2_SBS_902_P`
     * - `BaseStation::MAST_EQUIPMENT_LNA_V2_NB_SBS_868_P`
     * - `BaseStation::MAST_EQUIPMENT_LNA_V1_SBS_868_P`
     * - `BaseStation::MAST_EQUIPMENT_LNA_V2_SBS_920_P`
     * - `BaseStation::MAST_EQUIPMENT_LNA_V2_SBS_923_P`
     * - `BaseStation::MAST_EQUIPMENT_MINI`
     * - `BaseStation::MAST_EQUIPMENT_LNA_V4_867`
     * - `BaseStation::MAST_EQUIPMENT_LNA_V4_915`
     * - `BaseStation::MAST_EQUIPMENT_LNAC_867`
     * - `BaseStation::MAST_EQUIPMENT_LNAC_868`
     * - `BaseStation::MAST_EQUIPMENT_LNAC_902`
     * - `BaseStation::MAST_EQUIPMENT_LNAC_916_TX`
     * - `BaseStation::MAST_EQUIPMENT_LNAC_921`
     * - `BaseStation::MAST_EQUIPMENT_LNAC_921_TX`
     * - `BaseStation::MAST_EQUIPMENT_LNAC_922_TX`
     * - `BaseStation::MAST_EQUIPMENT_LNA_V3_SBS_868_P`
     * - `BaseStation::MAST_EQUIPMENT_LNA_V3_SBS_902_P`
     * - `BaseStation::MAST_EQUIPMENT_LNA_V3_SBS_920_P`
     * - `BaseStation::MAST_EQUIPMENT_LNA_V3_SBS_923_P`
     * - `BaseStation::MAST_EQUIPMENT_NONE`
     * - `BaseStation::MAST_EQUIPMENT_LNAC_868_TX`
     *
     * @var int
     */
    protected int $mastEquipment;
    /**
     * The base station's mast equipment description
     *
     * @var string
     */
    protected string $mastEquipmentDescription;
    /**
     * true if the LNA is by-passed
     *
     * @var bool
     */
    protected bool $lnaByPass;
    /**
     * Cavity filter version of the base station.
     * -1 -> None
     * - `BaseStation::CAVITY_FILTER_VERSION_OTHER`
     * - `BaseStation::CAVITY_FILTER_VERSION_ETSI_868MHZ_MATECH`
     * - `BaseStation::CAVITY_FILTER_VERSION_ETSI_868MHZ_ELHYTE`
     * - `BaseStation::CAVITY_FILTER_VERSION_FCC_905MHZ_MATECH`
     * - `BaseStation::CAVITY_FILTER_VERSION_FCC_905MHZ_ELHYTE`
     * - `BaseStation::CAVITY_FILTER_VERSION_FCC_920MHZ`
     * - `BaseStation::CAVITY_FILTER_VERSION_FCC_923MHZ`
     * - `BaseStation::CAVITY_FILTER_VERSION_FCC_9225MHZ`
     * - `BaseStation::CAVITY_FILTER_VERSION_ETSI_867MHZ_MATECH`
     * - `BaseStation::CAVITY_FILTER_VERSION_ETSI_867MHZ_TECHNIWAVE`
     *
     * @var int
     */
    protected int $cavityFilterVersion;
    /**
     * The base station's cavity filter version description
     *
     * @var string
     */
    protected string $cavityFilterVersionDescription;
    /**
     * Environment loss of this base station (in dB)
     *
     * @var int
     */
    protected int $environmentLoss;
    /**
     * Cable loss of this base station (in dB)
     *
     * @var int
     */
    protected int $cableLoss;
    /**
     * Antenna gain of this base station (in dB).
     *
     * @var int
     */
    protected int $antennaGain;
    /**
     * Antenna noise figure of this base station (in dB). This setting is only relevant when an antenna with a filter is installed.
     *
     * @var int
     */
    protected int $antennaNoiseFigure;
    /**
     * Antenna insertion loss of this base station (in dB). This setting is only relevant when an antenna with a filter is installed.
     *
     * @var int
     */
    protected int $antennaInsertionLoss;
    /**
     * Antenna max admissible power of this base station (in dBm). This setting is only relevant when an antenna with a filter is installed.
     *
     * @var int
     */
    protected int $antennaMaxAdmissiblePower;
    /**
     * true if the base station has a gain flag
     *
     * @var bool
     */
    protected bool $gainFlag;
    /**
     * Mast equipment gain of this base station (in dB)
     *
     * @var int
     */
    protected int $mastEquipmentGain;
    /**
     * Mast equipment noise figure of this base station (in dB)
     *
     * @var int
     */
    protected int $mastEquipmentNoiseFigure;
    /**
     * LNA insertion loss of this base station (in dB)
     *
     * @var int
     */
    protected int $lnaInsertionLoss;
    /**
     * Cavity filter insertion loss of this base station (in dB)
     *
     * @var int
     */
    protected int $cavityFilterInsertionLoss;
    /**
     * TX power margin of this base station (in dBm)
     *
     * @var int
     */
    protected int $txPowerMargin;
    /**
     * power capability of this base station (in dBm)
     *
     * @var int
     */
    protected int $powerCapability;
    /**
     * Antenna location.
     * - `BaseStation::ANTENNA_LOCATION_CODE_OUTDOOR`
     * - `BaseStation::ANTENNA_LOCATION_CODE_INDOOR`
     *
     * @var int
     */
    protected int $antennaLocationCode;
    /**
     * Service coverage (for Mini base station)
     * - `BaseStation::SERVICE_COVERAGE_GLOBAL`
     * - `BaseStation::SERVICE_COVERAGE_CUSTOMER`
     *
     * @var int
     */
    protected int $serviceCoverage;
    /**
     * Defines whether the Base Station should contribute to the Sigfox Network location service.
     * - `BaseStation::GEOLOC_COMPUTATION_DEFAULT`
     * - `BaseStation::GEOLOC_COMPUTATION_ENABLED`
     * - `BaseStation::GEOLOC_COMPUTATION_DISABLED`
     *
     * @var int
     */
    protected int $geolocComputation;
    /**
     * The status, computed by the geolocation services, of the Base Station's contribution to the Sigfox Network location service.
     * - `BaseStation::GEOLOC_GLOBAL_STATE_OF_CONTRIBUTION_NOT_CONTRIBUTING`
     * - `BaseStation::GEOLOC_GLOBAL_STATE_OF_CONTRIBUTION_CURRENTLY_CONTRIBUTING`
     * - `BaseStation::GEOLOC_GLOBAL_STATE_OF_CONTRIBUTION_GREY_LISTED`
     * - `BaseStation::GEOLOC_GLOBAL_STATE_OF_CONTRIBUTION_BLACK_LISTED`
     * - `BaseStation::GEOLOC_GLOBAL_STATE_OF_CONTRIBUTION_CONTRIBUTION_STATUS_NOT_AVAILABLE_FOR_THE_MOMENT`
     *
     * @var int
     */
    protected int $geolocGlobalStateOfContribution;
    /** @var object */
    protected object $antenna;
    /** @var int[] */
    protected array $availableConnections;
    /**
     * the base station’s marker code
     *
     * @var string
     */
    protected string $makerCode;
    /** @var Actions */
    protected Actions $actions;
    /** @var Resources */
    protected Resources $resources;
}