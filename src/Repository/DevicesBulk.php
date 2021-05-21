<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Model\AsynchronousDeviceCreationJob;
use Arimac\Sigfox\Request\DevicesBulkCreate;
use Arimac\Sigfox\Response\Generated\DevicesBulkCreateResponse;
use Arimac\Sigfox\Exception\SerializeException;
use Arimac\Sigfox\Exception\UnexpectedResponseException;
use Arimac\Sigfox\Exception\Response\BadRequestException;
use Arimac\Sigfox\Exception\Response\UnauthorizedException;
use Arimac\Sigfox\Exception\Response\ForbiddenException;
use Arimac\Sigfox\Exception\Response\ConflictException;
use Arimac\Sigfox\Exception\Response\InternalServerException;
use Arimac\Sigfox\Exception\DeserializeException;
use Arimac\Sigfox\Request\DevicesBulkUpdate;
use Arimac\Sigfox\Response\Generated\DevicesBulkUpdateResponse;
use Arimac\Sigfox\Model\AsynchronousDeviceTransferJob;
use Arimac\Sigfox\Request\DevicesBulkTransfer;
use Arimac\Sigfox\Response\Generated\DevicesBulkTransferResponse;
use Arimac\Sigfox\Model\AsynchronousDeviceReplacementJob;
use Arimac\Sigfox\Request\DevicesBulkReplace;
use Arimac\Sigfox\Model\ReplaceResponse;
use Arimac\Sigfox\Exception\Response\NotFoundException;
use Arimac\Sigfox\Request\DevicesBulkRestartAsync;
use Arimac\Sigfox\Response\Generated\DevicesBulkRestartAsyncResponse;
use Arimac\Sigfox\Request\DevicesBulkSuspendAsync;
use Arimac\Sigfox\Response\Generated\DevicesBulkSuspendAsyncResponse;
use Arimac\Sigfox\Request\DevicesBulkResumeAsync;
use Arimac\Sigfox\Response\Generated\DevicesBulkResumeAsyncResponse;
use Arimac\Sigfox\Request\DevicesBulkUnsubscribeAsync;
use Arimac\Sigfox\Response\Generated\DevicesBulkUnsubscribeAsyncResponse;
class DevicesBulk
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
     * Create multiple new devices with asynchronous job
     *
     * @param AsynchronousDeviceCreationJob|null $devices The devices to create
     *
     * @return DevicesBulkCreateResponse
     *
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws ConflictException           If server returned a HTTP 409 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     * @throws DeserializeException        If failed to deserialize response body as a response object.
     */
    public function create(?AsynchronousDeviceCreationJob $devices) : DevicesBulkCreateResponse
    {
        $request = new DevicesBulkCreate();
        $request->setDevices($devices);
        return $this->client->call('post', '/devices/bulk', $request, DevicesBulkCreateResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 409 => ConflictException::class, 500 => InternalServerException::class));
    }
    /**
     * Update or edit multiple devices with asynchronous job.
     *
     * @param DevicesBulkUpdate $request The query and body parameters to pass
     *
     * @return DevicesBulkUpdateResponse
     *
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws ConflictException           If server returned a HTTP 409 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     * @throws DeserializeException        If failed to deserialize response body as a response object.
     */
    public function update(?DevicesBulkUpdate $request = null) : DevicesBulkUpdateResponse
    {
        return $this->client->call('put', '/devices/bulk', $request, DevicesBulkUpdateResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 409 => ConflictException::class, 500 => InternalServerException::class));
    }
    /**
     * Find by jobId
     *
     * @param string $jobId The job identifier (hexadecimal format)
     *
     * @return DevicesBulkJobId
     */
    public function find(string $jobId) : DevicesBulkJobId
    {
        return new DevicesBulkJobId($this->client, $jobId);
    }
    /**
     * Transfer multiple devices to another device type with asynchronous job
     *
     * @param AsynchronousDeviceTransferJob|null $devices The devices to move
     *
     * @return DevicesBulkTransferResponse
     *
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws ConflictException           If server returned a HTTP 409 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     * @throws DeserializeException        If failed to deserialize response body as a response object.
     */
    public function transfer(?AsynchronousDeviceTransferJob $devices) : DevicesBulkTransferResponse
    {
        $request = new DevicesBulkTransfer();
        $request->setDevices($devices);
        return $this->client->call('post', '/devices/bulk/transfer', $request, DevicesBulkTransferResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 409 => ConflictException::class, 500 => InternalServerException::class));
    }
    /**
     * Replace multiple devices (moving tokens from one device to another) with synchronous job
     *
     * @param AsynchronousDeviceReplacementJob|null $devicePairs Pairs of source and target devices
     *
     * @return ReplaceResponse
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
    public function replace(?AsynchronousDeviceReplacementJob $devicePairs) : ReplaceResponse
    {
        $request = new DevicesBulkReplace();
        $request->setDevicePairs($devicePairs);
        return $this->client->call('post', '/devices/bulk/replace', $request, ReplaceResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
    /**
     * Restart multiple devices with asynchronous job.
     *
     * @param DevicesBulkRestartAsync $request The query and body parameters to pass
     *
     * @return string jobId (to use in job status request)
     *
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function restartAsync(?DevicesBulkRestartAsync $request = null) : ?string
    {
        /** @var DevicesBulkRestartAsyncResponse **/
        $response = $this->client->call('post', '/devices/bulk/restart', $request, DevicesBulkRestartAsyncResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
        return $response->getJobId();
    }
    /**
     * @return DevicesBulkRestart
     */
    public function restart() : DevicesBulkRestart
    {
        return new DevicesBulkRestart($this->client);
    }
    /**
     * Suspend multiple devices with asynchronous job
     *
     * @param DevicesBulkSuspendAsync $request The query and body parameters to pass
     *
     * @return string jobId (to use in job status request)
     *
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function suspendAsync(?DevicesBulkSuspendAsync $request = null) : ?string
    {
        /** @var DevicesBulkSuspendAsyncResponse **/
        $response = $this->client->call('post', '/devices/bulk/suspend', $request, DevicesBulkSuspendAsyncResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
        return $response->getJobId();
    }
    /**
     * @return DevicesBulkSuspend
     */
    public function suspend() : DevicesBulkSuspend
    {
        return new DevicesBulkSuspend($this->client);
    }
    /**
     * Resume multiple devices with asynchronous job.
     *
     * @param DevicesBulkResumeAsync $request The query and body parameters to pass
     *
     * @return string jobId (to use in job status request)
     *
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function resumeAsync(?DevicesBulkResumeAsync $request = null) : ?string
    {
        /** @var DevicesBulkResumeAsyncResponse **/
        $response = $this->client->call('post', '/devices/bulk/resume', $request, DevicesBulkResumeAsyncResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
        return $response->getJobId();
    }
    /**
     * @return DevicesBulkResume
     */
    public function resume() : DevicesBulkResume
    {
        return new DevicesBulkResume($this->client);
    }
    /**
     * Unsubscribe multiple devices with asynchronous job.
     *
     * @param DevicesBulkUnsubscribeAsync $request The query and body parameters to pass
     *
     * @return string jobId (to use in job status request)
     *
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function unsubscribeAsync(?DevicesBulkUnsubscribeAsync $request = null) : ?string
    {
        /** @var DevicesBulkUnsubscribeAsyncResponse **/
        $response = $this->client->call('post', '/devices/bulk/unsubscribe', $request, DevicesBulkUnsubscribeAsyncResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
        return $response->getJobId();
    }
    /**
     * @return DevicesBulkUnsubscribe
     */
    public function unsubscribe() : DevicesBulkUnsubscribe
    {
        return new DevicesBulkUnsubscribe($this->client);
    }
}