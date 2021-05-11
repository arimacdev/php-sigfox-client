<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class TokenUnsubscribe extends Definition
{
    /**
     * Timestamp of token unsubscription date (in milliseconds since the Unix Epoch)
     *
     * @var int
     */
    protected ?int $unsubscriptionTime = null;
    protected $serialize = array(new PrimitiveSerializer(self::class, 'unsubscriptionTime', 'int'));
    /**
     * Setter for unsubscriptionTime
     *
     * @param int $unsubscriptionTime Timestamp of token unsubscription date (in milliseconds since the Unix Epoch)
     *
     * @return self To use in method chains
     */
    public function setUnsubscriptionTime(?int $unsubscriptionTime) : self
    {
        $this->unsubscriptionTime = $unsubscriptionTime;
        return $this;
    }
    /**
     * Getter for unsubscriptionTime
     *
     * @return int Timestamp of token unsubscription date (in milliseconds since the Unix Epoch)
     */
    public function getUnsubscriptionTime() : int
    {
        return $this->unsubscriptionTime;
    }
}