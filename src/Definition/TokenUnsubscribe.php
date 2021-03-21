<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
class TokenUnsubscribe extends Definition
{
    /**
     * Timestamp of token unsubscription date (in milliseconds since the Unix Epoch)
     *
     * @var int
     */
    protected ?int $unsubscriptionTime = null;
    /**
     * @param int $unsubscriptionTime Timestamp of token unsubscription date (in milliseconds since the Unix Epoch)
     */
    function setUnsubscriptionTime(?int $unsubscriptionTime)
    {
        $this->unsubscriptionTime = $unsubscriptionTime;
    }
    /**
     * @return int Timestamp of token unsubscription date (in milliseconds since the Unix Epoch)
     */
    function getUnsubscriptionTime() : ?int
    {
        return $this->unsubscriptionTime;
    }
}