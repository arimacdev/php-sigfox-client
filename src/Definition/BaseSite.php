<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
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
     * @var self::STATUS_*
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
     * @var self::STATION_INSTALLATION_*
     */
    protected ?int $stationInstallation = null;
    /**
     * Inverter type:
     *
     * @var self::INVERTER_INFO_*
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
    public function getName() : string
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
    public function getLessorId() : string
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
    public function getAddress() : string
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
    public function getComment() : string
    {
        return $this->comment;
    }
    /**
     * Setter for status
     *
     * @param self::STATUS_* $status Site status:
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
     * @return self::STATUS_* Site status:
     */
    public function getStatus() : int
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
    public function getStatusComment() : string
    {
        return $this->statusComment;
    }
    /**
     * Setter for stationInstallation
     *
     * @param self::STATION_INSTALLATION_* $stationInstallation Station installation:
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
     * @return self::STATION_INSTALLATION_* Station installation:
     */
    public function getStationInstallation() : int
    {
        return $this->stationInstallation;
    }
    /**
     * Setter for inverterInfo
     *
     * @param self::INVERTER_INFO_* $inverterInfo Inverter type:
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
     * @return self::INVERTER_INFO_* Inverter type:
     */
    public function getInverterInfo() : int
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
    public function getAerialWorkPlatformAccess() : bool
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
    public function getLat() : int
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
    public function getLng() : int
    {
        return $this->lng;
    }
}