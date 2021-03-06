<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\DevicesList;
use Arimac\Sigfox\Response\Generated\DevicesListResponse;
use Arimac\Sigfox\Exception\SerializeException;
use Arimac\Sigfox\Exception\UnexpectedResponseException;
use Arimac\Sigfox\Exception\Response\ResponseException;
use Arimac\Sigfox\Exception\ValidationException;
use Arimac\Sigfox\Exception\Response\BadRequestException;
use Arimac\Sigfox\Exception\Response\UnauthorizedException;
use Arimac\Sigfox\Exception\Response\ForbiddenException;
use Arimac\Sigfox\Exception\Response\InternalServerException;
use Arimac\Sigfox\Exception\DeserializeException;
use Arimac\Sigfox\Model;
use Arimac\Sigfox\Response\Paginated\PaginatedResponse;
use Arimac\Sigfox\Model\Device;
use Arimac\Sigfox\Response\Paginated\PaginateResponse;
use Arimac\Sigfox\Model\DeviceCreationJob;
use Arimac\Sigfox\Request\DevicesCreate;
use Arimac\Sigfox\Response\Generated\DevicesCreateResponse;
use Arimac\Sigfox\Exception\Response\ConflictException;
class Devices
{
    /**
     * The HTTP client
     *
     * @internal
     */
    protected Client $client;
    /**
     * Creating the repository
     *
     * @internal
     *
     * @param Client $client The HTTP client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }
    /**
     * Retrieve a list of devices according to visibility permissions and request filters.
     *
     * @param DevicesList|array|null $request The query and body parameters to pass
     *
     * @psalm-return PaginateResponse<Device,DevicesListResponse,E>
     *
     * @psalm-type E=BadRequestException | UnauthorizedException | ForbiddenException | InternalServerException
     *
     * @return PaginateResponse<Device,DevicesListResponse> First generic parameter is the item type and the second
     *                                                      type is the original response type.
     *
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws ResponseException           If server returned any expected HTTP error
     * @throws ValidationException         If request could not be validated according to pre validation rules.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     * @throws DeserializeException        If failed to deserialize response body as a response object.
     */
    public function list($request = null) : PaginateResponse
    {
        if (is_array($request)) {
            /** @var DevicesList **/
            $request = DevicesList::from($request);
        }
        $errors = array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 500 => InternalServerException::class);
        /** @var Model&PaginatedResponse **/
        $response = $this->client->call('get', '/devices/', $request, DevicesListResponse::class, $errors);
        return new PaginateResponse($this->client, $response, $errors);
    }
    /**
     * Create a new device.
     *
     * @param DeviceCreationJob|array|null $device The device to create
     *
     * @return string The device's identifier (hexadecimal format)
     *
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws ResponseException           If server returned any expected HTTP error
     * @throws ValidationException         If request could not be validated according to pre validation rules.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws ConflictException           If server returned a HTTP 409 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     * @throws DeserializeException        If failed to deserialize response body as a response object.
     */
    public function create($device) : ?string
    {
        if (is_array($device)) {
            /** @var DeviceCreationJob **/
            $device = DeviceCreationJob::from($device);
        }
        $request = new DevicesCreate();
        $request->setDevice($device);
        /** @var DevicesCreateResponse **/
        $response = $this->client->call('post', '/devices/', $request, DevicesCreateResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 409 => ConflictException::class, 500 => InternalServerException::class));
        return $response->getId();
    }
    /**
     * Find by id
     *
     * @param string $id The Device identifier (hexadecimal format)
     *
     * @return DevicesId
     */
    public function find(string $id) : DevicesId
    {
        return new DevicesId($this->client, $id);
    }
    /**
     * @return DevicesBulk
     */
    public function bulk() : DevicesBulk
    {
        return new DevicesBulk($this->client);
    }
}