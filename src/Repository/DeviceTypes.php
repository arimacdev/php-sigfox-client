<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\DeviceTypesList;
use Arimac\Sigfox\Response\Generated\DeviceTypesListResponse;
use Arimac\Sigfox\Exception\SerializeException;
use Arimac\Sigfox\Exception\UnexpectedResponseException;
use Arimac\Sigfox\Exception\Response\BadRequestException;
use Arimac\Sigfox\Exception\Response\UnauthorizedException;
use Arimac\Sigfox\Exception\Response\ForbiddenException;
use Arimac\Sigfox\Exception\Response\NotFoundException;
use Arimac\Sigfox\Exception\Response\InternalServerException;
use Arimac\Sigfox\Model;
use Arimac\Sigfox\Response\Paginated\PaginatedResponse;
use Arimac\Sigfox\Model\DeviceType;
use Arimac\Sigfox\Response\Paginated\PaginateResponse;
use Arimac\Sigfox\Model\DeviceTypeCreate;
use Arimac\Sigfox\Request\DeviceTypesCreate;
use Arimac\Sigfox\Response\Generated\DeviceTypesCreateResponse;
class DeviceTypes
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
     * Retrieve a list of device types according to visibility permissions and request filters.
     *
     * @param DeviceTypesList $request The query and body parameters to pass
     *
     * @return PaginateResponse<DeviceType,DeviceTypesListResponse>
     *
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function list(?DeviceTypesList $request = null) : PaginateResponse
    {
        if (!isset($request)) {
            $request = new DeviceTypesList();
            $request->setLimit(100);
            $request->setOffset(0);
        }
        $errors = array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class);
        /** @var Model&PaginatedResponse **/
        $response = $this->client->call('get', '/device-types/', $request, DeviceTypesListResponse::class, $errors);
        return new PaginateResponse($this->client, $request, $response, $errors);
    }
    /**
     * Create a new device type
     *
     * @param DeviceTypeCreate|undefined $deviceType The device type to create
     *
     * @return string The new created device type's identifier
     *
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function create(?DeviceTypeCreate $deviceType) : ?string
    {
        $request = new DeviceTypesCreate();
        $request->setDeviceType($deviceType);
        /** @var DeviceTypesCreateResponse **/
        $response = $this->client->call('post', '/device-types/', $request, DeviceTypesCreateResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
        return $response->getId();
    }
    /**
     * Find by id
     *
     * @param string $id The Device Type identifier (hexademical format)
     *
     * @return DeviceTypesId
     */
    public function find(string $id) : DeviceTypesId
    {
        return new DeviceTypesId($this->client, $id);
    }
    /**
     * @return DeviceTypesBulk
     */
    public function bulk() : DeviceTypesBulk
    {
        return new DeviceTypesBulk($this->client);
    }
}