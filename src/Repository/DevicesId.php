<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Helper;
use Arimac\Sigfox\Request\DevicesIdGet;
use Arimac\Sigfox\Model\Device;
use Arimac\Sigfox\Exception\SerializeException;
use Arimac\Sigfox\Exception\UnexpectedResponseException;
use Arimac\Sigfox\Exception\Response\ResponseException;
use Arimac\Sigfox\Exception\ValidationException;
use Arimac\Sigfox\Exception\Response\BadRequestException;
use Arimac\Sigfox\Exception\Response\UnauthorizedException;
use Arimac\Sigfox\Exception\Response\ForbiddenException;
use Arimac\Sigfox\Exception\Response\NotFoundException;
use Arimac\Sigfox\Exception\Response\InternalServerException;
use Arimac\Sigfox\Exception\DeserializeException;
use Arimac\Sigfox\Model\DeviceUpdateJob;
use Arimac\Sigfox\Request\DevicesIdUpdate;
use Arimac\Sigfox\Request\DevicesIdCallbacksNotDelivered;
use Arimac\Sigfox\Response\Generated\DevicesIdCallbacksNotDeliveredResponse;
use Arimac\Sigfox\Model;
use Arimac\Sigfox\Response\Paginated\PaginatedResponse;
use Arimac\Sigfox\Model\DeviceErrorMessages;
use Arimac\Sigfox\Response\Paginated\PaginateResponse;
use Arimac\Sigfox\Request\DevicesIdProductCertificate;
use Arimac\Sigfox\Model\ProductCertificateWithPacResponse;
use Arimac\Sigfox\Request\DevicesIdLocations;
use Arimac\Sigfox\Response\Generated\DevicesIdLocationsResponse;
use Arimac\Sigfox\Model\DeviceLocation_2;
use Arimac\Sigfox\Model\TokenUnsubscribe;
use Arimac\Sigfox\Request\DevicesIdUnsubscribe;
class DevicesId
{
    /**
     * The HTTP client
     *
     * @internal
     */
    protected Client $client;
    /**
     * The Device identifier (hexadecimal format)
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
     * @param string $id     The Device identifier (hexadecimal format)
     */
    public function __construct(Client $client, string $id)
    {
        $this->client = $client;
        $this->id = $id;
    }
    /**
     * Retrieve information about a given device.
     *
     * @param DevicesIdGet|array|null $request The query and body parameters to pass
     *
     * @return Device
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
     * @throws DeserializeException        If failed to deserialize response body as a response object.
     */
    public function get($request = null) : Device
    {
        if (is_array($request)) {
            /** @var DevicesIdGet **/
            $request = DevicesIdGet::from($request);
        }
        return $this->client->call('get', Helper::bindUrlParams('/devices/{id}', $this->id), $request, Device::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
    /**
     * Update a given device.
     *
     * @param DeviceUpdateJob|array|null $device The device to update
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
    public function update($device) : void
    {
        if (is_array($device)) {
            /** @var DeviceUpdateJob **/
            $device = DeviceUpdateJob::from($device);
        }
        $request = new DevicesIdUpdate();
        $request->setDevice($device);
        $this->client->call('put', Helper::bindUrlParams('/devices/{id}', $this->id), $request, null, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
    /**
     * Delete a given device.
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
    public function delete() : void
    {
        $this->client->call('delete', Helper::bindUrlParams('/devices/{id}', $this->id), null, null, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
    /**
     * Retrieve a list of undelivered callbacks and errors for a given device, in reverse chronological order (most
     * recent message first). SNR will be deprecated (see [Newsletter](https://backend.sigfox.com/welcome/news) for
     * details). To monitor radio link quality, please use the [Link Quality Indicator
     * (LQI)](https://support.sigfox.com/docs/link-quality:-general-knowledge) which is more relevant than SNR in
     * Sigfox network.
     *
     * @param DevicesIdCallbacksNotDelivered|array|null $request The query and body parameters to pass
     *
     * @psalm-return PaginateResponse<DeviceErrorMessages,DevicesIdCallbacksNotDeliveredResponse,E>
     *
     * @psalm-type E=BadRequestException | UnauthorizedException | ForbiddenException | NotFoundException |
     *             InternalServerException
     *
     * @return PaginateResponse<DeviceErrorMessages,DevicesIdCallbacksNotDeliveredResponse> First generic parameter
     *                                                                                      is the item type and the
     *                                                                                      second type is the
     *                                                                                      original response type.
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
     * @throws DeserializeException        If failed to deserialize response body as a response object.
     */
    public function callbacksNotDelivered($request = null) : PaginateResponse
    {
        if (is_array($request)) {
            /** @var DevicesIdCallbacksNotDelivered **/
            $request = DevicesIdCallbacksNotDelivered::from($request);
        }
        $errors = array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class);
        /** @var Model&PaginatedResponse **/
        $response = $this->client->call('get', Helper::bindUrlParams('/devices/{id}/callbacks-not-delivered', $this->id), $request, DevicesIdCallbacksNotDeliveredResponse::class, $errors);
        return new PaginateResponse($this->client, $response, $errors);
    }
    /**
     * @return DevicesIdCertificate
     */
    public function certificate() : DevicesIdCertificate
    {
        return new DevicesIdCertificate($this->client, $this->id);
    }
    /**
     * Retrieve the product certificate associated with a given device ID and PAC, when the device has not already
     * been created on the portal, only in CRA
     *
     * @param string|null $pac The device's PAC (hexadecimal format)
     *
     * @return ProductCertificateWithPacResponse
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
     * @throws DeserializeException        If failed to deserialize response body as a response object.
     */
    public function productCertificate($pac) : ProductCertificateWithPacResponse
    {
        $request = new DevicesIdProductCertificate();
        $request->setPac($pac);
        return $this->client->call('get', Helper::bindUrlParams('/devices/{id}/product-certificate', $this->id), $request, ProductCertificateWithPacResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
    /**
     * @return DevicesIdConsumption
     */
    public function consumption() : DevicesIdConsumption
    {
        return new DevicesIdConsumption($this->client, $this->id);
    }
    /**
     * Disable sequence number check for the next message.
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
    public function disengage() : void
    {
        $this->client->call('post', Helper::bindUrlParams('/devices/{id}/disengage', $this->id), null, null, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
    /**
     * @return DevicesIdMessages
     */
    public function messages() : DevicesIdMessages
    {
        return new DevicesIdMessages($this->client, $this->id);
    }
    /**
     * Retrieve a list of location data of a device according to request filters.
     *
     * @param DevicesIdLocations|array|null $request The query and body parameters to pass
     *
     * @psalm-return PaginateResponse<DeviceLocation_2,DevicesIdLocationsResponse,E>
     *
     * @psalm-type E=BadRequestException | UnauthorizedException | ForbiddenException | NotFoundException |
     *             InternalServerException
     *
     * @return PaginateResponse<DeviceLocation_2,DevicesIdLocationsResponse> First generic parameter is the item type
     *                                                                       and the second type is the original
     *                                                                       response type.
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
     * @throws DeserializeException        If failed to deserialize response body as a response object.
     */
    public function locations($request = null) : PaginateResponse
    {
        if (is_array($request)) {
            /** @var DevicesIdLocations **/
            $request = DevicesIdLocations::from($request);
        }
        $errors = array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class);
        /** @var Model&PaginatedResponse **/
        $response = $this->client->call('get', Helper::bindUrlParams('/devices/{id}/locations', $this->id), $request, DevicesIdLocationsResponse::class, $errors);
        return new PaginateResponse($this->client, $response, $errors);
    }
    /**
     * Set an unsubscription date for the device's token.
     *
     * @param TokenUnsubscribe|array|null $unsubscriptionTime the unsubscription time (in milliseconds since the Unix
     *                                                        Epoch)
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
    public function unsubscribe($unsubscriptionTime) : void
    {
        if (is_array($unsubscriptionTime)) {
            /** @var TokenUnsubscribe **/
            $unsubscriptionTime = TokenUnsubscribe::from($unsubscriptionTime);
        }
        $request = new DevicesIdUnsubscribe();
        $request->setUnsubscriptionTime($unsubscriptionTime);
        $this->client->call('put', Helper::bindUrlParams('/devices/{id}/unsubscribe', $this->id), $request, null, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
}