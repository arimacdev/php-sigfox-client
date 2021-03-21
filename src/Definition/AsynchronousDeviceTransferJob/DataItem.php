<?php

namespace Arimac\Sigfox\Definition\AsynchronousDeviceTransferJob;

use Arimac\Sigfox\Definition;
class DataItem extends Definition
{
    protected $required = array('id');
    /**
     * The device's identifier (hexadecimal format)
     *
     * @var string
     */
    protected string $id;
    /**
     * Whether to keep the device history or not
     *
     * @var bool
     */
    protected ?bool $keepHistory = null;
    /**
     * True if the device is activable and can take a token. Not used if the device has already a token and if the transferred is intra-order.
     *
     * @var bool
     */
    protected ?bool $activable = null;
    /**
     * @param string $id The device's identifier (hexadecimal format)
     */
    function setId(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The device's identifier (hexadecimal format)
     */
    function getId() : string
    {
        return $this->id;
    }
    /**
     * @param bool $keepHistory Whether to keep the device history or not
     */
    function setKeepHistory(?bool $keepHistory)
    {
        $this->keepHistory = $keepHistory;
    }
    /**
     * @return bool Whether to keep the device history or not
     */
    function getKeepHistory() : ?bool
    {
        return $this->keepHistory;
    }
    /**
     * @param bool $activable True if the device is activable and can take a token. Not used if the device has already a token and if the transferred is intra-order.
     */
    function setActivable(?bool $activable)
    {
        $this->activable = $activable;
    }
    /**
     * @return bool True if the device is activable and can take a token. Not used if the device has already a token and if the transferred is intra-order.
     */
    function getActivable() : ?bool
    {
        return $this->activable;
    }
}