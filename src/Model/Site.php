<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model\Site\LocationItem;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Validator\Rules\Child;
use Arimac\Sigfox\Validator\Rules\ChildSet;
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
    /**
     * Setter for id
     *
     * @param string $id The site's identifier
     *
     * @return static To use in method chains
     */
    public function setId(?string $id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return string The site's identifier
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * Setter for host
     *
     * @param MinHost $host
     *
     * @return static To use in method chains
     */
    public function setHost(?MinHost $host)
    {
        $this->host = $host;
        return $this;
    }
    /**
     * Getter for host
     *
     * @return MinHost
     */
    public function getHost() : ?MinHost
    {
        return $this->host;
    }
    /**
     * Setter for maintenance
     *
     * @param MinMaintenance $maintenance
     *
     * @return static To use in method chains
     */
    public function setMaintenance(?MinMaintenance $maintenance)
    {
        $this->maintenance = $maintenance;
        return $this;
    }
    /**
     * Getter for maintenance
     *
     * @return MinMaintenance
     */
    public function getMaintenance() : ?MinMaintenance
    {
        return $this->maintenance;
    }
    /**
     * Setter for group
     *
     * @param MinGroup $group
     *
     * @return static To use in method chains
     */
    public function setGroup(?MinGroup $group)
    {
        $this->group = $group;
        return $this;
    }
    /**
     * Getter for group
     *
     * @return MinGroup
     */
    public function getGroup() : ?MinGroup
    {
        return $this->group;
    }
    /**
     * Setter for basestationCount
     *
     * @param int $basestationCount the number of base station installed on this site
     *
     * @return static To use in method chains
     */
    public function setBasestationCount(?int $basestationCount)
    {
        $this->basestationCount = $basestationCount;
        return $this;
    }
    /**
     * Getter for basestationCount
     *
     * @return int the number of base station installed on this site
     */
    public function getBasestationCount() : ?int
    {
        return $this->basestationCount;
    }
    /**
     * Setter for primaryInternetSubscription
     *
     * @param InternetSubscription $primaryInternetSubscription
     *
     * @return static To use in method chains
     */
    public function setPrimaryInternetSubscription(?InternetSubscription $primaryInternetSubscription)
    {
        $this->primaryInternetSubscription = $primaryInternetSubscription;
        return $this;
    }
    /**
     * Getter for primaryInternetSubscription
     *
     * @return InternetSubscription
     */
    public function getPrimaryInternetSubscription() : ?InternetSubscription
    {
        return $this->primaryInternetSubscription;
    }
    /**
     * Setter for candidateExternalId
     *
     * @param int $candidateExternalId the external identifier of the site as a candidate
     *
     * @return static To use in method chains
     */
    public function setCandidateExternalId(?int $candidateExternalId)
    {
        $this->candidateExternalId = $candidateExternalId;
        return $this;
    }
    /**
     * Getter for candidateExternalId
     *
     * @return int the external identifier of the site as a candidate
     */
    public function getCandidateExternalId() : ?int
    {
        return $this->candidateExternalId;
    }
    /**
     * Setter for location
     *
     * @param LocationItem[] $location ISO 3166-1 UN M.49 country code of the site location. The first code is the
     *                                 country (region and department available for some countries).
     *
     * @return static To use in method chains
     */
    public function setLocation(?array $location)
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
    public function getLocation() : ?array
    {
        return $this->location;
    }
    /**
     * Setter for creationTime
     *
     * @param int $creationTime Date of the creation of this site (in milliseconds)
     *
     * @return static To use in method chains
     */
    public function setCreationTime(?int $creationTime)
    {
        $this->creationTime = $creationTime;
        return $this;
    }
    /**
     * Getter for creationTime
     *
     * @return int Date of the creation of this site (in milliseconds)
     */
    public function getCreationTime() : ?int
    {
        return $this->creationTime;
    }
    /**
     * Setter for createdBy
     *
     * @param string $createdBy Identifier of the user who created this site
     *
     * @return static To use in method chains
     */
    public function setCreatedBy(?string $createdBy)
    {
        $this->createdBy = $createdBy;
        return $this;
    }
    /**
     * Getter for createdBy
     *
     * @return string Identifier of the user who created this site
     */
    public function getCreatedBy() : ?string
    {
        return $this->createdBy;
    }
    /**
     * Setter for lastEditedTime
     *
     * @param int $lastEditedTime Date of the last edition of this site (in milliseconds)
     *
     * @return static To use in method chains
     */
    public function setLastEditedTime(?int $lastEditedTime)
    {
        $this->lastEditedTime = $lastEditedTime;
        return $this;
    }
    /**
     * Getter for lastEditedTime
     *
     * @return int Date of the last edition of this site (in milliseconds)
     */
    public function getLastEditedTime() : ?int
    {
        return $this->lastEditedTime;
    }
    /**
     * Setter for lastEditedBy
     *
     * @param string $lastEditedBy Identifier of the user who last edited this site
     *
     * @return static To use in method chains
     */
    public function setLastEditedBy(?string $lastEditedBy)
    {
        $this->lastEditedBy = $lastEditedBy;
        return $this;
    }
    /**
     * Getter for lastEditedBy
     *
     * @return string Identifier of the user who last edited this site
     */
    public function getLastEditedBy() : ?string
    {
        return $this->lastEditedBy;
    }
    /**
     * Setter for actions
     *
     * @param string[] $actions
     *
     * @return static To use in method chains
     */
    public function setActions(?array $actions)
    {
        $this->actions = $actions;
        return $this;
    }
    /**
     * Getter for actions
     *
     * @return string[]
     */
    public function getActions() : ?array
    {
        return $this->actions;
    }
    /**
     * Setter for resources
     *
     * @param string[] $resources
     *
     * @return static To use in method chains
     */
    public function setResources(?array $resources)
    {
        $this->resources = $resources;
        return $this;
    }
    /**
     * Getter for resources
     *
     * @return string[]
     */
    public function getResources() : ?array
    {
        return $this->resources;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('id' => new PrimitiveSerializer('string'), 'host' => new ClassSerializer(MinHost::class), 'maintenance' => new ClassSerializer(MinMaintenance::class), 'group' => new ClassSerializer(MinGroup::class), 'basestationCount' => new PrimitiveSerializer('int'), 'primaryInternetSubscription' => new ClassSerializer(InternetSubscription::class), 'candidateExternalId' => new PrimitiveSerializer('int'), 'location' => new ArraySerializer(new ClassSerializer(LocationItem::class)), 'creationTime' => new PrimitiveSerializer('int'), 'createdBy' => new PrimitiveSerializer('string'), 'lastEditedTime' => new PrimitiveSerializer('int'), 'lastEditedBy' => new PrimitiveSerializer('string'), 'actions' => new ArraySerializer(new PrimitiveSerializer('string')), 'resources' => new ArraySerializer(new PrimitiveSerializer('string')));
        $serializers = array_merge($serializers, parent::getSerializeMetaData());
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('host' => array(new Child()), 'maintenance' => array(new Child()), 'group' => array(new Child()), 'primaryInternetSubscription' => array(new Child()), 'location' => array(new ChildSet()));
        $rules = array_merge($rules, parent::getValidationMetaData());
        return $rules;
    }
}