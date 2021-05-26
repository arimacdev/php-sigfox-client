<?php

namespace Arimac\Sigfox\Response\Async\Model;

use Arimac\Sigfox\Response\Async\AsyncModel;
use Arimac\Sigfox\Exception\Response\BadRequestException;
use Arimac\Sigfox\Exception\Response\UnauthorizedException;
use Arimac\Sigfox\Exception\Response\ForbiddenException;
use Arimac\Sigfox\Exception\Response\NotFoundException;
use Arimac\Sigfox\Exception\Response\InternalServerException;
use Arimac\Sigfox\Model\GlobalCoverageBulkResponse;
/**
 * @extends AsyncModel<GlobalCoverageBulkResponse>
 */
class CoveragesGlobalPredictionsCalculateBulkAsync extends AsyncModel
{
    public function getErrors() : array
    {
        return array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class);
    }
    public function getResponseType() : string
    {
        return GlobalCoverageBulkResponse::class;
    }
    public function getEndpoint() : string
    {
        return '/coverages/global/predictions/bulk/{jobId}';
    }
}