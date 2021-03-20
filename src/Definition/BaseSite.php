<?php

namespace Arimac\Sigfox\Definition;

/**
 * Generic information about a site
 */
class BaseSite
{
    /** PROD */
    public const STATUS_PROD = 0;
    /** REFUSED */
    public const STATUS_REFUSED = 1;
    /** INSTALLED */
    public const STATUS_INSTALLED = 2;
    /** NOT PLANNED */
    public const STATUS_NOT_PLANNED = 3;
    /** PRE PROD */
    public const STATUS_PRE_PROD = 4;
    /** CANDIDATE */
    public const STATUS_CANDIDATE = 5;
    /** CANCELLED */
    public const STATUS_CANCELLED = 6;
    /** CLIENT */
    public const STATUS_CLIENT = 7;
    /** RD */
    public const STATUS_RD = 8;
    /** LABO */
    public const STATUS_LABO = 9;
    /** INSTALLED CONNECTED ONLY SECONDARY */
    public const STATUS_INSTALLED_CONNECTED_ONLY_SECONDARY = 14;
    /** INSTALLED CONNECTED ONLY PRIMARY */
    public const STATUS_INSTALLED_CONNECTED_ONLY_PRIMARY = 15;
    /** INDOOR WITHOUT CABINET */
    public const STATION_INSTALLATION_INDOOR_WITHOUT_CABINET = 0;
    /** OUTDOOR WITH CABINET */
    public const STATION_INSTALLATION_OUTDOOR_WITH_CABINET = 1;
    /** INDOOR WITH CABINET */
    public const STATION_INSTALLATION_INDOOR_WITH_CABINET = 2;
    /** OUTDOOR WITHOUT CABINET */
    public const STATION_INSTALLATION_OUTDOOR_WITHOUT_CABINET = 3;
    /** NONE */
    public const INVERTER_INFO_NONE = 0;
    /** AC POWER HOST */
    public const INVERTER_INFO_AC_POWER_HOST = 1;
    /** AC POWER HOST INVERTER */
    public const INVERTER_INFO_AC_POWER_HOST_INVERTER = 2;
    /** AC POWER SIGFOX INVERTER */
    public const INVERTER_INFO_AC_POWER_SIGFOX_INVERTER = 3;
    /** DC POWER HOST 48V */
    public const INVERTER_INFO_DC_POWER_HOST_48V = 4;
    /** DC POWER SOLAR */
    public const INVERTER_INFO_DC_POWER_SOLAR = 5;
    /**
     * The site's name
     *
     * @var string
     */
    protected string $name;
    /**
     * The lessor identifier of the site. This field can be unset when updating.
     *
     * @var string
     */
    protected string $lessorId;
    /**
     * The address of the site
     *
     * @var string
     */
    protected string $address;
    /**
     * Comment about the site. This field can be unset when updating.
     *
     * @var string
     */
    protected string $comment;
    /**
     * Site status:
     * - `BaseSite::STATUS_PROD`
     * - `BaseSite::STATUS_REFUSED`
     * - `BaseSite::STATUS_INSTALLED`
     * - `BaseSite::STATUS_NOT_PLANNED`
     * - `BaseSite::STATUS_PRE_PROD`
     * - `BaseSite::STATUS_CANDIDATE`
     * - `BaseSite::STATUS_CANCELLED`
     * - `BaseSite::STATUS_CLIENT`
     * - `BaseSite::STATUS_RD`
     * - `BaseSite::STATUS_LABO`
     * - `BaseSite::STATUS_INSTALLED_CONNECTED_ONLY_SECONDARY`
     * - `BaseSite::STATUS_INSTALLED_CONNECTED_ONLY_PRIMARY`
     *
     * @var int
     */
    protected int $status;
    /**
     * The comment of the status of the site. This field can be unset when updating.
     *
     * @var string
     */
    protected string $statusComment;
    /**
     * Station installation:
     * - `BaseSite::STATION_INSTALLATION_INDOOR_WITHOUT_CABINET`
     * - `BaseSite::STATION_INSTALLATION_OUTDOOR_WITH_CABINET`
     * - `BaseSite::STATION_INSTALLATION_INDOOR_WITH_CABINET`
     * - `BaseSite::STATION_INSTALLATION_OUTDOOR_WITHOUT_CABINET`
     *
     * @var int
     */
    protected int $stationInstallation;
    /**
     * Inverter type:
     * - `BaseSite::INVERTER_INFO_NONE`
     * - `BaseSite::INVERTER_INFO_AC_POWER_HOST`
     * - `BaseSite::INVERTER_INFO_AC_POWER_HOST_INVERTER`
     * - `BaseSite::INVERTER_INFO_AC_POWER_SIGFOX_INVERTER`
     * - `BaseSite::INVERTER_INFO_DC_POWER_HOST_48V`
     * - `BaseSite::INVERTER_INFO_DC_POWER_SOLAR`
     *
     * @var int
     */
    protected int $inverterInfo;
    /**
     * is the site access to the aerial work platform
     *
     * @var bool
     */
    protected bool $aerialWorkPlatformAccess;
    /**
     * the site's latitude
     *
     * @var int
     */
    protected int $lat;
    /**
     * the site's longitutde
     *
     * @var int
     */
    protected int $lng;
    /**
     * @param string name The site's name
     */
    function setName(string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The site's name
     */
    function getName() : string
    {
        return $this->name;
    }
    /**
     * @param string lessorId The lessor identifier of the site. This field can be unset when updating.
     */
    function setLessorId(string $lessorId)
    {
        $this->lessorId = $lessorId;
    }
    /**
     * @return string The lessor identifier of the site. This field can be unset when updating.
     */
    function getLessorId() : string
    {
        return $this->lessorId;
    }
    /**
     * @param string address The address of the site
     */
    function setAddress(string $address)
    {
        $this->address = $address;
    }
    /**
     * @return string The address of the site
     */
    function getAddress() : string
    {
        return $this->address;
    }
    /**
     * @param string comment Comment about the site. This field can be unset when updating.
     */
    function setComment(string $comment)
    {
        $this->comment = $comment;
    }
    /**
     * @return string Comment about the site. This field can be unset when updating.
     */
    function getComment() : string
    {
        return $this->comment;
    }
    /**
     * @param int status Site status:
     * - `BaseSite::STATUS_PROD`
     * - `BaseSite::STATUS_REFUSED`
     * - `BaseSite::STATUS_INSTALLED`
     * - `BaseSite::STATUS_NOT_PLANNED`
     * - `BaseSite::STATUS_PRE_PROD`
     * - `BaseSite::STATUS_CANDIDATE`
     * - `BaseSite::STATUS_CANCELLED`
     * - `BaseSite::STATUS_CLIENT`
     * - `BaseSite::STATUS_RD`
     * - `BaseSite::STATUS_LABO`
     * - `BaseSite::STATUS_INSTALLED_CONNECTED_ONLY_SECONDARY`
     * - `BaseSite::STATUS_INSTALLED_CONNECTED_ONLY_PRIMARY`
     */
    function setStatus(int $status)
    {
        $this->status = $status;
    }
    /**
     * @return int Site status:
     * - `BaseSite::STATUS_PROD`
     * - `BaseSite::STATUS_REFUSED`
     * - `BaseSite::STATUS_INSTALLED`
     * - `BaseSite::STATUS_NOT_PLANNED`
     * - `BaseSite::STATUS_PRE_PROD`
     * - `BaseSite::STATUS_CANDIDATE`
     * - `BaseSite::STATUS_CANCELLED`
     * - `BaseSite::STATUS_CLIENT`
     * - `BaseSite::STATUS_RD`
     * - `BaseSite::STATUS_LABO`
     * - `BaseSite::STATUS_INSTALLED_CONNECTED_ONLY_SECONDARY`
     * - `BaseSite::STATUS_INSTALLED_CONNECTED_ONLY_PRIMARY`
     */
    function getStatus() : int
    {
        return $this->status;
    }
    /**
     * @param string statusComment The comment of the status of the site. This field can be unset when updating.
     */
    function setStatusComment(string $statusComment)
    {
        $this->statusComment = $statusComment;
    }
    /**
     * @return string The comment of the status of the site. This field can be unset when updating.
     */
    function getStatusComment() : string
    {
        return $this->statusComment;
    }
    /**
     * @param int stationInstallation Station installation:
     * - `BaseSite::STATION_INSTALLATION_INDOOR_WITHOUT_CABINET`
     * - `BaseSite::STATION_INSTALLATION_OUTDOOR_WITH_CABINET`
     * - `BaseSite::STATION_INSTALLATION_INDOOR_WITH_CABINET`
     * - `BaseSite::STATION_INSTALLATION_OUTDOOR_WITHOUT_CABINET`
     */
    function setStationInstallation(int $stationInstallation)
    {
        $this->stationInstallation = $stationInstallation;
    }
    /**
     * @return int Station installation:
     * - `BaseSite::STATION_INSTALLATION_INDOOR_WITHOUT_CABINET`
     * - `BaseSite::STATION_INSTALLATION_OUTDOOR_WITH_CABINET`
     * - `BaseSite::STATION_INSTALLATION_INDOOR_WITH_CABINET`
     * - `BaseSite::STATION_INSTALLATION_OUTDOOR_WITHOUT_CABINET`
     */
    function getStationInstallation() : int
    {
        return $this->stationInstallation;
    }
    /**
     * @param int inverterInfo Inverter type:
     * - `BaseSite::INVERTER_INFO_NONE`
     * - `BaseSite::INVERTER_INFO_AC_POWER_HOST`
     * - `BaseSite::INVERTER_INFO_AC_POWER_HOST_INVERTER`
     * - `BaseSite::INVERTER_INFO_AC_POWER_SIGFOX_INVERTER`
     * - `BaseSite::INVERTER_INFO_DC_POWER_HOST_48V`
     * - `BaseSite::INVERTER_INFO_DC_POWER_SOLAR`
     */
    function setInverterInfo(int $inverterInfo)
    {
        $this->inverterInfo = $inverterInfo;
    }
    /**
     * @return int Inverter type:
     * - `BaseSite::INVERTER_INFO_NONE`
     * - `BaseSite::INVERTER_INFO_AC_POWER_HOST`
     * - `BaseSite::INVERTER_INFO_AC_POWER_HOST_INVERTER`
     * - `BaseSite::INVERTER_INFO_AC_POWER_SIGFOX_INVERTER`
     * - `BaseSite::INVERTER_INFO_DC_POWER_HOST_48V`
     * - `BaseSite::INVERTER_INFO_DC_POWER_SOLAR`
     */
    function getInverterInfo() : int
    {
        return $this->inverterInfo;
    }
    /**
     * @param bool aerialWorkPlatformAccess is the site access to the aerial work platform
     */
    function setAerialWorkPlatformAccess(bool $aerialWorkPlatformAccess)
    {
        $this->aerialWorkPlatformAccess = $aerialWorkPlatformAccess;
    }
    /**
     * @return bool is the site access to the aerial work platform
     */
    function getAerialWorkPlatformAccess() : bool
    {
        return $this->aerialWorkPlatformAccess;
    }
    /**
     * @param int lat the site's latitude
     */
    function setLat(int $lat)
    {
        $this->lat = $lat;
    }
    /**
     * @return int the site's latitude
     */
    function getLat() : int
    {
        return $this->lat;
    }
    /**
     * @param int lng the site's longitutde
     */
    function setLng(int $lng)
    {
        $this->lng = $lng;
    }
    /**
     * @return int the site's longitutde
     */
    function getLng() : int
    {
        return $this->lng;
    }
}