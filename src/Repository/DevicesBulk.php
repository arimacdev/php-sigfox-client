<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Model\AsynchronousDeviceCreationJob;
use Arimac\Sigfox\Request\DevicesBulkCreate;
use Arimac\Sigfox\Response\Generated\DevicesBulkCreateResponse;
use Arimac\Sigfox\Exception\SerializeException;
use Arimac\Sigfox\Exception\UnexpectedResponseException;
use Arimac\Sigfox\Exception\Response\ResponseException;
use Arimac\Sigfox\Exception\ValidationException;
use Arimac\Sigfox\Exception\Response\BadRequestException;
use Arimac\Sigfox\Exception\Response\UnauthorizedException;
use Arimac\Sigfox\Exception\Response\ForbiddenException;
use Arimac\Sigfox\Exception\Response\ConflictException;
use Arimac\Sigfox\Exception\Response\InternalServerException;
use Arimac\Sigfox\Exception\DeserializeException;
use Arimac\Sigfox\Helper;
use Arimac\Sigfox\Model\RegistrationJobStatus;
use Arimac\Sigfox\Response\Async\AsyncResponse;
use Arimac\Sigfox\Response\Async\Model\DevicesBulkCreateAsync;
use Arimac\Sigfox\Request\DevicesBulkUpdate;
use Arimac\Sigfox\Response\Generated\DevicesBulkUpdateResponse;
use Arimac\Sigfox\Response\Async\Model\DevicesBulkUpdateAsync;
use Arimac\Sigfox\Model\AsynchronousDeviceTransferJob;
use Arimac\Sigfox\Request\DevicesBulkTransfer;
use Arimac\Sigfox\Response\Generated\DevicesBulkTransferResponse;
use Arimac\Sigfox\Response\Async\Model\DevicesBulkTransferAsync;
use Arimac\Sigfox\Model\AsynchronousDeviceReplacementJob;
use Arimac\Sigfox\Request\DevicesBulkReplace;
use Arimac\Sigfox\Model\ReplaceResponse;
use Arimac\Sigfox\Exception\Response\NotFoundException;
use Arimac\Sigfox\Request\DevicesBulkRestart;
use Arimac\Sigfox\Response\Generated\DevicesBulkRestartResponse;
use Arimac\Sigfox\Model\ActionJob;
use Arimac\Sigfox\Response\Async\Model\DevicesBulkRestartAsync;
use Arimac\Sigfox\Request\DevicesBulkSuspend;
use Arimac\Sigfox\Response\Generated\DevicesBulkSuspendResponse;
use Arimac\Sigfox\Response\Async\Model\DevicesBulkSuspendAsync;
use Arimac\Sigfox\Request\DevicesBulkResume;
use Arimac\Sigfox\Response\Generated\DevicesBulkResumeResponse;
use Arimac\Sigfox\Response\Async\Model\DevicesBulkResumeAsync;
use Arimac\Sigfox\Request\DevicesBulkUnsubscribe;
use Arimac\Sigfox\Response\Generated\DevicesBulkUnsubscribeResponse;
use Arimac\Sigfox\Response\Async\Model\DevicesBulkUnsubscribeAsync;
class DevicesBulk
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
     * Create multiple new devices with asynchronous job
     *
     * @param AsynchronousDeviceCreationJob|array|null $devices The devices to create
     *
     * @return AsyncResponse<DevicesBulkCreateResponse, RegistrationJobStatus>
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
    public function create($devices) : AsyncResponse
    {
        if (is_array($devices)) {
            /** @var AsynchronousDeviceCreationJob **/
            $devices = AsynchronousDeviceCreationJob::from($devices);
        }
        $request = new DevicesBulkCreate();
        $request->setDevices($devices);
        /** @var DevicesBulkCreateResponse **/
        $response = $this->client->call('post', '/devices/bulk', $request, DevicesBulkCreateResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 409 => ConflictException::class, 500 => InternalServerException::class));
        $jobId = $response->getJobId();
        if (is_null($jobId)) {
            throw new DeserializeException(array('string'), 'null');
        }
        return new AsyncResponse($this->client, new DevicesBulkCreateAsync(array($jobId)), $response);
    }
    /**
     * Update or edit multiple devices with asynchronous job.
     *
     * @param DevicesBulkUpdate|array|null $request The query and body parameters to pass
     *
     * @return AsyncResponse<DevicesBulkUpdateResponse, RegistrationJobStatus>
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
    public function update($request = null) : AsyncResponse
    {
        if (is_array($request)) {
            /** @var DevicesBulkUpdate **/
            $request = DevicesBulkUpdate::from($request);
        }
        /** @var DevicesBulkUpdateResponse **/
        $response = $this->client->call('put', '/devices/bulk', $request, DevicesBulkUpdateResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 409 => ConflictException::class, 500 => InternalServerException::class));
        $jobId = $response->getJobId();
        if (is_null($jobId)) {
            throw new DeserializeException(array('string'), 'null');
        }
        return new AsyncResponse($this->client, new DevicesBulkUpdateAsync(array($jobId)), $response);
    }
    /**
     * Transfer multiple devices to another device type with asynchronous job
     *
     * @param AsynchronousDeviceTransferJob|array|null $devices The devices to move
     *
     * @return AsyncResponse<DevicesBulkTransferResponse, RegistrationJobStatus>
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
    public function transfer($devices) : AsyncResponse
    {
        if (is_array($devices)) {
            /** @var AsynchronousDeviceTransferJob **/
            $devices = AsynchronousDeviceTransferJob::from($devices);
        }
        $request = new DevicesBulkTransfer();
        $request->setDevices($devices);
        /** @var DevicesBulkTransferResponse **/
        $response = $this->client->call('post', '/devices/bulk/transfer', $request, DevicesBulkTransferResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 409 => ConflictException::class, 500 => InternalServerException::class));
        $jobId = $response->getJobId();
        if (is_null($jobId)) {
            throw new DeserializeException(array('string'), 'null');
        }
        return new AsyncResponse($this->client, new DevicesBulkTransferAsync(array($jobId)), $response);
    }
    /**
     * Replace multiple devices (moving tokens from one device to another) with synchronous job
     *
     * @param AsynchronousDeviceReplacementJob|array|null $devicePairs Pairs of source and target devices
     *
     * @return ReplaceResponse
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
    public function replace($devicePairs) : ReplaceResponse
    {
        if (is_array($devicePairs)) {
            /** @var AsynchronousDeviceReplacementJob **/
            $devicePairs = AsynchronousDeviceReplacementJob::from($devicePairs);
        }
        $request = new DevicesBulkReplace();
        $request->setDevicePairs($devicePairs);
        return $this->client->call('post', '/devices/bulk/replace', $request, ReplaceResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
    /**
     * Restart multiple devices with asynchronous job.
     *
     * @param DevicesBulkRestart|array|null $request The query and body parameters to pass
     *
     * @return AsyncResponse<DevicesBulkRestartResponse, ActionJob>
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
    public function restart($request = null) : AsyncResponse
    {
        if (is_array($request)) {
            /** @var DevicesBulkRestart **/
            $request = DevicesBulkRestart::from($request);
        }
        /** @var DevicesBulkRestartResponse **/
        $response = $this->client->call('post', '/devices/bulk/restart', $request, DevicesBulkRestartResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
        $jobId = $response->getJobId();
        if (is_null($jobId)) {
            throw new DeserializeException(array('string'), 'null');
        }
        return new AsyncResponse($this->client, new DevicesBulkRestartAsync(array($jobId)), $response);
    }
    /**
     * Suspend multiple devices with asynchronous job
     *
     * @param DevicesBulkSuspend|array|null $request The query and body parameters to pass
     *
     * @return AsyncResponse<DevicesBulkSuspendResponse, ActionJob>
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
    public function suspend($request = null) : AsyncResponse
    {
        if (is_array($request)) {
            /** @var DevicesBulkSuspend **/
            $request = DevicesBulkSuspend::from($request);
        }
        /** @var DevicesBulkSuspendResponse **/
        $response = $this->client->call('post', '/devices/bulk/suspend', $request, DevicesBulkSuspendResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
        $jobId = $response->getJobId();
        if (is_null($jobId)) {
            throw new DeserializeException(array('string'), 'null');
        }
        return new AsyncResponse($this->client, new DevicesBulkSuspendAsync(array($jobId)), $response);
    }
    /**
     * Resume multiple devices with asynchronous job.
     *
     * @param DevicesBulkResume|array|null $request The query and body parameters to pass
     *
     * @return AsyncResponse<DevicesBulkResumeResponse, ActionJob>
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
    public function resume($request = null) : AsyncResponse
    {
        if (is_array($request)) {
            /** @var DevicesBulkResume **/
            $request = DevicesBulkResume::from($request);
        }
        /** @var DevicesBulkResumeResponse **/
        $response = $this->client->call('post', '/devices/bulk/resume', $request, DevicesBulkResumeResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
        $jobId = $response->getJobId();
        if (is_null($jobId)) {
            throw new DeserializeException(array('string'), 'null');
        }
        return new AsyncResponse($this->client, new DevicesBulkResumeAsync(array($jobId)), $response);
    }
    /**
     * Unsubscribe multiple devices with asynchronous job.
     *
     * @param DevicesBulkUnsubscribe|array|null $request The query and body parameters to pass
     *
     * @return AsyncResponse<DevicesBulkUnsubscribeResponse, ActionJob>
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
    public function unsubscribe($request = null) : AsyncResponse
    {
        if (is_array($request)) {
            /** @var DevicesBulkUnsubscribe **/
            $request = DevicesBulkUnsubscribe::from($request);
        }
        /** @var DevicesBulkUnsubscribeResponse **/
        $response = $this->client->call('post', '/devices/bulk/unsubscribe', $request, DevicesBulkUnsubscribeResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
        $jobId = $response->getJobId();
        if (is_null($jobId)) {
            throw new DeserializeException(array('string'), 'null');
        }
        return new AsyncResponse($this->client, new DevicesBulkUnsubscribeAsync(array($jobId)), $response);
    }
}