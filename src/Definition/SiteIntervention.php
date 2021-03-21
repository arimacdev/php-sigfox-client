<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\BaseSiteIntervention;
use Arimac\Sigfox\Definition\MinSite;
use Arimac\Sigfox\Definition\MinGroup;
use Arimac\Sigfox\Definition\MinBaseStation;
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
    /** @var MinSite */
    protected ?MinSite $site = null;
    /** @var MinGroup */
    protected ?MinGroup $group = null;
    /** @var MinBaseStation */
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
    protected $objects = array('site' => '\\Arimac\\Sigfox\\Definition\\MinSite', 'group' => '\\Arimac\\Sigfox\\Definition\\MinGroup', 'baseStation' => '\\Arimac\\Sigfox\\Definition\\MinBaseStation');
    /**
     * @param string $id The intervention's identifier
     */
    function setId(?string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The intervention's identifier
     */
    function getId() : ?string
    {
        return $this->id;
    }
    /**
     * @param MinSite site
     */
    function setSite(?MinSite $site)
    {
        $this->site = $site;
    }
    /**
     * @return MinSite site
     */
    function getSite() : ?MinSite
    {
        return $this->site;
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
     * @param MinBaseStation baseStation
     */
    function setBaseStation(?MinBaseStation $baseStation)
    {
        $this->baseStation = $baseStation;
    }
    /**
     * @return MinBaseStation baseStation
     */
    function getBaseStation() : ?MinBaseStation
    {
        return $this->baseStation;
    }
    /**
     * @param int $creationTime Date of the creation of this intervention (in milliseconds)
     */
    function setCreationTime(?int $creationTime)
    {
        $this->creationTime = $creationTime;
    }
    /**
     * @return int Date of the creation of this intervention (in milliseconds)
     */
    function getCreationTime() : ?int
    {
        return $this->creationTime;
    }
    /**
     * @param string $createdBy Identifier of the user who created this intervention
     */
    function setCreatedBy(?string $createdBy)
    {
        $this->createdBy = $createdBy;
    }
    /**
     * @return string Identifier of the user who created this intervention
     */
    function getCreatedBy() : ?string
    {
        return $this->createdBy;
    }
    /**
     * @param int $lastEditedTime Date of the last edition of this intervention (in milliseconds)
     */
    function setLastEditedTime(?int $lastEditedTime)
    {
        $this->lastEditedTime = $lastEditedTime;
    }
    /**
     * @return int Date of the last edition of this intervention (in milliseconds)
     */
    function getLastEditedTime() : ?int
    {
        return $this->lastEditedTime;
    }
    /**
     * @param string $lastEditedBy Identifier of the user who last edited this intervention
     */
    function setLastEditedBy(?string $lastEditedBy)
    {
        $this->lastEditedBy = $lastEditedBy;
    }
    /**
     * @return string Identifier of the user who last edited this intervention
     */
    function getLastEditedBy() : ?string
    {
        return $this->lastEditedBy;
    }
}