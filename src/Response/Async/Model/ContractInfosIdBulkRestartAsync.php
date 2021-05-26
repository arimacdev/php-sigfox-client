<?php

namespace Arimac\Sigfox\Response\Async\Model;

use Arimac\Sigfox\Response\Async\AsyncModel;
use Arimac\Sigfox\Exception\Response\BadRequestException;
use Arimac\Sigfox\Exception\Response\UnauthorizedException;
use Arimac\Sigfox\Exception\Response\ForbiddenException;
use Arimac\Sigfox\Exception\Response\NotFoundException;
use Arimac\Sigfox\Exception\Response\InternalServerException;
use Arimac\Sigfox\Model\ActionJob;
/**
 * @extends AsyncModel<ActionJob>
 */
class ContractInfosIdBulkRestartAsync extends AsyncModel
{
    public function getErrors() : array
    {
        return array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class);
    }
    public function getResponseType() : string
    {
        return ActionJob::class;
    }
    public function getEndpoint() : string
    {
        return '/contract-infos/bulk/restart/{jobId}';
    }
}