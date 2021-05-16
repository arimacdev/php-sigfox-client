<?php

namespace Arimac\Sigfox\Definition\ActionJob;

use Arimac\Sigfox\Definition\JobError;
use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
/**
 * the informations about the devices already treated
 */
class Status extends Definition
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
     */
    public function getSerializeMetaData() : array
    {
        return array('total' => new PrimitiveSerializer(self::class, 'total', 'int'), 'nbSuccess' => new PrimitiveSerializer(self::class, 'nbSuccess', 'int'), 'nbErrors' => new PrimitiveSerializer(self::class, 'nbErrors', 'int'), 'errors' => new ArraySerializer(self::class, 'errors', new ClassSerializer(self::class, 'errors', JobError::class)));
    }
}