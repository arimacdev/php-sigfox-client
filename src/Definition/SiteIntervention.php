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
    protected string $id;
    /** @var MinSite */
    protected MinSite $site;
    /** @var MinGroup */
    protected MinGroup $group;
    /** @var MinBaseStation */
    protected MinBaseStation $baseStation;
    /**
     * Date of the creation of this intervention (in milliseconds)
     *
     * @var int
     */
    protected int $creationTime;
    /**
     * Identifier of the user who created this intervention
     *
     * @var string
     */
    protected string $createdBy;
    /**
     * Date of the last edition of this intervention (in milliseconds)
     *
     * @var int
     */
    protected int $lastEditedTime;
    /**
     * Identifier of the user who last edited this intervention
     *
     * @var string
     */
    protected string $lastEditedBy;
}