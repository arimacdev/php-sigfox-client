<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Helper;
use Arimac\Sigfox\Request\ContractInfosIdGet;
use Arimac\Sigfox\Model\ContractInfo;
use Arimac\Sigfox\Exception\DeserializeException;
use Arimac\Sigfox\Exception\SerializeException;
use Arimac\Sigfox\Exception\UnexpectedResponseException;
use Arimac\Sigfox\Exception\Response\BadRequestException;
use Arimac\Sigfox\Exception\Response\UnauthorizedException;
use Arimac\Sigfox\Exception\Response\ForbiddenException;
use Arimac\Sigfox\Exception\Response\NotFoundException;
use Arimac\Sigfox\Exception\Response\InternalServerException;
use Arimac\Sigfox\Response\Generated\ContractInfosIdBulkRestartResponse;
use Arimac\Sigfox\Request\ContractInfosIdDevices;
use Arimac\Sigfox\Response\Generated\ContractInfosIdDevicesResponse;
use Arimac\Sigfox\Exception\Response\MethodNotAllowedException;
class ContractInfosId
{
    /**
     * The HTTP client
     *
     * @internal
     */
    protected ?Client $client;
    /**
     * The Contract identifier
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
     * @param string $id     The Contract identifier
     */
    public function __construct(Client $client, string $id)
    {
        $this->client = $client;
        $this->id = $id;
    }
    /**
     * Retrieve information about a given contract.
     *
     * @param ContractInfosIdGet $request The query and body parameters to pass
     *
     * @return ContractInfo
     *
     * @throws DeserializeException        If failed to deserialize response body as a response object.
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function get(?ContractInfosIdGet $request = null) : ContractInfo
    {
        return $this->client->call('get', Helper::bindUrlParams('/contract-infos/{id}', $this->id), $request, ContractInfo::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
    /**
     * Create an async job to restart the devices associated to a contract.
     *
     * @return ContractInfosIdBulkRestartResponse
     *
     * @throws DeserializeException        If failed to deserialize response body as a response object.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function bulkRestart() : ContractInfosIdBulkRestartResponse
    {
        return $this->client->call('post', Helper::bindUrlParams('/contract-infos/{id}/bulk/restart', $this->id), null, ContractInfosIdBulkRestartResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
    /**
     * Retrieve a list of devices according to visibility permissions and request filters.
     *
     * @param ContractInfosIdDevices $request The query and body parameters to pass
     *
     * @return ContractInfosIdDevicesResponse
     *
     * @throws DeserializeException        If failed to deserialize response body as a response object.
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws MethodNotAllowedException   If server returned a HTTP 405 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function devices(?ContractInfosIdDevices $request = null) : ContractInfosIdDevicesResponse
    {
        return $this->client->call('get', Helper::bindUrlParams('/contract-infos/{id}/devices', $this->id), $request, ContractInfosIdDevicesResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 405 => MethodNotAllowedException::class, 500 => InternalServerException::class));
    }
}