<?php

namespace Arimac\Sigfox\Model\BulkUnsubscribe;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class DataItem extends Model
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
     * Setter for id
     *
     * @param string $id The device's identifier to unsubscribe (hexadecimal format)
     *
     * @return static To use in method chains
     */
    public function setId(?string $id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return string The device's identifier to unsubscribe (hexadecimal format)
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * Setter for unsubscriptionTime
     *
     * @param int $unsubscriptionTime the unsubscription time (in milliseconds since the Unix Epoch)
     *
     * @return static To use in method chains
     */
    public function setUnsubscriptionTime(?int $unsubscriptionTime)
    {
        $this->unsubscriptionTime = $unsubscriptionTime;
        return $this;
    }
    /**
     * Getter for unsubscriptionTime
     *
     * @return int the unsubscription time (in milliseconds since the Unix Epoch)
     */
    public function getUnsubscriptionTime() : ?int
    {
        return $this->unsubscriptionTime;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('id' => new PrimitiveSerializer('string'), 'unsubscriptionTime' => new PrimitiveSerializer('int'));
        return $serializers;
    }
}