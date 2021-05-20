<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\DevicesList;
use Arimac\Sigfox\Response\Generated\DevicesListResponse;
use Arimac\Sigfox\Exception\SerializeException;
use Arimac\Sigfox\Exception\UnexpectedResponseException;
use Arimac\Sigfox\Exception\Response\BadRequestException;
use Arimac\Sigfox\Exception\Response\UnauthorizedException;
use Arimac\Sigfox\Exception\Response\ForbiddenException;
use Arimac\Sigfox\Exception\Response\InternalServerException;
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
    protected ?Client $client;
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
     * @param DevicesList $request The query and body parameters to pass
     *
     * @return PaginateResponse<Device,DevicesListResponse>
     *
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function list(?DevicesList $request = null) : PaginateResponse
    {
        if (!isset($request)) {
            $request = new DevicesList();
            $request->setLimit(100);
            $request->setOffset(0);
        }
        $errors = array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 500 => InternalServerException::class);
        /** @var Model&PaginatedResponse **/
        $response = $this->client->call('get', '/devices/', $request, DevicesListResponse::class, $errors);
        return new PaginateResponse($this->client, $request, $response, $errors);
    }
    /**
     * Create a new device.
     *
     * @param DeviceCreationJob|undefined $device The device to create
     *
     * @return string The device's identifier (hexadecimal format)
     *
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws ConflictException           If server returned a HTTP 409 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function create(?DeviceCreationJob $device) : ?string
    {
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