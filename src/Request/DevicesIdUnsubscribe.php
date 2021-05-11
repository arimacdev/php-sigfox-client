<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\TokenUnsubscribe;
use Arimac\Sigfox\Serializer\ClassSerializer;
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
    protected $serialize = array(new ClassSerializer(self::class, 'unsubscriptionTime', TokenUnsubscribe::class));
    protected $body = array('unsubscriptionTime');
    protected $validations = array('unsubscriptionTime' => array('required'));
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