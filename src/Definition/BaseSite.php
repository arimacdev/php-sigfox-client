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
     */
    protected string $name;
    /**
     * The lessor identifier of the site. This field can be unset when updating.
     */
    protected string $lessorId;
    /**
     * The address of the site
     */
    protected string $address;
    /**
     * Comment about the site. This field can be unset when updating.
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
     */
    protected int $status;
    /**
     * The comment of the status of the site. This field can be unset when updating.
     */
    protected string $statusComment;
    /**
     * Station installation:
     * - `BaseSite::STATION_INSTALLATION_INDOOR_WITHOUT_CABINET`
     * - `BaseSite::STATION_INSTALLATION_OUTDOOR_WITH_CABINET`
     * - `BaseSite::STATION_INSTALLATION_INDOOR_WITH_CABINET`
     * - `BaseSite::STATION_INSTALLATION_OUTDOOR_WITHOUT_CABINET`
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
     */
    protected int $inverterInfo;
    /**
     * is the site access to the aerial work platform
     */
    protected bool $aerialWorkPlatformAccess;
    /**
     * the site's latitude
     */
    protected int $lat;
    /**
     * the site's longitutde
     */
    protected int $lng;
}