<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Model\CreateCallback;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
use Arimac\Sigfox\Validator\Rules\Child;
/**
 * Create a new callback for a given device type. SNR will be deprecated (see
 * [Newsletter](https://backend.sigfox.com/welcome/news) for details). To monitor radio link quality, please use the
 * [Link Quality Indicator (LQI)](https://support.sigfox.com/docs/link-quality:-general-knowledge) which is more
 * relevant than SNR in Sigfox network.
 */
class DeviceTypesIdCallbacksCreate extends Request
{
    /**
     * @var CreateCallback
     */
    protected ?CreateCallback $callback = null;
    /**
     * @internal
     */
    protected ?string $body = 'callback';
    /**
     * Setter for callback
     *
     * @param CreateCallback $callback
     *
     * @return self To use in method chains
     */
    public function setCallback(?CreateCallback $callback) : self
    {
        $this->callback = $callback;
        return $this;
    }
    /**
     * Getter for callback
     *
     * @internal
     *
     * @return CreateCallback
     */
    public function getCallback() : ?CreateCallback
    {
        return $this->callback;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('callback' => new ClassSerializer(CreateCallback::class));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('callback' => array(new Required(), new Child()));
        return $rules;
    }
}