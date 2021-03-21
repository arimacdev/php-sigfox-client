<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\GlobalCoverageResponse\DataItem;
use Arimac\Sigfox\Definition;
/**
 * Returned data for Global Coverage API
 */
class GlobalCoverageResponse extends Definition
{
    /**
     * An array containing the response for each point.
     *
     * @var DataItem[]
     */
    protected ?array $data = null;
    /**
     * @param DataItem[] $data An array containing the response for each point.
     */
    function setData(?array $data)
    {
        $this->data = $data;
    }
    /**
     * @return DataItem[] An array containing the response for each point.
     */
    function getData() : ?array
    {
        return $this->data;
    }
}