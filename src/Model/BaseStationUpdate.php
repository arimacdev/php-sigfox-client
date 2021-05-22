<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Validator\Rules\Max;
use Arimac\Sigfox\Validator\Rules\Min;
use Arimac\Sigfox\Validator\Rules\Child;
/**
 * Provide information to update a Base Station
 */
class BaseStationUpdate extends Model
{
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
    public const CAVITY_FILTER_VERSION_FCC_9225MHZ = 7;
    /**
     * ETSI 867MHz (Matech)
     */
    public const CAVITY_FILTER_VERSION_ETSI_867MHZ_MATECH = 8;
    /**
     * ETSI 867MHz (Techniwave)
     */
    public const CAVITY_FILTER_VERSION_ETSI_867MHZ = 9;
    /**
     * FCC 921.5MHz
     */
    public const CAVITY_FILTER_VERSION_FCC_921_5MHZ = 10;
    /**
     * GLOBAL
     */
    public const SERVICE_COVERAGE_GLOBAL = 0;
    /**
     * CUSTOMER
     */
    public const SERVICE_COVERAGE_CUSTOMER = 1;
    /**
     * The base station's name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * Description of the base station
     *
     * @var string
     */
    protected ?string $description = null;
    /**
     * Overrides group level alert times, in seconds, for an individual base station.
     *
     * @var int
     */
    protected ?int $baseStationAlertTime = null;
    /**
     * true if the transmission is authorized on this base station
     *
     * @var bool
     */
    protected ?bool $transmissionAuthorized = null;
    /**
     * Name of the installer of this base station. This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $installer = null;
    /**
     * true if the base station is available for the global coverage computation
     *
     * @var bool
     */
    protected ?bool $globalCoverageEnable = null;
    /**
     * Antenna height (in meter)
     *
     * @var int
     */
    protected ?int $elevation = null;
    /**
     * Radius of the base station (in km). This field can be unset when updating.
     *
     * @var int
     */
    protected ?int $splatRadius = null;
    /**
     * LNA version of this base station. Mini station has type 7 -> MINI. Mini Access has type 21.
     * 
     * - {@see BaseStationUpdate::MAST_EQUIPMENT_OTHER}
     * - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V2_SBS_868_P}
     * - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V2_SBS_902_P}
     * - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V2_NB_SBS_868_P}
     * - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V1_SBS_868_P}
     * - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V2_SBS_920_P}
     * - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V2_SBS_923_P}
     * - {@see BaseStationUpdate::MAST_EQUIPMENT_MINI}
     * - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V4_867}
     * - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V4_915}
     * - {@see BaseStationUpdate::MAST_EQUIPMENT_LNAC_867}
     * - {@see BaseStationUpdate::MAST_EQUIPMENT_LNAC_868}
     * - {@see BaseStationUpdate::MAST_EQUIPMENT_LNAC_902}
     * - {@see BaseStationUpdate::MAST_EQUIPMENT_LNAC_916_TX}
     * - {@see BaseStationUpdate::MAST_EQUIPMENT_LNAC_921}
     * - {@see BaseStationUpdate::MAST_EQUIPMENT_LNAC_921_TX}
     * - {@see BaseStationUpdate::MAST_EQUIPMENT_LNAC_922_TX}
     * - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V3_SBS_868_P}
     * - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V3_SBS_902_P}
     * - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V3_SBS_920_P}
     * - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V3_SBS_923_P}
     * - {@see BaseStationUpdate::MAST_EQUIPMENT_NONE}
     * - {@see BaseStationUpdate::MAST_EQUIPMENT_LNAC_868_TX}
     *
     * @var int
     */
    protected ?int $mastEquipment = null;
    /**
     * The base station's mast equipment description. This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $mastEquipmentDescription = null;
    /**
     * true if the LNA is by pass
     *
     * @var bool
     */
    protected ?bool $lnaByPass = null;
    /**
     * Cavity filter version for the base station.
     * 
     * - {@see BaseStationUpdate::CAVITY_FILTER_VERSION_NONE}
     * - {@see BaseStationUpdate::CAVITY_FILTER_VERSION_OTHER}
     * - {@see BaseStationUpdate::CAVITY_FILTER_VERSION_ETSI_868MHZ_ELHYTE}
     * - {@see BaseStationUpdate::CAVITY_FILTER_VERSION_FCC_905MHZ_MATECH}
     * - {@see BaseStationUpdate::CAVITY_FILTER_VERSION_FCC_905MHZ_ELHYTE}
     * - {@see BaseStationUpdate::CAVITY_FILTER_VERSION_FCC_920MHZ}
     * - {@see BaseStationUpdate::CAVITY_FILTER_VERSION_FCC_923MHZ}
     * - {@see BaseStationUpdate::CAVITY_FILTER_VERSION_FCC_9225MHZ}
     * - {@see BaseStationUpdate::CAVITY_FILTER_VERSION_ETSI_867MHZ_MATECH}
     * - {@see BaseStationUpdate::CAVITY_FILTER_VERSION_ETSI_867MHZ}
     * - {@see BaseStationUpdate::CAVITY_FILTER_VERSION_FCC_921_5MHZ}
     *
     * @var int
     */
    protected ?int $cavityFilterVersion = null;
    /**
     * The base station's cavity filter version description. This field can be unset when updating.
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
     * Antenna gai of this base station (in dB)
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
     * Service coverage of a mini base station
     * 
     * - {@see BaseStationUpdate::SERVICE_COVERAGE_GLOBAL}
     * - {@see BaseStationUpdate::SERVICE_COVERAGE_CUSTOMER}
     *
     * @var int
     */
    protected ?int $serviceCoverage = null;
    /**
     * @var Antenna
     */
    protected ?Antenna $antenna = null;
    /**
     * true if Monarch Beacon is enabled
     *
     * @var bool
     */
    protected ?bool $monarchBeaconEnabled = null;
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
     * Setter for baseStationAlertTime
     *
     * @param int $baseStationAlertTime Overrides group level alert times, in seconds, for an individual base
     *                                  station.
     *
     * @return static To use in method chains
     */
    public function setBaseStationAlertTime(?int $baseStationAlertTime)
    {
        $this->baseStationAlertTime = $baseStationAlertTime;
        return $this;
    }
    /**
     * Getter for baseStationAlertTime
     *
     * @return int Overrides group level alert times, in seconds, for an individual base station.
     */
    public function getBaseStationAlertTime() : ?int
    {
        return $this->baseStationAlertTime;
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
     * Setter for installer
     *
     * @param string $installer Name of the installer of this base station. This field can be unset when updating.
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
     * @return string Name of the installer of this base station. This field can be unset when updating.
     */
    public function getInstaller() : ?string
    {
        return $this->installer;
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
     * @param int $elevation Antenna height (in meter)
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
     * @return int Antenna height (in meter)
     */
    public function getElevation() : ?int
    {
        return $this->elevation;
    }
    /**
     * Setter for splatRadius
     *
     * @param int $splatRadius Radius of the base station (in km). This field can be unset when updating.
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
     * @return int Radius of the base station (in km). This field can be unset when updating.
     */
    public function getSplatRadius() : ?int
    {
        return $this->splatRadius;
    }
    /**
     * Setter for mastEquipment
     *
     * @param int $mastEquipment LNA version of this base station. Mini station has type 7 -> MINI. Mini Access has
     *                           type 21.
     *                           
     *                           - {@see BaseStationUpdate::MAST_EQUIPMENT_OTHER}
     *                           - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V2_SBS_868_P}
     *                           - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V2_SBS_902_P}
     *                           - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V2_NB_SBS_868_P}
     *                           - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V1_SBS_868_P}
     *                           - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V2_SBS_920_P}
     *                           - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V2_SBS_923_P}
     *                           - {@see BaseStationUpdate::MAST_EQUIPMENT_MINI}
     *                           - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V4_867}
     *                           - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V4_915}
     *                           - {@see BaseStationUpdate::MAST_EQUIPMENT_LNAC_867}
     *                           - {@see BaseStationUpdate::MAST_EQUIPMENT_LNAC_868}
     *                           - {@see BaseStationUpdate::MAST_EQUIPMENT_LNAC_902}
     *                           - {@see BaseStationUpdate::MAST_EQUIPMENT_LNAC_916_TX}
     *                           - {@see BaseStationUpdate::MAST_EQUIPMENT_LNAC_921}
     *                           - {@see BaseStationUpdate::MAST_EQUIPMENT_LNAC_921_TX}
     *                           - {@see BaseStationUpdate::MAST_EQUIPMENT_LNAC_922_TX}
     *                           - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V3_SBS_868_P}
     *                           - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V3_SBS_902_P}
     *                           - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V3_SBS_920_P}
     *                           - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V3_SBS_923_P}
     *                           - {@see BaseStationUpdate::MAST_EQUIPMENT_NONE}
     *                           - {@see BaseStationUpdate::MAST_EQUIPMENT_LNAC_868_TX}
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
     * @return int LNA version of this base station. Mini station has type 7 -> MINI. Mini Access has type 21.
     *             
     *             - {@see BaseStationUpdate::MAST_EQUIPMENT_OTHER}
     *             - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V2_SBS_868_P}
     *             - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V2_SBS_902_P}
     *             - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V2_NB_SBS_868_P}
     *             - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V1_SBS_868_P}
     *             - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V2_SBS_920_P}
     *             - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V2_SBS_923_P}
     *             - {@see BaseStationUpdate::MAST_EQUIPMENT_MINI}
     *             - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V4_867}
     *             - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V4_915}
     *             - {@see BaseStationUpdate::MAST_EQUIPMENT_LNAC_867}
     *             - {@see BaseStationUpdate::MAST_EQUIPMENT_LNAC_868}
     *             - {@see BaseStationUpdate::MAST_EQUIPMENT_LNAC_902}
     *             - {@see BaseStationUpdate::MAST_EQUIPMENT_LNAC_916_TX}
     *             - {@see BaseStationUpdate::MAST_EQUIPMENT_LNAC_921}
     *             - {@see BaseStationUpdate::MAST_EQUIPMENT_LNAC_921_TX}
     *             - {@see BaseStationUpdate::MAST_EQUIPMENT_LNAC_922_TX}
     *             - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V3_SBS_868_P}
     *             - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V3_SBS_902_P}
     *             - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V3_SBS_920_P}
     *             - {@see BaseStationUpdate::MAST_EQUIPMENT_LNA_V3_SBS_923_P}
     *             - {@see BaseStationUpdate::MAST_EQUIPMENT_NONE}
     *             - {@see BaseStationUpdate::MAST_EQUIPMENT_LNAC_868_TX}
     *             
     */
    public function getMastEquipment() : ?int
    {
        return $this->mastEquipment;
    }
    /**
     * Setter for mastEquipmentDescription
     *
     * @param string $mastEquipmentDescription The base station's mast equipment description. This field can be unset
     *                                         when updating.
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
     * @return string The base station's mast equipment description. This field can be unset when updating.
     */
    public function getMastEquipmentDescription() : ?string
    {
        return $this->mastEquipmentDescription;
    }
    /**
     * Setter for lnaByPass
     *
     * @param bool $lnaByPass true if the LNA is by pass
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
     * @return bool true if the LNA is by pass
     */
    public function getLnaByPass() : ?bool
    {
        return $this->lnaByPass;
    }
    /**
     * Setter for cavityFilterVersion
     *
     * @param int $cavityFilterVersion Cavity filter version for the base station.
     *                                 
     *                                 - {@see BaseStationUpdate::CAVITY_FILTER_VERSION_NONE}
     *                                 - {@see BaseStationUpdate::CAVITY_FILTER_VERSION_OTHER}
     *                                 - {@see BaseStationUpdate::CAVITY_FILTER_VERSION_ETSI_868MHZ_ELHYTE}
     *                                 - {@see BaseStationUpdate::CAVITY_FILTER_VERSION_FCC_905MHZ_MATECH}
     *                                 - {@see BaseStationUpdate::CAVITY_FILTER_VERSION_FCC_905MHZ_ELHYTE}
     *                                 - {@see BaseStationUpdate::CAVITY_FILTER_VERSION_FCC_920MHZ}
     *                                 - {@see BaseStationUpdate::CAVITY_FILTER_VERSION_FCC_923MHZ}
     *                                 - {@see BaseStationUpdate::CAVITY_FILTER_VERSION_FCC_9225MHZ}
     *                                 - {@see BaseStationUpdate::CAVITY_FILTER_VERSION_ETSI_867MHZ_MATECH}
     *                                 - {@see BaseStationUpdate::CAVITY_FILTER_VERSION_ETSI_867MHZ}
     *                                 - {@see BaseStationUpdate::CAVITY_FILTER_VERSION_FCC_921_5MHZ}
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
     * @return int Cavity filter version for the base station.
     *             
     *             - {@see BaseStationUpdate::CAVITY_FILTER_VERSION_NONE}
     *             - {@see BaseStationUpdate::CAVITY_FILTER_VERSION_OTHER}
     *             - {@see BaseStationUpdate::CAVITY_FILTER_VERSION_ETSI_868MHZ_ELHYTE}
     *             - {@see BaseStationUpdate::CAVITY_FILTER_VERSION_FCC_905MHZ_MATECH}
     *             - {@see BaseStationUpdate::CAVITY_FILTER_VERSION_FCC_905MHZ_ELHYTE}
     *             - {@see BaseStationUpdate::CAVITY_FILTER_VERSION_FCC_920MHZ}
     *             - {@see BaseStationUpdate::CAVITY_FILTER_VERSION_FCC_923MHZ}
     *             - {@see BaseStationUpdate::CAVITY_FILTER_VERSION_FCC_9225MHZ}
     *             - {@see BaseStationUpdate::CAVITY_FILTER_VERSION_ETSI_867MHZ_MATECH}
     *             - {@see BaseStationUpdate::CAVITY_FILTER_VERSION_ETSI_867MHZ}
     *             - {@see BaseStationUpdate::CAVITY_FILTER_VERSION_FCC_921_5MHZ}
     *             
     */
    public function getCavityFilterVersion() : ?int
    {
        return $this->cavityFilterVersion;
    }
    /**
     * Setter for cavityFilterVersionDescription
     *
     * @param string $cavityFilterVersionDescription The base station's cavity filter version description. This field
     *                                               can be unset when updating.
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
     * @return string The base station's cavity filter version description. This field can be unset when updating.
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
     * @param double $antennaGain Antenna gai of this base station (in dB)
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
     * @return double Antenna gai of this base station (in dB)
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
     * Setter for serviceCoverage
     *
     * @param int $serviceCoverage Service coverage of a mini base station
     *                             
     *                             - {@see BaseStationUpdate::SERVICE_COVERAGE_GLOBAL}
     *                             - {@see BaseStationUpdate::SERVICE_COVERAGE_CUSTOMER}
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
     * @return int Service coverage of a mini base station
     *             
     *             - {@see BaseStationUpdate::SERVICE_COVERAGE_GLOBAL}
     *             - {@see BaseStationUpdate::SERVICE_COVERAGE_CUSTOMER}
     *             
     */
    public function getServiceCoverage() : ?int
    {
        return $this->serviceCoverage;
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
     * Setter for monarchBeaconEnabled
     *
     * @param bool $monarchBeaconEnabled true if Monarch Beacon is enabled
     *
     * @return static To use in method chains
     */
    public function setMonarchBeaconEnabled(?bool $monarchBeaconEnabled)
    {
        $this->monarchBeaconEnabled = $monarchBeaconEnabled;
        return $this;
    }
    /**
     * Getter for monarchBeaconEnabled
     *
     * @return bool true if Monarch Beacon is enabled
     */
    public function getMonarchBeaconEnabled() : ?bool
    {
        return $this->monarchBeaconEnabled;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('name' => new PrimitiveSerializer('string'), 'description' => new PrimitiveSerializer('string'), 'baseStationAlertTime' => new PrimitiveSerializer('int'), 'transmissionAuthorized' => new PrimitiveSerializer('bool'), 'installer' => new PrimitiveSerializer('string'), 'globalCoverageEnable' => new PrimitiveSerializer('bool'), 'elevation' => new PrimitiveSerializer('int'), 'splatRadius' => new PrimitiveSerializer('int'), 'mastEquipment' => new PrimitiveSerializer('int'), 'mastEquipmentDescription' => new PrimitiveSerializer('string'), 'lnaByPass' => new PrimitiveSerializer('bool'), 'cavityFilterVersion' => new PrimitiveSerializer('int'), 'cavityFilterVersionDescription' => new PrimitiveSerializer('string'), 'environmentLoss' => new PrimitiveSerializer('double'), 'cableLoss' => new PrimitiveSerializer('double'), 'antennaGain' => new PrimitiveSerializer('double'), 'antennaNoiseFigure' => new PrimitiveSerializer('double'), 'antennaInsertionLoss' => new PrimitiveSerializer('double'), 'antennaMaxAdmissiblePower' => new PrimitiveSerializer('double'), 'gainFlag' => new PrimitiveSerializer('bool'), 'mastEquipmentGain' => new PrimitiveSerializer('double'), 'mastEquipmentNoiseFigure' => new PrimitiveSerializer('double'), 'lnaInsertionLoss' => new PrimitiveSerializer('double'), 'cavityFilterInsertionLoss' => new PrimitiveSerializer('double'), 'txPowerMargin' => new PrimitiveSerializer('double'), 'serviceCoverage' => new PrimitiveSerializer('int'), 'antenna' => new ClassSerializer(Antenna::class), 'monarchBeaconEnabled' => new PrimitiveSerializer('bool'));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('baseStationAlertTime' => array(new Max(86400), new Min(300)), 'txPowerMargin' => array(new Max(20), new Min(-20)), 'antenna' => array(new Child()));
        return $rules;
    }
}