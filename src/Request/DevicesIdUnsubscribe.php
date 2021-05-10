<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\TokenUnsubscribe;
/**
 * Set an unsubscription date for the device's token.
 * 
 */
class DevicesIdUnsubscribe extends Definition
{
    /**
     * the unsubscription time (in milliseconds since the Unix Epoch)
     *
     * @var TokenUnsubscribe
     */
    protected ?TokenUnsubscribe $unsubscriptionTime = null;
    protected $serialize = array('unsubscriptionTime' => TokenUnsubscribe::class);
    protected $body = array('unsubscriptionTime');
    /**
     * Setter for unsubscriptionTime
     *
     * @param TokenUnsubscribe $unsubscriptionTime the unsubscription time (in milliseconds since the Unix Epoch)
     *
     * @return self To use in method chains
     */
    public function setUnsubscriptionTime(?TokenUnsubscribe $unsubscriptionTime) : self
    {
        $this->unsubscriptionTime = $unsubscriptionTime;
        return $this;
    }
}