<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Helper;
use Arimac\Sigfox\Request\ApiUsersIdGet;
use Arimac\Sigfox\Model\ApiUser;
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
use Arimac\Sigfox\Model\ApiUserEdition;
use Arimac\Sigfox\Request\ApiUsersIdUpdate;
use Arimac\Sigfox\Response\Generated\ApiUsersIdRenewCredentialResponse;
use Arimac\Sigfox\Exception\Response\MethodNotAllowedException;
class ApiUsersId
{
    /**
     * The HTTP client
     *
     * @internal
     */
    protected Client $client;
    /**
     * The API user identifier
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
     * @param string $id     The API user identifier
     */
    public function __construct(Client $client, string $id)
    {
        $this->client = $client;
        $this->id = $id;
    }
    /**
     * Retrieve information about a given API user.
     *
     * @param ApiUsersIdGet $request The query and body parameters to pass
     *
     * @return ApiUser
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
    public function get(?ApiUsersIdGet $request = null) : ApiUser
    {
        return $this->client->call('get', Helper::bindUrlParams('/api-users/{id}', $this->id), $request, ApiUser::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
    /**
     * Update information about a given API user.
     *
     * @param ApiUserEdition|null $apiUser The information to update
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
    public function update(?ApiUserEdition $apiUser) : void
    {
        $request = new ApiUsersIdUpdate();
        $request->setApiUser($apiUser);
        $this->client->call('put', Helper::bindUrlParams('/api-users/{id}', $this->id), $request, null, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
    /**
     * Delete a given API user.
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
        $this->client->call('delete', Helper::bindUrlParams('/api-users/{id}', $this->id), null, null, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
    /**
     * @return ApiUsersIdProfiles
     */
    public function profiles() : ApiUsersIdProfiles
    {
        return new ApiUsersIdProfiles($this->client, $this->id);
    }
    /**
     * Generate a new password for a given API user.
     *
     * @return string The new API user's acces token (password)
     *
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws ResponseException           If server returned any expected HTTP error
     * @throws ValidationException         If request could not be validated according to pre validation rules.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws MethodNotAllowedException   If server returned a HTTP 405 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function renewCredential() : ?string
    {
        /** @var ApiUsersIdRenewCredentialResponse **/
        $response = $this->client->call('put', Helper::bindUrlParams('/api-users/{id}/renew-credential', $this->id), null, ApiUsersIdRenewCredentialResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 405 => MethodNotAllowedException::class, 500 => InternalServerException::class));
        return $response->getAccessToken();
    }
}