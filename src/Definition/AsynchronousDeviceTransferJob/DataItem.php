<?php

namespace Arimac\Sigfox\Definition\AsynchronousDeviceTransferJob;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class DataItem extends Definition
{
    /**
     * The device's identifier (hexadecimal format)
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * Whether to keep the device history or not
     *
     * @var bool
     */
    protected ?bool $keepHistory = null;
    /**
     * True if the device is activable and can take a token. Not used if the device has already a token and if the
     * transferred is intra-order.
     *
     * @var bool
     */
    protected ?bool $activable = null;
    /**
     * @internal
     */
    protected array $validations = array('id' => array('required'));
    /**
     * Setter for id
     *
     * @param string $id The device's identifier (hexadecimal format)
     *
     * @return self To use in method chains
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return string The device's identifier (hexadecimal format)
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * Setter for keepHistory
     *
     * @param bool $keepHistory Whether to keep the device history or not
     *
     * @return self To use in method chains
     */
    public function setKeepHistory(?bool $keepHistory) : self
    {
        $this->keepHistory = $keepHistory;
        return $this;
    }
    /**
     * Getter for keepHistory
     *
     * @return bool Whether to keep the device history or not
     */
    public function getKeepHistory() : ?bool
    {
        return $this->keepHistory;
    }
    /**
     * Setter for activable
     *
     * @param bool $activable True if the device is activable and can take a token. Not used if the device has
     *                        already a token and if the transferred is intra-order.
     *
     * @return self To use in method chains
     */
    public function setActivable(?bool $activable) : self
    {
        $this->activable = $activable;
        return $this;
    }
    /**
     * Getter for activable
     *
     * @return bool True if the device is activable and can take a token. Not used if the device has already a token
     *              and if the transferred is intra-order.
     */
    public function getActivable() : ?bool
    {
        return $this->activable;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('id' => new PrimitiveSerializer('string'), 'keepHistory' => new PrimitiveSerializer('bool'), 'activable' => new PrimitiveSerializer('bool'));
        return $serializers;
    }
}