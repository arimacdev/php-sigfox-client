<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\MinSite;
use Arimac\Sigfox\Definition\MinHost;
use Arimac\Sigfox\Definition\Actions;
/**
 * Minimal information about a site linked to a Base Station.
 */
class SimpleSite extends MinSite
{
    /** PROD */
    public const STATUS_PROD = 0;
    /** REFUSED */
    public const STATUS_REFUSED = 1;
    /** INSTALLED */
    public const STATUS_INSTALLED = 2;
    /** NOT PLANNED */
    public const STATUS_NOT_PLANNED = 3;
    /** PRE PROD */
    public const STATUS_PRE_PROD = 4;
    /** CANDIDATE */
    public const STATUS_CANDIDATE = 5;
    /** CANCELLED */
    public const STATUS_CANCELLED = 6;
    /** CLIENT */
    public const STATUS_CLIENT = 7;
    /** RD */
    public const STATUS_RD = 8;
    /** LABO */
    public const STATUS_LABO = 9;
    /** INSTALLED CONNECTED ONLY SECONDARY */
    public const STATUS_INSTALLED_CONNECTED_ONLY_SECONDARY = 14;
    /** INSTALLED CONNECTED ONLY PRIMARY */
    public const STATUS_INSTALLED_CONNECTED_ONLY_PRIMARY = 15;
    /** @var MinHost */
    protected MinHost $host;
    /**
     * external id of the site where the base station is installed
     *
     * @var int
     */
    protected int $candidateExternalId;
    /**
     * Site status
     * - `SimpleSite::STATUS_PROD`
     * - `SimpleSite::STATUS_REFUSED`
     * - `SimpleSite::STATUS_INSTALLED`
     * - `SimpleSite::STATUS_NOT_PLANNED`
     * - `SimpleSite::STATUS_PRE_PROD`
     * - `SimpleSite::STATUS_CANDIDATE`
     * - `SimpleSite::STATUS_CANCELLED`
     * - `SimpleSite::STATUS_CLIENT`
     * - `SimpleSite::STATUS_RD`
     * - `SimpleSite::STATUS_LABO`
     * - `SimpleSite::STATUS_INSTALLED_CONNECTED_ONLY_SECONDARY`
     * - `SimpleSite::STATUS_INSTALLED_CONNECTED_ONLY_PRIMARY`
     *
     * @var int
     */
    protected int $status;
    /**
     * id of the lessor of the site where the base station is installed
     *
     * @var string
     */
    protected string $lessorId;
    /** @var Actions */
    protected Actions $actions;
}