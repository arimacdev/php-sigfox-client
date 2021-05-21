<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Model\OperatorUpdate;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
use Arimac\Sigfox\Validator\Rules\Child;
/**
 * Update a given operator.
 */
class OperatorsIdUpdate extends Request
{
    /**
     * The operator to update
     *
     * @var OperatorUpdate
     */
    protected ?OperatorUpdate $operator = null;
    /**
     * @internal
     */
    protected ?string $body = 'operator';
    /**
     * Setter for operator
     *
     * @param OperatorUpdate $operator The operator to update
     *
     * @return self To use in method chains
     */
    public function setOperator(?OperatorUpdate $operator) : self
    {
        $this->operator = $operator;
        return $this;
    }
    /**
     * Getter for operator
     *
     * @internal
     *
     * @return OperatorUpdate The operator to update
     */
    public function getOperator() : ?OperatorUpdate
    {
        return $this->operator;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('operator' => new ClassSerializer(OperatorUpdate::class));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('operator' => array(new Required(), new Child()));
        return $rules;
    }
}