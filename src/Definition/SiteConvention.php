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
    protected string $id;
    /** @var MinSite */
    protected MinSite $site;
    /** @var MinGroup */
    protected MinGroup $group;
}