<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
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
    /**
     * @var MinSite
     */
    protected ?MinSite $site = null;
    /**
     * @var MinGroup
     */
    protected ?MinGroup $group = null;
    /**
     * Setter for id
     *
     * @param string $id The convention's identifier
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
     * @return string The convention's identifier
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
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('id' => new PrimitiveSerializer(self::class, 'id', 'string'), 'site' => new ClassSerializer(self::class, 'site', MinSite::class), 'group' => new ClassSerializer(self::class, 'group', MinGroup::class));
    }
}