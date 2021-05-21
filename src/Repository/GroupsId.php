<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Helper;
use Arimac\Sigfox\Request\GroupsIdGet;
use Arimac\Sigfox\Model\Group;
use Arimac\Sigfox\Exception\SerializeException;
use Arimac\Sigfox\Exception\UnexpectedResponseException;
use Arimac\Sigfox\Exception\Response\BadRequestException;
use Arimac\Sigfox\Exception\Response\UnauthorizedException;
use Arimac\Sigfox\Exception\Response\ForbiddenException;
use Arimac\Sigfox\Exception\Response\NotFoundException;
use Arimac\Sigfox\Exception\Response\InternalServerException;
use Arimac\Sigfox\Exception\DeserializeException;
use Arimac\Sigfox\Model\CommonGroupUpdate;
use Arimac\Sigfox\Request\GroupsIdUpdate;
use Arimac\Sigfox\Request\GroupsIdCallbacksNotDelivered;
use Arimac\Sigfox\Response\Generated\GroupsIdCallbacksNotDeliveredResponse;
use Arimac\Sigfox\Model;
use Arimac\Sigfox\Response\Paginated\PaginatedResponse;
use Arimac\Sigfox\Model\GroupErrorMessages;
use Arimac\Sigfox\Response\Paginated\PaginateResponse;
use Arimac\Sigfox\Request\GroupsIdGeolocationPayloads;
use Arimac\Sigfox\Response\Generated\GroupsIdGeolocationPayloadsResponse;
use Arimac\Sigfox\Model\BaseGeolocation;
class GroupsId
{
    /**
     * The HTTP client
     *
     * @internal
     */
    protected ?Client $client;
    /**
     * The Group identifier
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
     * @param string $id     The Group identifier
     */
    public function __construct(Client $client, string $id)
    {
        $this->client = $client;
        $this->id = $id;
    }
    /**
     * Retrieve information about a given group.
     *
     * @param GroupsIdGet $request The query and body parameters to pass
     *
     * @return Group
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
    public function get(?GroupsIdGet $request = null) : Group
    {
        return $this->client->call('get', Helper::bindUrlParams('/groups/{id}', $this->id), $request, Group::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
    /**
     * Update a given group.
     *
     * @param CommonGroupUpdate|null $group The group to update
     *
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function update(?CommonGroupUpdate $group) : void
    {
        $request = new GroupsIdUpdate();
        $request->setGroup($group);
        $this->client->call('put', Helper::bindUrlParams('/groups/{id}', $this->id), $request, null, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
    /**
     * Delete a given group.
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
        $this->client->call('delete', Helper::bindUrlParams('/groups/{id}', $this->id), null, null, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
    /**
     * Retrieve a list of undelivered callbacks and errors for a given group, in reverse chronological order (most
     * recent message first). SNR will be deprecated (see [Newsletter](https://backend.sigfox.com/welcome/news) for
     * details). To monitor radio link quality, please use the [Link Quality Indicator
     * (LQI)](https://support.sigfox.com/docs/link-quality:-general-knowledge) which is more relevant than SNR in
     * Sigfox network.
     *
     * @param GroupsIdCallbacksNotDelivered $request The query and body parameters to pass
     *
     * @return PaginateResponse<GroupErrorMessages,GroupsIdCallbacksNotDeliveredResponse>
     *
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function callbacksNotDelivered(?GroupsIdCallbacksNotDelivered $request = null) : PaginateResponse
    {
        $errors = array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class);
        /** @var Model&PaginatedResponse **/
        $response = $this->client->call('get', Helper::bindUrlParams('/groups/{id}/callbacks-not-delivered', $this->id), $request, GroupsIdCallbacksNotDeliveredResponse::class, $errors);
        return new PaginateResponse($this->client, $response, $errors);
    }
    /**
     * Retrieve a list of geolocation payload according to request filters.
     *
     * @param GroupsIdGeolocationPayloads $request The query and body parameters to pass
     *
     * @return PaginateResponse<BaseGeolocation,GroupsIdGeolocationPayloadsResponse>
     *
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function geolocationPayloads(?GroupsIdGeolocationPayloads $request = null) : PaginateResponse
    {
        $errors = array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class);
        /** @var Model&PaginatedResponse **/
        $response = $this->client->call('get', Helper::bindUrlParams('/groups/{id}/geoloc-payloads', $this->id), $request, GroupsIdGeolocationPayloadsResponse::class, $errors);
        return new PaginateResponse($this->client, $response, $errors);
    }
}