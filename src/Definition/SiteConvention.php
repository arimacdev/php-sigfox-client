<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\BaseSiteConvention;
use Arimac\Sigfox\Definition\MinSite;
use Arimac\Sigfox\Definition\MinGroup;
/**
 * information about convention
 */
class SiteConvention extends BaseSiteConvention
{
    /**
     * The convention's identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /** @var MinSite */
    protected ?MinSite $site = null;
    /** @var MinGroup */
    protected ?MinGroup $group = null;
    protected $objects = array('site' => '\\Arimac\\Sigfox\\Definition\\MinSite', 'group' => '\\Arimac\\Sigfox\\Definition\\MinGroup');
    /**
     * @param string $id The convention's identifier
     */
    function setId(?string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The convention's identifier
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
}