<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\GlobalCoverageResponse\DataItemItem;
use Arimac\Sigfox\Definition;
/**
 * Returned data for Global Coverage API
 */
class GlobalCoverageResponse extends Definition
{
    /**
     * An array containing the response for each point.
     *
     * @var GlobalCoverageResponse\DataItemItem
     */
    protected ?GlobalCoverageResponse\DataItemItem $data = null;
    /**
     * @param GlobalCoverageResponse\DataItemItem $data An array containing the response for each point.
     */
    function setData(?GlobalCoverageResponse\DataItemItem $data)
    {
        $this->data = $data;
    }
    /**
     * @return GlobalCoverageResponse\DataItemItem An array containing the response for each point.
     */
    function getData() : ?GlobalCoverageResponse\DataItemItem
    {
        return $this->data;
    }
}