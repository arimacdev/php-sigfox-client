<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\Bounds;
/**
 * Defines tiles reference to display on web map
 */
class TilesResponse
{
    /**
     * The tiles base image url
     *
     * @var string
     */
    protected string $baseImgUrl;
    /**
     * The TMS template url
     *
     * @var string
     */
    protected string $tmsTemplateUrl;
    /** @var Bounds */
    protected Bounds $bounds;
}