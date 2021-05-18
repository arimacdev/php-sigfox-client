<?php

namespace Arimac\Sigfox\Model\ActionJob;

use Arimac\Sigfox\Model\JobError;
use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Validator\Rules\ChildSet;
/**
 * the informations about the devices already treated
 */
class Status extends Model
{
    /**
     * the total number of devices given
     *
     * @var int
     */
    protected ?int $total = null;
    /**
     * the number of devices successfully changed
     *
     * @var int
     */
    protected ?int $nbSuccess = null;
    /**
     * the number of devices unsuccessfully changed
     *
     * @var int
     */
    protected ?int $nbErrors = null;
    /**
     * reasons of each errors
     *
     * @var JobError[]
     */
    protected ?array $errors = null;
    /**
     * Setter for total
     *
     * @param int $total the total number of devices given
     *
     * @return self To use in method chains
     */
    public function setTotal(?int $total) : self
    {
        $this->total = $total;
        return $this;
    }
    /**
     * Getter for total
     *
     * @return int the total number of devices given
     */
    public function getTotal() : ?int
    {
        return $this->total;
    }
    /**
     * Setter for nbSuccess
     *
     * @param int $nbSuccess the number of devices successfully changed
     *
     * @return self To use in method chains
     */
    public function setNbSuccess(?int $nbSuccess) : self
    {
        $this->nbSuccess = $nbSuccess;
        return $this;
    }
    /**
     * Getter for nbSuccess
     *
     * @return int the number of devices successfully changed
     */
    public function getNbSuccess() : ?int
    {
        return $this->nbSuccess;
    }
    /**
     * Setter for nbErrors
     *
     * @param int $nbErrors the number of devices unsuccessfully changed
     *
     * @return self To use in method chains
     */
    public function setNbErrors(?int $nbErrors) : self
    {
        $this->nbErrors = $nbErrors;
        return $this;
    }
    /**
     * Getter for nbErrors
     *
     * @return int the number of devices unsuccessfully changed
     */
    public function getNbErrors() : ?int
    {
        return $this->nbErrors;
    }
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
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('total' => new PrimitiveSerializer('int'), 'nbSuccess' => new PrimitiveSerializer('int'), 'nbErrors' => new PrimitiveSerializer('int'), 'errors' => new ArraySerializer(new ClassSerializer(JobError::class)));
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