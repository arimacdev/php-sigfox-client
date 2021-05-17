<?php

namespace Arimac\Sigfox\Definition\ReplaceResponse;

use Arimac\Sigfox\Definition\JobError;
use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * The information about the devices already processed
 */
class Status extends Definition
{
    /**
     * reasons of each errors
     *
     * @var JobError[]
     */
    protected ?array $errors = null;
    /**
     * The number of devices successfully replaced
     *
     * @var int
     */
    protected ?int $success = null;
    /**
     * Setter for errors
     *
     * @param JobError[] $errors reasons of each errors
     *
     * @return self To use in method chains
     */
    public function setErrors(?array $errors) : self
    {
        $this->errors = $errors;
        return $this;
    }
    /**
     * Getter for errors
     *
     * @return JobError[] reasons of each errors
     */
    public function getErrors() : ?array
    {
        return $this->errors;
    }
    /**
     * Setter for success
     *
     * @param int $success The number of devices successfully replaced
     *
     * @return self To use in method chains
     */
    public function setSuccess(?int $success) : self
    {
        $this->success = $success;
        return $this;
    }
    /**
     * Getter for success
     *
     * @return int The number of devices successfully replaced
     */
    public function getSuccess() : ?int
    {
        return $this->success;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('errors' => new ArraySerializer(new ClassSerializer(JobError::class)), 'success' => new PrimitiveSerializer('int'));
        return $serializers;
    }
}