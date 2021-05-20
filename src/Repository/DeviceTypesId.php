<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Helper;
use Arimac\Sigfox\Request\DeviceTypesIdGet;
use Arimac\Sigfox\Model\DeviceType;
use Arimac\Sigfox\Exception\SerializeException;
use Arimac\Sigfox\Exception\UnexpectedResponseException;
use Arimac\Sigfox\Exception\Response\BadRequestException;
use Arimac\Sigfox\Exception\Response\UnauthorizedException;
use Arimac\Sigfox\Exception\Response\ForbiddenException;
use Arimac\Sigfox\Exception\Response\NotFoundException;
use Arimac\Sigfox\Exception\Response\InternalServerException;
use Arimac\Sigfox\Exception\DeserializeException;
use Arimac\Sigfox\Model\DeviceTypeUpdate;
use Arimac\Sigfox\Request\DeviceTypesIdUpdate;
use Arimac\Sigfox\Request\DeviceTypesIdMessages;
use Arimac\Sigfox\Response\Generated\DeviceTypesIdMessagesResponse;
use Arimac\Sigfox\Model;
use Arimac\Sigfox\Response\Paginated\PaginatedResponse;
use Arimac\Sigfox\Model\DeviceMessage;
use Arimac\Sigfox\Response\Paginated\PaginateResponse;
use Arimac\Sigfox\Request\DeviceTypesIdCallbacksNotDelivered;
use Arimac\Sigfox\Response\Generated\DeviceTypesIdCallbacksNotDeliveredResponse;
use Arimac\Sigfox\Model\ErrorMessages;
use Arimac\Sigfox\Response\Generated\DeviceTypesIdBulkRestartResponse;
class DeviceTypesId
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
     * Retrieve information about a device type.
     *
     * @param DeviceTypesIdGet $request The query and body parameters to pass
     *
     * @return DeviceType
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
    public function get(?DeviceTypesIdGet $request = null) : DeviceType
    {
        return $this->client->call('get', Helper::bindUrlParams('/device-types/{id}', $this->id), $request, DeviceType::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
    /**
     * Update a given device type.
     *
     * @param DeviceTypeUpdate|undefined $deviceType The device type to update
     *
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function update(?DeviceTypeUpdate $deviceType) : void
    {
        $request = new DeviceTypesIdUpdate();
        $request->setDeviceType($deviceType);
        $this->client->call('put', Helper::bindUrlParams('/device-types/{id}', $this->id), $request, null, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
    /**
     * Delete a given device type.
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
        $this->client->call('delete', Helper::bindUrlParams('/device-types/{id}', $this->id), null, null, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
    /**
     * Retrieve a list of messages for a given device types with a 3-day history.
     *
     * @param DeviceTypesIdMessages $request The query and body parameters to pass
     *
     * @return PaginateResponse<DeviceMessage,DeviceTypesIdMessagesResponse>
     *
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function messages(?DeviceTypesIdMessages $request = null) : PaginateResponse
    {
        if (!isset($request)) {
            $request = new DeviceTypesIdMessages();
            $request->setLimit(100);
            $request->setOffset(0);
        }
        $errors = array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class);
        /** @var Model&PaginatedResponse **/
        $response = $this->client->call('get', Helper::bindUrlParams('/device-types/{id}/messages', $this->id), $request, DeviceTypesIdMessagesResponse::class, $errors);
        return new PaginateResponse($this->client, $request, $response, $errors);
    }
    /**
     * Retrieve a list of undelivered callback messages for a given device types.
     *
     * @param DeviceTypesIdCallbacksNotDelivered $request The query and body parameters to pass
     *
     * @return PaginateResponse<ErrorMessages,DeviceTypesIdCallbacksNotDeliveredResponse>
     *
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function callbacksNotDelivered(?DeviceTypesIdCallbacksNotDelivered $request = null) : PaginateResponse
    {
        if (!isset($request)) {
            $request = new DeviceTypesIdCallbacksNotDelivered();
            $request->setLimit(100);
            $request->setOffset(0);
        }
        $errors = array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class);
        /** @var Model&PaginatedResponse **/
        $response = $this->client->call('get', Helper::bindUrlParams('/device-types/{id}/callbacks-not-delivered', $this->id), $request, DeviceTypesIdCallbacksNotDeliveredResponse::class, $errors);
        return new PaginateResponse($this->client, $request, $response, $errors);
    }
    /**
     * @return DeviceTypesIdCallbacks
     */
    public function callbacks() : DeviceTypesIdCallbacks
    {
        return new DeviceTypesIdCallbacks($this->client, $this->id);
    }
    /**
     * Disable the sequence number check for the next message of each device of a device type.
     *
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function disengage() : void
    {
        $this->client->call('put', Helper::bindUrlParams('/device-types/{id}/disengage', $this->id), null, null, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
    /**
     * Restart the devices of a device type with a asynchronous job.
     *
     * @return string jobId so that the customer is able to request job status
     *
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function bulkRestart() : ?string
    {
        /** @var DeviceTypesIdBulkRestartResponse **/
        $response = $this->client->call('post', Helper::bindUrlParams('/device-types/{id}/bulk/restart', $this->id), null, DeviceTypesIdBulkRestartResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
        return $response->getJobId();
    }
}