<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Helper;
use Arimac\Sigfox\Model\UpdateCallback;
use Arimac\Sigfox\Request\DeviceTypesIdCallbacksCallbackIdUpdate;
use Arimac\Sigfox\Exception\SerializeException;
use Arimac\Sigfox\Exception\UnexpectedResponseException;
use Arimac\Sigfox\Exception\Response\BadRequestException;
use Arimac\Sigfox\Exception\Response\UnauthorizedException;
use Arimac\Sigfox\Exception\Response\ForbiddenException;
use Arimac\Sigfox\Exception\Response\NotFoundException;
use Arimac\Sigfox\Exception\Response\InternalServerException;
use Arimac\Sigfox\Request\DeviceTypesIdCallbacksCallbackIdEnable;
use Arimac\Sigfox\Request\DeviceTypesIdCallbacksCallbackIdCallbacksNotDelivered;
use Arimac\Sigfox\Model\ErrorMessages;
use Arimac\Sigfox\Exception\DeserializeException;
class DeviceTypesIdCallbacksCallbackId
{
    /**
     * The HTTP client
     *
     * @internal
     */
    protected ?Client $client;
    /**
     * The Device Type identifier (hexademical format)
     *
     * @internal
     */
    protected ?string $id;
    /**
     * The Callback identifier
     *
     * @internal
     */
    protected ?string $callbackId;
    /**
     * Creating the repository
     *
     * @internal
     *
     * @param Client $client     The HTTP client
     * @param string $id         The Device Type identifier (hexademical format)
     * @param string $callbackId The Callback identifier
     */
    public function __construct(Client $client, string $id, string $callbackId)
    {
        $this->client = $client;
        $this->id = $id;
        $this->callbackId = $callbackId;
    }
    /**
     * Update a callback for a given device type SNR will be deprecated (see
     * [Newsletter](https://backend.sigfox.com/welcome/news) for details). To monitor radio link quality, please use
     * the [Link Quality Indicator (LQI)](https://support.sigfox.com/docs/link-quality:-general-knowledge) which is
     * more relevant than SNR in Sigfox network.
     *
     * @param UpdateCallback|null $callback The callback to update
     *
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function update(?UpdateCallback $callback) : void
    {
        $request = new DeviceTypesIdCallbacksCallbackIdUpdate();
        $request->setCallback($callback);
        $this->client->call('put', Helper::bindUrlParams('/device-types/{id}/callbacks/{callbackId}', $this->id, $this->callbackId), $request, null, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
    /**
     * Delete a callback for a given device type.
     *
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function delete() : void
    {
        $this->client->call('delete', Helper::bindUrlParams('/device-types/{id}/callbacks/{callbackId}', $this->id, $this->callbackId), null, null, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
    /**
     * Enable or disable a callback for a given device type.
     *
     * @param bool|null $enabled True to enable the callback, false to disable it
     *
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function enable(?bool $enabled) : void
    {
        $request = new DeviceTypesIdCallbacksCallbackIdEnable();
        $request->setEnabled($enabled);
        $this->client->call('put', Helper::bindUrlParams('/device-types/{id}/callbacks/{callbackId}/enable', $this->id, $this->callbackId), $request, null, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
    /**
     * Selects a downlink callback for a device type. The callback will be selected as the downlink one, the one that
     * was previously selected will no longer be used for downlink.
     *
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function setDownlink() : void
    {
        $this->client->call('put', Helper::bindUrlParams('/device-types/{id}/callbacks/{callbackId}/downlink', $this->id, $this->callbackId), null, null, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
    /**
     * Retrieve the last device message error associated with this callback.
     *
     * @param DeviceTypesIdCallbacksCallbackIdCallbacksNotDelivered $request The query and body parameters to pass
     *
     * @return ErrorMessages
     *
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     * @throws DeserializeException        If failed to deserialize response body as a response object.
     */
    public function callbacksNotDelivered(?DeviceTypesIdCallbacksCallbackIdCallbacksNotDelivered $request = null) : ErrorMessages
    {
        return $this->client->call('get', Helper::bindUrlParams('/device-types/{id}/callbacks/{callbackId}/callbacks-not-delivered', $this->id, $this->callbackId), $request, ErrorMessages::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
}