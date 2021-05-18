<?php

namespace Arimac\Sigfox\Model\RegistrationJob;

use Arimac\Sigfox\Model\JobError;
use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\ChildSet;
/**
 * the informations about the base stations already treated
 */
class Status extends Model
{
    /**
     * reasons of each errors
     *
     * @var JobError[]
     */
    protected ?array $errors = null;
    /**
     * the number of base stations successfully created or transferred
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
     * @param int $success the number of base stations successfully created or transferred
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
     * @return int the number of base stations successfully created or transferred
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