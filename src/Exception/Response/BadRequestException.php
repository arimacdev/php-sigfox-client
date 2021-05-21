<?php

namespace Arimac\Sigfox\Exception\Response;

use Arimac\Sigfox\Model\ErrorContent;
use Arimac\Sigfox\Model\ErrorContent\ErrorsItem;
use Arimac\Sigfox\Exception\DeserializeException;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Throwable;

/**
 * HTTP 400 Bad Request error
 */
class BadRequestException extends ResponseException {
    /**
     * @internal
     */
    protected ErrorContent $innerContent;

    /**
     * Initializing the exception
     *
     * @internal
     *
     * @param ErrorContent $innerContent Response content
     * @param Throwable    $prev         Previous exception
     */
    public function __construct(
        ErrorContent $innerContent,
        Throwable $prev = null
    ){
        parent::__construct($innerContent->getMessage()??"Bad Request", 400, $prev);
        $this->innerContent = $innerContent;
    }

    /**
     * List of errors that occured during request
     *
     * @return ErrorsItem[]
     */
    public function getErrors(): ?array {
        return $this->innerContent->getErrors();
    }

    /**
     * @internal
     *
     * @inheritdoc
     */
    public static function deserialize($value): BadRequestException
    {
        $serializer = new ClassSerializer(ErrorContent::class);
        $errorContent = $serializer->deserialize($value);
        if(!$errorContent){
            throw new DeserializeException(["array(message, errors)"], gettype($value));
        }

        return new BadRequestException($errorContent);
    }
}
