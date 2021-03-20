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
    /**
     * @param string id The site's identifier
     */
    function setId(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The site's identifier
     */
    function getId() : string
    {
        return $this->id;
    }
    /**
     * @param MinHost host
     */
    function setHost(MinHost $host)
    {
        $this->host = $host;
    }
    /**
     * @return MinHost host
     */
    function getHost() : MinHost
    {
        return $this->host;
    }
    /**
     * @param MinMaintenance maintenance
     */
    function setMaintenance(MinMaintenance $maintenance)
    {
        $this->maintenance = $maintenance;
    }
    /**
     * @return MinMaintenance maintenance
     */
    function getMaintenance() : MinMaintenance
    {
        return $this->maintenance;
    }
    /**
     * @param MinGroup group
     */
    function setGroup(MinGroup $group)
    {
        $this->group = $group;
    }
    /**
     * @return MinGroup group
     */
    function getGroup() : MinGroup
    {
        return $this->group;
    }
    /**
     * @param int basestationCount the number of base station installed on this site
     */
    function setBasestationCount(int $basestationCount)
    {
        $this->basestationCount = $basestationCount;
    }
    /**
     * @return int the number of base station installed on this site
     */
    function getBasestationCount() : int
    {
        return $this->basestationCount;
    }
    /**
     * @param InternetSubscription primaryInternetSubscription
     */
    function setPrimaryInternetSubscription(InternetSubscription $primaryInternetSubscription)
    {
        $this->primaryInternetSubscription = $primaryInternetSubscription;
    }
    /**
     * @return InternetSubscription primaryInternetSubscription
     */
    function getPrimaryInternetSubscription() : InternetSubscription
    {
        return $this->primaryInternetSubscription;
    }
    /**
     * @param int candidateExternalId the external identifier of the site as a candidate
     */
    function setCandidateExternalId(int $candidateExternalId)
    {
        $this->candidateExternalId = $candidateExternalId;
    }
    /**
     * @return int the external identifier of the site as a candidate
     */
    function getCandidateExternalId() : int
    {
        return $this->candidateExternalId;
    }
    /**
     * @param array location ISO 3166-1 UN M.49 country code of the site location. The first code is the country (region and department available for some countries).
     */
    function setLocation(array $location)
    {
        $this->location = $location;
    }
    /**
     * @return array ISO 3166-1 UN M.49 country code of the site location. The first code is the country (region and department available for some countries).
     */
    function getLocation() : array
    {
        return $this->location;
    }
    /**
     * @param int creationTime Date of the creation of this site (in milliseconds)
     */
    function setCreationTime(int $creationTime)
    {
        $this->creationTime = $creationTime;
    }
    /**
     * @return int Date of the creation of this site (in milliseconds)
     */
    function getCreationTime() : int
    {
        return $this->creationTime;
    }
    /**
     * @param string createdBy Identifier of the user who created this site
     */
    function setCreatedBy(string $createdBy)
    {
        $this->createdBy = $createdBy;
    }
    /**
     * @return string Identifier of the user who created this site
     */
    function getCreatedBy() : string
    {
        return $this->createdBy;
    }
    /**
     * @param int lastEditedTime Date of the last edition of this site (in milliseconds)
     */
    function setLastEditedTime(int $lastEditedTime)
    {
        $this->lastEditedTime = $lastEditedTime;
    }
    /**
     * @return int Date of the last edition of this site (in milliseconds)
     */
    function getLastEditedTime() : int
    {
        return $this->lastEditedTime;
    }
    /**
     * @param string lastEditedBy Identifier of the user who last edited this site
     */
    function setLastEditedBy(string $lastEditedBy)
    {
        $this->lastEditedBy = $lastEditedBy;
    }
    /**
     * @return string Identifier of the user who last edited this site
     */
    function getLastEditedBy() : string
    {
        return $this->lastEditedBy;
    }
    /**
     * @param Actions actions
     */
    function setActions(Actions $actions)
    {
        $this->actions = $actions;
    }
    /**
     * @return Actions actions
     */
    function getActions() : Actions
    {
        return $this->actions;
    }
    /**
     * @param Resources resources
     */
    function setResources(Resources $resources)
    {
        $this->resources = $resources;
    }
    /**
     * @return Resources resources
     */
    function getResources() : Resources
    {
        return $this->resources;
    }
}