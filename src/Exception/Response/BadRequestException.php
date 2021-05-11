<?php

namespace Arimac\Sigfox\Exception\Response;

use Arimac\Sigfox\Definition\ErrorContent;
use Arimac\Sigfox\Definition\ErrorContent\ErrorsItem;
use Throwable;

class BadRequestException extends ResponseException {
    protected ErrorContent $innerContent;

    public function __construct(
        ErrorContent $innerContent,
        Throwable $prev = null
    ){
        parent::__construct($innerContent->getMessage(), 400, $prev);
        $this->innerContent = $innerContent;
    }

    /**
     * List of errors that occured during request
     *
     * @return ErrorsItem[]
     */
    public function getErrors(): array {
        return $this->innerContent->getErrors();
    }
}
