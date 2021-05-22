<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model\ErrorContent\ErrorsItem;
use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Validator\Rules\ChildSet;
/**
 * Content of error messages, and sub-errors messages if any
 */
class ErrorContent extends Model
{
    /**
     * General error message
     *
     * @var string
     */
    protected ?string $message = null;
    /**
     * List of errors that occured during request
     *
     * @var ErrorsItem[]
     */
    protected ?array $errors = null;
    /**
     * Setter for message
     *
     * @param string $message General error message
     *
     * @return static To use in method chains
     */
    public function setMessage(?string $message)
    {
        $this->message = $message;
        return $this;
    }
    /**
     * Getter for message
     *
     * @return string General error message
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * Setter for errors
     *
     * @param ErrorsItem[] $errors List of errors that occured during request
     *
     * @return static To use in method chains
     */
    public function setErrors(?array $errors)
    {
        $this->errors = $errors;
        return $this;
    }
    /**
     * Getter for errors
     *
     * @return ErrorsItem[] List of errors that occured during request
     */
    public function getErrors() : ?array
    {
        return $this->errors;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('message' => new PrimitiveSerializer('string'), 'errors' => new ArraySerializer(new ClassSerializer(ErrorsItem::class)));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('errors' => array(new ChildSet()));
        return $rules;
    }
}