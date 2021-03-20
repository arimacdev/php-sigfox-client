<?php

namespace Arimac\Sigfox\Definition;

class BulkUnsubscribe
{
    /** @var array */
    protected array $data;
    /**
     * @param array data
     */
    function setData(array $data)
    {
        $this->data = $data;
    }
    /**
     * @return array data
     */
    function getData() : array
    {
        return $this->data;
    }
}