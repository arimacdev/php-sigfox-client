<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\BaseSite;
use Arimac\Sigfox\Definition\MinHost;
use Arimac\Sigfox\Definition\MinMaintenance;
use Arimac\Sigfox\Definition\MinGroup;
use Arimac\Sigfox\Definition\InternetSubscription;
use Arimac\Sigfox\Definition\Actions;
use Arimac\Sigfox\Definition\Resources;
class Site extends BaseSite
{
    /**
     * The site's identifier
     *
     * @var string
     */
    protected string $id;
    /** @var MinHost */
    protected MinHost $host;
    /** @var MinMaintenance */
    protected MinMaintenance $maintenance;
    /** @var MinGroup */
    protected MinGroup $group;
    /**
     * the number of base station installed on this site
     *
     * @var int
     */
    protected int $basestationCount;
    /** @var InternetSubscription */
    protected InternetSubscription $primaryInternetSubscription;
    /**
     * the external identifier of the site as a candidate
     *
     * @var int
     */
    protected int $candidateExternalId;
    /**
     * ISO 3166-1 UN M.49 country code of the site location. The first code is the country (region and department available for some countries).
     *
     * @var array
     */
    protected array $location;
    /**
     * Date of the creation of this site (in milliseconds)
     *
     * @var int
     */
    protected int $creationTime;
    /**
     * Identifier of the user who created this site
     *
     * @var string
     */
    protected string $createdBy;
    /**
     * Date of the last edition of this site (in milliseconds)
     *
     * @var int
     */
    protected int $lastEditedTime;
    /**
     * Identifier of the user who last edited this site
     *
     * @var string
     */
    protected string $lastEditedBy;
    /** @var Actions */
    protected Actions $actions;
    /** @var Resources */
    protected Resources $resources;
}