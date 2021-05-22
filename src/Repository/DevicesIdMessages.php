<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Helper;
use Arimac\Sigfox\Request\DevicesIdMessagesList;
use Arimac\Sigfox\Response\Generated\DevicesIdMessagesListResponse;
use Arimac\Sigfox\Exception\SerializeException;
use Arimac\Sigfox\Exception\UnexpectedResponseException;
use Arimac\Sigfox\Exception\Response\ResponseException;
use Arimac\Sigfox\Exception\ValidationException;
use Arimac\Sigfox\Exception\Response\BadRequestException;
use Arimac\Sigfox\Exception\Response\UnauthorizedException;
use Arimac\Sigfox\Exception\Response\ForbiddenException;
use Arimac\Sigfox\Exception\Response\NotFoundException;
use Arimac\Sigfox\Exception\Response\PreconditionFailedException;
use Arimac\Sigfox\Exception\Response\InternalServerException;
use Arimac\Sigfox\Model;
use Arimac\Sigfox\Response\Paginated\PaginatedResponse;
use Arimac\Sigfox\Model\DeviceMessage;
use Arimac\Sigfox\Response\Paginated\PaginateResponse;
use Arimac\Sigfox\Response\Generated\DevicesIdMessagesMetricResponse;
use Arimac\Sigfox\Exception\DeserializeException;
class DevicesIdMessages
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
     * Retrieve a list of messages for a given device according to request filters. SNR will be deprecated (see
     * [Newsletter](https://backend.sigfox.com/welcome/news) for details). To monitor radio link quality, please use
     * the [Link Quality Indicator (LQI)](https://support.sigfox.com/docs/link-quality:-general-knowledge) which is
     * more relevant than SNR in Sigfox network.
     *
     * @param DevicesIdMessagesList $request The query and body parameters to pass
     *
     * @psalm-return PaginateResponse<DeviceMessage,DevicesIdMessagesListResponse,E>
     *
     * @psalm-type E=BadRequestException | UnauthorizedException | ForbiddenException | NotFoundException |
     *             PreconditionFailedException | InternalServerException
     *
     * @return PaginateResponse<DeviceMessage,DevicesIdMessagesListResponse> First generic parameter is the item type
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
     * @throws PreconditionFailedException If server returned a HTTP 412 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function list(?DevicesIdMessagesList $request = null) : PaginateResponse
    {
        $errors = array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 412 => PreconditionFailedException::class, 500 => InternalServerException::class);
        /** @var Model&PaginatedResponse **/
        $response = $this->client->call('get', Helper::bindUrlParams('/devices/{id}/messages', $this->id), $request, DevicesIdMessagesListResponse::class, $errors);
        return new PaginateResponse($this->client, $response, $errors);
    }
    /**
     * Return the number of messages for a given device, for the last day, last week and last month.
     *
     * @return DevicesIdMessagesMetricResponse
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
    public function metric() : DevicesIdMessagesMetricResponse
    {
        return $this->client->call('get', Helper::bindUrlParams('/devices/{id}/messages/metric', $this->id), null, DevicesIdMessagesMetricResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
}