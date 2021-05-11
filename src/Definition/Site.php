<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\Site\LocationItem;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
class Site extends BaseSite
{
    /**
     * The site's identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * @var MinHost
     */
    protected ?MinHost $host = null;
    /**
     * @var MinMaintenance
     */
    protected ?MinMaintenance $maintenance = null;
    /**
     * @var MinGroup
     */
    protected ?MinGroup $group = null;
    /**
     * the number of base station installed on this site
     *
     * @var int
     */
    protected ?int $basestationCount = null;
    /**
     * @var InternetSubscription
     */
    protected ?InternetSubscription $primaryInternetSubscription = null;
    /**
     * the external identifier of the site as a candidate
     *
     * @var int
     */
    protected ?int $candidateExternalId = null;
    /**
     * ISO 3166-1 UN M.49 country code of the site location. The first code is the country (region and department
     * available for some countries).
     *
     * @var LocationItem[]
     */
    protected ?array $location = null;
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
    /**
     * @var string[]
     */
    protected ?array $actions = null;
    /**
     * @var string[]
     */
    protected ?array $resources = null;
    protected $serialize = array(new PrimitiveSerializer(self::class, 'id', 'string'), new ClassSerializer(self::class, 'host', MinHost::class), new ClassSerializer(self::class, 'maintenance', MinMaintenance::class), new ClassSerializer(self::class, 'group', MinGroup::class), new PrimitiveSerializer(self::class, 'basestationCount', 'int'), new ClassSerializer(self::class, 'primaryInternetSubscription', InternetSubscription::class), new PrimitiveSerializer(self::class, 'candidateExternalId', 'int'), new ArraySerializer(self::class, 'location', new ClassSerializer(self::class, 'location', LocationItem::class)), new PrimitiveSerializer(self::class, 'creationTime', 'int'), new PrimitiveSerializer(self::class, 'createdBy', 'string'), new PrimitiveSerializer(self::class, 'lastEditedTime', 'int'), new PrimitiveSerializer(self::class, 'lastEditedBy', 'string'), new ArraySerializer(self::class, 'actions', new PrimitiveSerializer(self::class, 'actions', 'string')), new ArraySerializer(self::class, 'resources', new PrimitiveSerializer(self::class, 'resources', 'string')));
    /**
     * Setter for id
     *
     * @param string $id The site's identifier
     *
     * @return self To use in method chains
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return string The site's identifier
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Setter for host
     *
     * @param MinHost $host
     *
     * @return self To use in method chains
     */
    public function setHost(?MinHost $host) : self
    {
        $this->host = $host;
        return $this;
    }
    /**
     * Getter for host
     *
     * @return MinHost
     */
    public function getHost() : MinHost
    {
        return $this->host;
    }
    /**
     * Setter for maintenance
     *
     * @param MinMaintenance $maintenance
     *
     * @return self To use in method chains
     */
    public function setMaintenance(?MinMaintenance $maintenance) : self
    {
        $this->maintenance = $maintenance;
        return $this;
    }
    /**
     * Getter for maintenance
     *
     * @return MinMaintenance
     */
    public function getMaintenance() : MinMaintenance
    {
        return $this->maintenance;
    }
    /**
     * Setter for group
     *
     * @param MinGroup $group
     *
     * @return self To use in method chains
     */
    public function setGroup(?MinGroup $group) : self
    {
        $this->group = $group;
        return $this;
    }
    /**
     * Getter for group
     *
     * @return MinGroup
     */
    public function getGroup() : MinGroup
    {
        return $this->group;
    }
    /**
     * Setter for basestationCount
     *
     * @param int $basestationCount the number of base station installed on this site
     *
     * @return self To use in method chains
     */
    public function setBasestationCount(?int $basestationCount) : self
    {
        $this->basestationCount = $basestationCount;
        return $this;
    }
    /**
     * Getter for basestationCount
     *
     * @return int the number of base station installed on this site
     */
    public function getBasestationCount() : int
    {
        return $this->basestationCount;
    }
    /**
     * Setter for primaryInternetSubscription
     *
     * @param InternetSubscription $primaryInternetSubscription
     *
     * @return self To use in method chains
     */
    public function setPrimaryInternetSubscription(?InternetSubscription $primaryInternetSubscription) : self
    {
        $this->primaryInternetSubscription = $primaryInternetSubscription;
        return $this;
    }
    /**
     * Getter for primaryInternetSubscription
     *
     * @return InternetSubscription
     */
    public function getPrimaryInternetSubscription() : InternetSubscription
    {
        return $this->primaryInternetSubscription;
    }
    /**
     * Setter for candidateExternalId
     *
     * @param int $candidateExternalId the external identifier of the site as a candidate
     *
     * @return self To use in method chains
     */
    public function setCandidateExternalId(?int $candidateExternalId) : self
    {
        $this->candidateExternalId = $candidateExternalId;
        return $this;
    }
    /**
     * Getter for candidateExternalId
     *
     * @return int the external identifier of the site as a candidate
     */
    public function getCandidateExternalId() : int
    {
        return $this->candidateExternalId;
    }
    /**
     * Setter for location
     *
     * @param LocationItem[] $location ISO 3166-1 UN M.49 country code of the site location. The first code is the
     *                                 country (region and department available for some countries).
     *
     * @return self To use in method chains
     */
    public function setLocation(?array $location) : self
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
    public function getLocation() : array
    {
        return $this->location;
    }
    /**
     * Setter for creationTime
     *
     * @param int $creationTime Date of the creation of this site (in milliseconds)
     *
     * @return self To use in method chains
     */
    public function setCreationTime(?int $creationTime) : self
    {
        $this->creationTime = $creationTime;
        return $this;
    }
    /**
     * Getter for creationTime
     *
     * @return int Date of the creation of this site (in milliseconds)
     */
    public function getCreationTime() : int
    {
        return $this->creationTime;
    }
    /**
     * Setter for createdBy
     *
     * @param string $createdBy Identifier of the user who created this site
     *
     * @return self To use in method chains
     */
    public function setCreatedBy(?string $createdBy) : self
    {
        $this->createdBy = $createdBy;
        return $this;
    }
    /**
     * Getter for createdBy
     *
     * @return string Identifier of the user who created this site
     */
    public function getCreatedBy() : string
    {
        return $this->createdBy;
    }
    /**
     * Setter for lastEditedTime
     *
     * @param int $lastEditedTime Date of the last edition of this site (in milliseconds)
     *
     * @return self To use in method chains
     */
    public function setLastEditedTime(?int $lastEditedTime) : self
    {
        $this->lastEditedTime = $lastEditedTime;
        return $this;
    }
    /**
     * Getter for lastEditedTime
     *
     * @return int Date of the last edition of this site (in milliseconds)
     */
    public function getLastEditedTime() : int
    {
        return $this->lastEditedTime;
    }
    /**
     * Setter for lastEditedBy
     *
     * @param string $lastEditedBy Identifier of the user who last edited this site
     *
     * @return self To use in method chains
     */
    public function setLastEditedBy(?string $lastEditedBy) : self
    {
        $this->lastEditedBy = $lastEditedBy;
        return $this;
    }
    /**
     * Getter for lastEditedBy
     *
     * @return string Identifier of the user who last edited this site
     */
    public function getLastEditedBy() : string
    {
        return $this->lastEditedBy;
    }
    /**
     * Setter for actions
     *
     * @param string[] $actions
     *
     * @return self To use in method chains
     */
    public function setActions(?array $actions) : self
    {
        $this->actions = $actions;
        return $this;
    }
    /**
     * Getter for actions
     *
     * @return string[]
     */
    public function getActions() : array
    {
        return $this->actions;
    }
    /**
     * Setter for resources
     *
     * @param string[] $resources
     *
     * @return self To use in method chains
     */
    public function setResources(?array $resources) : self
    {
        $this->resources = $resources;
        return $this;
    }
    /**
     * Getter for resources
     *
     * @return string[]
     */
    public function getResources() : array
    {
        return $this->resources;
    }
}