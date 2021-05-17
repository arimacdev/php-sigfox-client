<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Generic information about a site
 */
class BaseSite extends Definition
{
    /**
     * PROD
     */
    public const STATUS_PROD = 0;
    /**
     * REFUSED
     */
    public const STATUS_REFUSED = 1;
    /**
     * INSTALLED
     */
    public const STATUS_INSTALLED = 2;
    /**
     * NOT PLANNED
     */
    public const STATUS_NOT_PLANNED = 3;
    /**
     * PRE PROD
     */
    public const STATUS_PRE_PROD = 4;
    /**
     * CANDIDATE
     */
    public const STATUS_CANDIDATE = 5;
    /**
     * CANCELLED
     */
    public const STATUS_CANCELLED = 6;
    /**
     * CLIENT
     */
    public const STATUS_CLIENT = 7;
    /**
     * RD
     */
    public const STATUS_RD = 8;
    /**
     * LABO
     */
    public const STATUS_LABO = 9;
    /**
     * INSTALLED CONNECTED ONLY SECONDARY
     */
    public const STATUS_INSTALLED_CONNECTED_ONLY_SECONDARY = 14;
    /**
     * INSTALLED CONNECTED ONLY PRIMARY
     */
    public const STATUS_INSTALLED_CONNECTED_ONLY_PRIMARY = 15;
    /**
     * INDOOR WITHOUT CABINET
     */
    public const STATION_INSTALLATION_INDOOR_WITHOUT_CABINET = 0;
    /**
     * OUTDOOR WITH CABINET
     */
    public const STATION_INSTALLATION_OUTDOOR_WITH_CABINET = 1;
    /**
     * INDOOR WITH CABINET
     */
    public const STATION_INSTALLATION_INDOOR_WITH_CABINET = 2;
    /**
     * OUTDOOR WITHOUT CABINET
     */
    public const STATION_INSTALLATION_OUTDOOR_WITHOUT_CABINET = 3;
    /**
     * NONE
     */
    public const INVERTER_INFO_NONE = 0;
    /**
     * AC POWER HOST
     */
    public const INVERTER_INFO_AC_POWER_HOST = 1;
    /**
     * AC POWER HOST INVERTER
     */
    public const INVERTER_INFO_AC_POWER_HOST_INVERTER = 2;
    /**
     * AC POWER SIGFOX INVERTER
     */
    public const INVERTER_INFO_AC_POWER_SIGFOX_INVERTER = 3;
    /**
     * DC POWER HOST 48V
     */
    public const INVERTER_INFO_DC_POWER_HOST_48V = 4;
    /**
     * DC POWER SOLAR
     */
    public const INVERTER_INFO_DC_POWER_SOLAR = 5;
    /**
     * The site's name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * The lessor identifier of the site. This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $lessorId = null;
    /**
     * The address of the site
     *
     * @var string
     */
    protected ?string $address = null;
    /**
     * Comment about the site. This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $comment = null;
    /**
     * Site status:
     * 
     * - {@see BaseSite::STATUS_PROD}
     * - {@see BaseSite::STATUS_REFUSED}
     * - {@see BaseSite::STATUS_INSTALLED}
     * - {@see BaseSite::STATUS_NOT_PLANNED}
     * - {@see BaseSite::STATUS_PRE_PROD}
     * - {@see BaseSite::STATUS_CANDIDATE}
     * - {@see BaseSite::STATUS_CANCELLED}
     * - {@see BaseSite::STATUS_CLIENT}
     * - {@see BaseSite::STATUS_RD}
     * - {@see BaseSite::STATUS_LABO}
     * - {@see BaseSite::STATUS_INSTALLED_CONNECTED_ONLY_SECONDARY}
     * - {@see BaseSite::STATUS_INSTALLED_CONNECTED_ONLY_PRIMARY}
     *
     * @var int
     */
    protected ?int $status = null;
    /**
     * The comment of the status of the site. This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $statusComment = null;
    /**
     * Station installation:
     * 
     * - {@see BaseSite::STATION_INSTALLATION_INDOOR_WITHOUT_CABINET}
     * - {@see BaseSite::STATION_INSTALLATION_OUTDOOR_WITH_CABINET}
     * - {@see BaseSite::STATION_INSTALLATION_INDOOR_WITH_CABINET}
     * - {@see BaseSite::STATION_INSTALLATION_OUTDOOR_WITHOUT_CABINET}
     *
     * @var int
     */
    protected ?int $stationInstallation = null;
    /**
     * Inverter type:
     * 
     * - {@see BaseSite::INVERTER_INFO_NONE}
     * - {@see BaseSite::INVERTER_INFO_AC_POWER_HOST}
     * - {@see BaseSite::INVERTER_INFO_AC_POWER_HOST_INVERTER}
     * - {@see BaseSite::INVERTER_INFO_AC_POWER_SIGFOX_INVERTER}
     * - {@see BaseSite::INVERTER_INFO_DC_POWER_HOST_48V}
     * - {@see BaseSite::INVERTER_INFO_DC_POWER_SOLAR}
     *
     * @var int
     */
    protected ?int $inverterInfo = null;
    /**
     * is the site access to the aerial work platform
     *
     * @var bool
     */
    protected ?bool $aerialWorkPlatformAccess = null;
    /**
     * the site's latitude
     *
     * @var int
     */
    protected ?int $lat = null;
    /**
     * the site's longitutde
     *
     * @var int
     */
    protected ?int $lng = null;
    /**
     * @internal
     */
    protected array $validations = array('name' => array('max:100', 'nullable'), 'lat' => array('max:90', 'min:-90', 'numeric', 'nullable'), 'lng' => array('max:180', 'min:-180', 'numeric', 'nullable'));
    /**
     * Setter for name
     *
     * @param string $name The site's name
     *
     * @return self To use in method chains
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Getter for name
     *
     * @return string The site's name
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Setter for lessorId
     *
     * @param string $lessorId The lessor identifier of the site. This field can be unset when updating.
     *
     * @return self To use in method chains
     */
    public function setLessorId(?string $lessorId) : self
    {
        $this->lessorId = $lessorId;
        return $this;
    }
    /**
     * Getter for lessorId
     *
     * @return string The lessor identifier of the site. This field can be unset when updating.
     */
    public function getLessorId() : ?string
    {
        return $this->lessorId;
    }
    /**
     * Setter for address
     *
     * @param string $address The address of the site
     *
     * @return self To use in method chains
     */
    public function setAddress(?string $address) : self
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Getter for address
     *
     * @return string The address of the site
     */
    public function getAddress() : ?string
    {
        return $this->address;
    }
    /**
     * Setter for comment
     *
     * @param string $comment Comment about the site. This field can be unset when updating.
     *
     * @return self To use in method chains
     */
    public function setComment(?string $comment) : self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     * Getter for comment
     *
     * @return string Comment about the site. This field can be unset when updating.
     */
    public function getComment() : ?string
    {
        return $this->comment;
    }
    /**
     * Setter for status
     *
     * @param int $status Site status:
     *                    
     *                    - {@see BaseSite::STATUS_PROD}
     *                    - {@see BaseSite::STATUS_REFUSED}
     *                    - {@see BaseSite::STATUS_INSTALLED}
     *                    - {@see BaseSite::STATUS_NOT_PLANNED}
     *                    - {@see BaseSite::STATUS_PRE_PROD}
     *                    - {@see BaseSite::STATUS_CANDIDATE}
     *                    - {@see BaseSite::STATUS_CANCELLED}
     *                    - {@see BaseSite::STATUS_CLIENT}
     *                    - {@see BaseSite::STATUS_RD}
     *                    - {@see BaseSite::STATUS_LABO}
     *                    - {@see BaseSite::STATUS_INSTALLED_CONNECTED_ONLY_SECONDARY}
     *                    - {@see BaseSite::STATUS_INSTALLED_CONNECTED_ONLY_PRIMARY}
     *                    
     *
     * @return self To use in method chains
     */
    public function setStatus(?int $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Getter for status
     *
     * @return int Site status:
     *             
     *             - {@see BaseSite::STATUS_PROD}
     *             - {@see BaseSite::STATUS_REFUSED}
     *             - {@see BaseSite::STATUS_INSTALLED}
     *             - {@see BaseSite::STATUS_NOT_PLANNED}
     *             - {@see BaseSite::STATUS_PRE_PROD}
     *             - {@see BaseSite::STATUS_CANDIDATE}
     *             - {@see BaseSite::STATUS_CANCELLED}
     *             - {@see BaseSite::STATUS_CLIENT}
     *             - {@see BaseSite::STATUS_RD}
     *             - {@see BaseSite::STATUS_LABO}
     *             - {@see BaseSite::STATUS_INSTALLED_CONNECTED_ONLY_SECONDARY}
     *             - {@see BaseSite::STATUS_INSTALLED_CONNECTED_ONLY_PRIMARY}
     *             
     */
    public function getStatus() : ?int
    {
        return $this->status;
    }
    /**
     * Setter for statusComment
     *
     * @param string $statusComment The comment of the status of the site. This field can be unset when updating.
     *
     * @return self To use in method chains
     */
    public function setStatusComment(?string $statusComment) : self
    {
        $this->statusComment = $statusComment;
        return $this;
    }
    /**
     * Getter for statusComment
     *
     * @return string The comment of the status of the site. This field can be unset when updating.
     */
    public function getStatusComment() : ?string
    {
        return $this->statusComment;
    }
    /**
     * Setter for stationInstallation
     *
     * @param int $stationInstallation Station installation:
     *                                 
     *                                 - {@see BaseSite::STATION_INSTALLATION_INDOOR_WITHOUT_CABINET}
     *                                 - {@see BaseSite::STATION_INSTALLATION_OUTDOOR_WITH_CABINET}
     *                                 - {@see BaseSite::STATION_INSTALLATION_INDOOR_WITH_CABINET}
     *                                 - {@see BaseSite::STATION_INSTALLATION_OUTDOOR_WITHOUT_CABINET}
     *                                 
     *
     * @return self To use in method chains
     */
    public function setStationInstallation(?int $stationInstallation) : self
    {
        $this->stationInstallation = $stationInstallation;
        return $this;
    }
    /**
     * Getter for stationInstallation
     *
     * @return int Station installation:
     *             
     *             - {@see BaseSite::STATION_INSTALLATION_INDOOR_WITHOUT_CABINET}
     *             - {@see BaseSite::STATION_INSTALLATION_OUTDOOR_WITH_CABINET}
     *             - {@see BaseSite::STATION_INSTALLATION_INDOOR_WITH_CABINET}
     *             - {@see BaseSite::STATION_INSTALLATION_OUTDOOR_WITHOUT_CABINET}
     *             
     */
    public function getStationInstallation() : ?int
    {
        return $this->stationInstallation;
    }
    /**
     * Setter for inverterInfo
     *
     * @param int $inverterInfo Inverter type:
     *                          
     *                          - {@see BaseSite::INVERTER_INFO_NONE}
     *                          - {@see BaseSite::INVERTER_INFO_AC_POWER_HOST}
     *                          - {@see BaseSite::INVERTER_INFO_AC_POWER_HOST_INVERTER}
     *                          - {@see BaseSite::INVERTER_INFO_AC_POWER_SIGFOX_INVERTER}
     *                          - {@see BaseSite::INVERTER_INFO_DC_POWER_HOST_48V}
     *                          - {@see BaseSite::INVERTER_INFO_DC_POWER_SOLAR}
     *                          
     *
     * @return self To use in method chains
     */
    public function setInverterInfo(?int $inverterInfo) : self
    {
        $this->inverterInfo = $inverterInfo;
        return $this;
    }
    /**
     * Getter for inverterInfo
     *
     * @return int Inverter type:
     *             
     *             - {@see BaseSite::INVERTER_INFO_NONE}
     *             - {@see BaseSite::INVERTER_INFO_AC_POWER_HOST}
     *             - {@see BaseSite::INVERTER_INFO_AC_POWER_HOST_INVERTER}
     *             - {@see BaseSite::INVERTER_INFO_AC_POWER_SIGFOX_INVERTER}
     *             - {@see BaseSite::INVERTER_INFO_DC_POWER_HOST_48V}
     *             - {@see BaseSite::INVERTER_INFO_DC_POWER_SOLAR}
     *             
     */
    public function getInverterInfo() : ?int
    {
        return $this->inverterInfo;
    }
    /**
     * Setter for aerialWorkPlatformAccess
     *
     * @param bool $aerialWorkPlatformAccess is the site access to the aerial work platform
     *
     * @return self To use in method chains
     */
    public function setAerialWorkPlatformAccess(?bool $aerialWorkPlatformAccess) : self
    {
        $this->aerialWorkPlatformAccess = $aerialWorkPlatformAccess;
        return $this;
    }
    /**
     * Getter for aerialWorkPlatformAccess
     *
     * @return bool is the site access to the aerial work platform
     */
    public function getAerialWorkPlatformAccess() : ?bool
    {
        return $this->aerialWorkPlatformAccess;
    }
    /**
     * Setter for lat
     *
     * @param int $lat the site's latitude
     *
     * @return self To use in method chains
     */
    public function setLat(?int $lat) : self
    {
        $this->lat = $lat;
        return $this;
    }
    /**
     * Getter for lat
     *
     * @return int the site's latitude
     */
    public function getLat() : ?int
    {
        return $this->lat;
    }
    /**
     * Setter for lng
     *
     * @param int $lng the site's longitutde
     *
     * @return self To use in method chains
     */
    public function setLng(?int $lng) : self
    {
        $this->lng = $lng;
        return $this;
    }
    /**
     * Getter for lng
     *
     * @return int the site's longitutde
     */
    public function getLng() : ?int
    {
        return $this->lng;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('name' => new PrimitiveSerializer('string'), 'lessorId' => new PrimitiveSerializer('string'), 'address' => new PrimitiveSerializer('string'), 'comment' => new PrimitiveSerializer('string'), 'status' => new PrimitiveSerializer('int'), 'statusComment' => new PrimitiveSerializer('string'), 'stationInstallation' => new PrimitiveSerializer('int'), 'inverterInfo' => new PrimitiveSerializer('int'), 'aerialWorkPlatformAccess' => new PrimitiveSerializer('bool'), 'lat' => new PrimitiveSerializer('int'), 'lng' => new PrimitiveSerializer('int'));
        return $serializers;
    }
}