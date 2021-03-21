<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\BulkUnsubscribe\DataItemItem;
use Arimac\Sigfox\Definition;
class BulkUnsubscribe extends Definition
{
    /** @var BulkUnsubscribe\DataItemItem */
    protected ?BulkUnsubscribe\DataItemItem $data = null;
    /**
     * @param BulkUnsubscribe\DataItemItem data
     */
    function setData(?BulkUnsubscribe\DataItemItem $data)
    {
        $this->data = $data;
    }
    /**
     * @return BulkUnsubscribe\DataItemItem data
     */
    function getData() : ?BulkUnsubscribe\DataItemItem
    {
        return $this->data;
    }
}