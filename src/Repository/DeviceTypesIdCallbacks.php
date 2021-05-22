<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Helper;
use Arimac\Sigfox\Response\Generated\DeviceTypesIdCallbacksListResponse;
use Arimac\Sigfox\Exception\SerializeException;
use Arimac\Sigfox\Exception\UnexpectedResponseException;
use Arimac\Sigfox\Exception\Response\ResponseException;
use Arimac\Sigfox\Exception\ValidationException;
use Arimac\Sigfox\Exception\Response\BadRequestException;
use Arimac\Sigfox\Exception\Response\UnauthorizedException;
use Arimac\Sigfox\Exception\Response\ForbiddenException;
use Arimac\Sigfox\Exception\Response\NotFoundException;
use Arimac\Sigfox\Exception\Response\InternalServerException;
use Arimac\Sigfox\Model\Callback;
use Arimac\Sigfox\Model\CreateCallback;
use Arimac\Sigfox\Request\DeviceTypesIdCallbacksCreate;
use Arimac\Sigfox\Response\Generated\DeviceTypesIdCallbacksCreateResponse;
class DeviceTypesIdCallbacks
{
    /**
     * The HTTP client
     *
     * @internal
     */
    protected Client $client;
    /**
     * The Device Type identifier (hexademical format)
     *
     * @internal
     */
    protected string $id;
    /**
     * Creating the repository
     *
     * @internal
     *
     * @param Client $client The HTTP client
     * @param string $id     The Device Type identifier (hexademical format)
     */
    public function __construct(Client $client, string $id)
    {
        $this->client = $client;
        $this->id = $id;
    }
    /**
     * Retrieve a list of callbacks for a given device type according to visibility permissions and request filters.
     *
     * @return Callback[]
     *
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws ResponseException           If server returned any expected HTTP error
     * @throws ValidationException         If request could not be validated according to pre validation rules.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function list() : ?array
    {
        /** @var DeviceTypesIdCallbacksListResponse **/
        $response = $this->client->call('get', Helper::bindUrlParams('/device-types/{id}/callbacks', $this->id), null, DeviceTypesIdCallbacksListResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
        return $response->getData();
    }
    /**
     * Create a new callback for a given device type. SNR will be deprecated (see
     * [Newsletter](https://backend.sigfox.com/welcome/news) for details). To monitor radio link quality, please use
     * the [Link Quality Indicator (LQI)](https://support.sigfox.com/docs/link-quality:-general-knowledge) which is
     * more relevant than SNR in Sigfox network.
     *
     * @param CreateCallback|null $callback
     *
     * @return string The callback's identifier
     *
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws ResponseException           If server returned any expected HTTP error
     * @throws ValidationException         If request could not be validated according to pre validation rules.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function create(?CreateCallback $callback) : ?string
    {
        $request = new DeviceTypesIdCallbacksCreate();
        $request->setCallback($callback);
        /** @var DeviceTypesIdCallbacksCreateResponse **/
        $response = $this->client->call('post', Helper::bindUrlParams('/device-types/{id}/callbacks', $this->id), $request, DeviceTypesIdCallbacksCreateResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
        return $response->getId();
    }
    /**
     * Find by callbackId
     *
     * @param string $callbackId The Callback identifier
     *
     * @return DeviceTypesIdCallbacksCallbackId
     */
    public function find(string $callbackId) : DeviceTypesIdCallbacksCallbackId
    {
        return new DeviceTypesIdCallbacksCallbackId($this->client, $this->id, $callbackId);
    }
}