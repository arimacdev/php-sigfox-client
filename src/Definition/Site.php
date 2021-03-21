<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\BaseSite;
use Arimac\Sigfox\Definition\MinHost;
use Arimac\Sigfox\Definition\MinMaintenance;
use Arimac\Sigfox\Definition\MinGroup;
use Arimac\Sigfox\Definition\InternetSubscription;
use Arimac\Sigfox\Definition\Site\LocationItemItem;
class Site extends BaseSite
{
    /**
     * The site's identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /** @var MinHost */
    protected ?MinHost $host = null;
    /** @var MinMaintenance */
    protected ?MinMaintenance $maintenance = null;
    /** @var MinGroup */
    protected ?MinGroup $group = null;
    /**
     * the number of base station installed on this site
     *
     * @var int
     */
    protected ?int $basestationCount = null;
    /** @var InternetSubscription */
    protected ?InternetSubscription $primaryInternetSubscription = null;
    /**
     * the external identifier of the site as a candidate
     *
     * @var int
     */
    protected ?int $candidateExternalId = null;
    /**
     * ISO 3166-1 UN M.49 country code of the site location. The first code is the country (region and department available for some countries).
     *
     * @var Site\LocationItemItem
     */
    protected ?Site\LocationItemItem $location = null;
    /**
     * Date of the creation of this site (in milliseconds)
     *
     * @var int
     */
    protected ?int $creationTime = null;
    /**
     * Identifier of the user who created this site
     *
     * @var string
     */
    protected ?string $createdBy = null;
    /**
     * Date of the last edition of this site (in milliseconds)
     *
     * @var int
     */
    protected ?int $lastEditedTime = null;
    /**
     * Identifier of the user who last edited this site
     *
     * @var string
     */
    protected ?string $lastEditedBy = null;
    /** @var string[] */
    protected ?array $actions = null;
    /** @var string[] */
    protected ?array $resources = null;
    protected $objects = array('host' => '\\Arimac\\Sigfox\\Definition\\MinHost', 'maintenance' => '\\Arimac\\Sigfox\\Definition\\MinMaintenance', 'group' => '\\Arimac\\Sigfox\\Definition\\MinGroup', 'primaryInternetSubscription' => '\\Arimac\\Sigfox\\Definition\\InternetSubscription');
    /**
     * @param string $id The site's identifier
     */
    function setId(?string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The site's identifier
     */
    function getId() : ?string
    {
        return $this->id;
    }
    /**
     * @param MinHost host
     */
    function setHost(?MinHost $host)
    {
        $this->host = $host;
    }
    /**
     * @return MinHost host
     */
    function getHost() : ?MinHost
    {
        return $this->host;
    }
    /**
     * @param MinMaintenance maintenance
     */
    function setMaintenance(?MinMaintenance $maintenance)
    {
        $this->maintenance = $maintenance;
    }
    /**
     * @return MinMaintenance maintenance
     */
    function getMaintenance() : ?MinMaintenance
    {
        return $this->maintenance;
    }
    /**
     * @param MinGroup group
     */
    function setGroup(?MinGroup $group)
    {
        $this->group = $group;
    }
    /**
     * @return MinGroup group
     */
    function getGroup() : ?MinGroup
    {
        return $this->group;
    }
    /**
     * @param int $basestationCount the number of base station installed on this site
     */
    function setBasestationCount(?int $basestationCount)
    {
        $this->basestationCount = $basestationCount;
    }
    /**
     * @return int the number of base station installed on this site
     */
    function getBasestationCount() : ?int
    {
        return $this->basestationCount;
    }
    /**
     * @param InternetSubscription primaryInternetSubscription
     */
    function setPrimaryInternetSubscription(?InternetSubscription $primaryInternetSubscription)
    {
        $this->primaryInternetSubscription = $primaryInternetSubscription;
    }
    /**
     * @return InternetSubscription primaryInternetSubscription
     */
    function getPrimaryInternetSubscription() : ?InternetSubscription
    {
        return $this->primaryInternetSubscription;
    }
    /**
     * @param int $candidateExternalId the external identifier of the site as a candidate
     */
    function setCandidateExternalId(?int $candidateExternalId)
    {
        $this->candidateExternalId = $candidateExternalId;
    }
    /**
     * @return int the external identifier of the site as a candidate
     */
    function getCandidateExternalId() : ?int
    {
        return $this->candidateExternalId;
    }
    /**
     * @param Site\LocationItemItem $location ISO 3166-1 UN M.49 country code of the site location. The first code is the country (region and department available for some countries).
     */
    function setLocation(?Site\LocationItemItem $location)
    {
        $this->location = $location;
    }
    /**
     * @return Site\LocationItemItem ISO 3166-1 UN M.49 country code of the site location. The first code is the country (region and department available for some countries).
     */
    function getLocation() : ?Site\LocationItemItem
    {
        return $this->location;
    }
    /**
     * @param int $creationTime Date of the creation of this site (in milliseconds)
     */
    function setCreationTime(?int $creationTime)
    {
        $this->creationTime = $creationTime;
    }
    /**
     * @return int Date of the creation of this site (in milliseconds)
     */
    function getCreationTime() : ?int
    {
        return $this->creationTime;
    }
    /**
     * @param string $createdBy Identifier of the user who created this site
     */
    function setCreatedBy(?string $createdBy)
    {
        $this->createdBy = $createdBy;
    }
    /**
     * @return string Identifier of the user who created this site
     */
    function getCreatedBy() : ?string
    {
        return $this->createdBy;
    }
    /**
     * @param int $lastEditedTime Date of the last edition of this site (in milliseconds)
     */
    function setLastEditedTime(?int $lastEditedTime)
    {
        $this->lastEditedTime = $lastEditedTime;
    }
    /**
     * @return int Date of the last edition of this site (in milliseconds)
     */
    function getLastEditedTime() : ?int
    {
        return $this->lastEditedTime;
    }
    /**
     * @param string $lastEditedBy Identifier of the user who last edited this site
     */
    function setLastEditedBy(?string $lastEditedBy)
    {
        $this->lastEditedBy = $lastEditedBy;
    }
    /**
     * @return string Identifier of the user who last edited this site
     */
    function getLastEditedBy() : ?string
    {
        return $this->lastEditedBy;
    }
    /**
     * @param string[] actions
     */
    function setActions(?array $actions)
    {
        $this->actions = $actions;
    }
    /**
     * @return string[] actions
     */
    function getActions() : ?array
    {
        return $this->actions;
    }
    /**
     * @param string[] resources
     */
    function setResources(?array $resources)
    {
        $this->resources = $resources;
    }
    /**
     * @return string[] resources
     */
    function getResources() : ?array
    {
        return $this->resources;
    }
}