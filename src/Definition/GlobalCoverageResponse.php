<?php

namespace Arimac\Sigfox\Definition;

/**
 * Returned data for Global Coverage API
 */
class GlobalCoverageResponse
{
    /**
     * An array containing the response for each point.
     *
     * @var array
     */
    protected array $data;
    /**
     * @param array data An array containing the response for each point.
     */
    function setData(array $data)
    {
        $this->data = $data;
    }
    /**
     * @return array An array containing the response for each point.
     */
    function getData() : array
    {
        return $this->data;
    }
}