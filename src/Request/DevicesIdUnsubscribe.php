<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Definition\TokenUnsubscribe;
use Arimac\Sigfox\Serializer\ClassSerializer;
/**
 * Set an unsubscription date for the device's token.
 */
class DevicesIdUnsubscribe extends Request
{
    /**
     * the unsubscription time (in milliseconds since the Unix Epoch)
     *
     * @var TokenUnsubscribe
     */
    protected ?TokenUnsubscribe $unsubscriptionTime = null;
    /**
     * @internal
     */
    protected array $body = array('unsubscriptionTime');
    /**
     * @internal
     */
    protected array $validations = array('unsubscriptionTime' => array('required'));
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
    /**
     * Getter for unsubscriptionTime
     *
     * @internal
     *
     * @return TokenUnsubscribe the unsubscription time (in milliseconds since the Unix Epoch)
     */
    public function getUnsubscriptionTime() : ?TokenUnsubscribe
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
        $serializers = array('unsubscriptionTime' => new ClassSerializer(TokenUnsubscribe::class));
        return $serializers;
    }
}