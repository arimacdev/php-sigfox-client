<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Validator\Rules\Child;
/**
 * Information about intervention
 */
class SiteIntervention extends BaseSiteIntervention
{
    /**
     * The intervention's identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * @var MinSite
     */
    protected ?MinSite $site = null;
    /**
     * @var MinGroup
     */
    protected ?MinGroup $group = null;
    /**
     * @var MinBaseStation
     */
    protected ?MinBaseStation $baseStation = null;
    /**
     * Date of the creation of this intervention (in milliseconds)
     *
     * @var int
     */
    protected ?int $creationTime = null;
    /**
     * Identifier of the user who created this intervention
     *
     * @var string
     */
    protected ?string $createdBy = null;
    /**
     * Date of the last edition of this intervention (in milliseconds)
     *
     * @var int
     */
    protected ?int $lastEditedTime = null;
    /**
     * Identifier of the user who last edited this intervention
     *
     * @var string
     */
    protected ?string $lastEditedBy = null;
    /**
     * Setter for id
     *
     * @param string $id The intervention's identifier
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
     * @return string The intervention's identifier
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * Setter for site
     *
     * @param MinSite $site
     *
     * @return self To use in method chains
     */
    public function setSite(?MinSite $site) : self
    {
        $this->site = $site;
        return $this;
    }
    /**
     * Getter for site
     *
     * @return MinSite
     */
    public function getSite() : ?MinSite
    {
        return $this->site;
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
    public function getGroup() : ?MinGroup
    {
        return $this->group;
    }
    /**
     * Setter for baseStation
     *
     * @param MinBaseStation $baseStation
     *
     * @return self To use in method chains
     */
    public function setBaseStation(?MinBaseStation $baseStation) : self
    {
        $this->baseStation = $baseStation;
        return $this;
    }
    /**
     * Getter for baseStation
     *
     * @return MinBaseStation
     */
    public function getBaseStation() : ?MinBaseStation
    {
        return $this->baseStation;
    }
    /**
     * Setter for creationTime
     *
     * @param int $creationTime Date of the creation of this intervention (in milliseconds)
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
     * @return int Date of the creation of this intervention (in milliseconds)
     */
    public function getCreationTime() : ?int
    {
        return $this->creationTime;
    }
    /**
     * Setter for createdBy
     *
     * @param string $createdBy Identifier of the user who created this intervention
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
     * @return string Identifier of the user who created this intervention
     */
    public function getCreatedBy() : ?string
    {
        return $this->createdBy;
    }
    /**
     * Setter for lastEditedTime
     *
     * @param int $lastEditedTime Date of the last edition of this intervention (in milliseconds)
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
     * @return int Date of the last edition of this intervention (in milliseconds)
     */
    public function getLastEditedTime() : ?int
    {
        return $this->lastEditedTime;
    }
    /**
     * Setter for lastEditedBy
     *
     * @param string $lastEditedBy Identifier of the user who last edited this intervention
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
     * @return string Identifier of the user who last edited this intervention
     */
    public function getLastEditedBy() : ?string
    {
        return $this->lastEditedBy;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('id' => new PrimitiveSerializer('string'), 'site' => new ClassSerializer(MinSite::class), 'group' => new ClassSerializer(MinGroup::class), 'baseStation' => new ClassSerializer(MinBaseStation::class), 'creationTime' => new PrimitiveSerializer('int'), 'createdBy' => new PrimitiveSerializer('string'), 'lastEditedTime' => new PrimitiveSerializer('int'), 'lastEditedBy' => new PrimitiveSerializer('string'));
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
        $rules = array('site' => array(new Child()), 'group' => array(new Child()), 'baseStation' => array(new Child()));
        $rules = array_merge($rules, parent::getValidationMetaData());
        return $rules;
    }
}