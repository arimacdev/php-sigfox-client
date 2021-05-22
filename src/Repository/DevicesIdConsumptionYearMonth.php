<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Helper;
use Arimac\Sigfox\Model\DeviceConsumption;
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
class DevicesIdConsumptionYearMonth
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
     * The year of consumption
     *
     * @internal
     */
    protected string $year;
    /**
     * The month of consumption
     *
     * @internal
     */
    protected string $month;
    /**
     * Creating the repository
     *
     * @internal
     *
     * @param Client $client The HTTP client
     * @param string $id     The Device identifier (hexadecimal format)
     * @param string $year   The year of consumption
     * @param string $month  The month of consumption
     */
    public function __construct(Client $client, string $id, string $year, string $month)
    {
        $this->client = $client;
        $this->id = $id;
        $this->year = $year;
        $this->month = $month;
    }
    /**
     * Retrieve a device's consumption for a given month during a given year.
     *
     * @return DeviceConsumption
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
    public function get() : DeviceConsumption
    {
        return $this->client->call('get', Helper::bindUrlParams('/devices/{id}/consumption/{year}/{month}', $this->id, $this->year, $this->month), null, DeviceConsumption::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
}