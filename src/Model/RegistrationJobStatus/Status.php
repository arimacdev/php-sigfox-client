<?php

namespace Arimac\Sigfox\Model\RegistrationJobStatus;

use Arimac\Sigfox\Model\JobError;
use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\ChildSet;
/**
 * The information about the devices already processed
 */
class Status extends Model
{
    /**
     * Detailed information about each error
     *
     * @var JobError[]
     */
    protected ?array $errors = null;
    /**
     * The number of devices successfully created, edited or transferred
     *
     * @var int
     */
    protected ?int $success = null;
    /**
     * Setter for errors
     *
     * @param JobError[] $errors Detailed information about each error
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
     * @return JobError[] Detailed information about each error
     */
    public function getErrors() : ?array
    {
        return $this->errors;
    }
    /**
     * Setter for success
     *
     * @param int $success The number of devices successfully created, edited or transferred
     *
     * @return static To use in method chains
     */
    public function setSuccess(?int $success)
    {
        $this->success = $success;
        return $this;
    }
    /**
     * Getter for success
     *
     * @return int The number of devices successfully created, edited or transferred
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