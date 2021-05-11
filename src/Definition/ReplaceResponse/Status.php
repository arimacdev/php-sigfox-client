<?php

namespace Arimac\Sigfox\Definition\ReplaceResponse;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\JobError;
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
    protected $serialize = array(new ArraySerializer(self::class, 'errors', new ClassSerializer(self::class, 'errors', JobError::class)), new PrimitiveSerializer(self::class, 'success', 'int'));
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
    public function getErrors() : array
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
    public function getSuccess() : int
    {
        return $this->success;
    }
}