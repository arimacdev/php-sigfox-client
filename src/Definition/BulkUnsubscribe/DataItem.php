<?php

namespace Arimac\Sigfox\Definition\BulkUnsubscribe;

use Arimac\Sigfox\Definition;
class DataItem extends Definition
{
    /**
     * The device's identifier to unsubscribe (hexadecimal format)
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * the unsubscription time (in milliseconds since the Unix Epoch)
     *
     * @var int
     */
    protected ?int $unsubscriptionTime = null;
    /**
     * @param string $id The device's identifier to unsubscribe (hexadecimal format)
     */
    function setId(?string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The device's identifier to unsubscribe (hexadecimal format)
     */
    function getId() : ?string
    {
        return $this->id;
    }
    /**
     * @param int $unsubscriptionTime the unsubscription time (in milliseconds since the Unix Epoch)
     */
    function setUnsubscriptionTime(?int $unsubscriptionTime)
    {
        $this->unsubscriptionTime = $unsubscriptionTime;
    }
    /**
     * @return int the unsubscription time (in milliseconds since the Unix Epoch)
     */
    function getUnsubscriptionTime() : ?int
    {
        return $this->unsubscriptionTime;
    }
}