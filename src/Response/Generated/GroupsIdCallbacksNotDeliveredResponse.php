<?php

namespace Arimac\Sigfox\Response\Generated;

use Arimac\Sigfox\Model\GroupErrorMessages;
use Arimac\Sigfox\Model\Paging;
use Arimac\Sigfox\Response\Paginated\PaginatedResponse;
use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Validator\Rules\ChildSet;
use Arimac\Sigfox\Validator\Rules\Child;
class GroupsIdCallbacksNotDeliveredResponse extends Model implements PaginatedResponse
{
    /**
     * @var GroupErrorMessages[]
     */
    protected ?array $data = null;
    /**
     * @var Paging
     */
    protected ?Paging $paging = null;
    /**
     * Setter for data
     *
     * @internal
     *
     * @param GroupErrorMessages[] $data
     *
     * @return self To use in method chains
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
    /**
     * Getter for data
     *
     * @return GroupErrorMessages[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * Setter for paging
     *
     * @internal
     *
     * @param Paging $paging
     *
     * @return self To use in method chains
     */
    public function setPaging(?Paging $paging) : self
    {
        $this->paging = $paging;
        return $this;
    }
    /**
     * Getter for paging
     *
     * @return Paging
     */
    public function getPaging() : ?Paging
    {
        return $this->paging;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('data' => new ArraySerializer(new ClassSerializer(GroupErrorMessages::class)), 'paging' => new ClassSerializer(Paging::class));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('data' => array(new ChildSet()), 'paging' => array(new Child()));
        return $rules;
    }
}