<?php

namespace Arimac\Sigfox\Response\Generated;

use Arimac\Sigfox\Model\Device;
use Arimac\Sigfox\Model\Paging;
use Arimac\Sigfox\Response\Paginated\PaginatedResponse;
use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\ChildSet;
use Arimac\Sigfox\Validator\Rules\Child;
class DevicesListResponse extends Model implements PaginatedResponse
{
    /**
     * @var Device[]
     */
    protected ?array $data = null;
    /**
     * @var string[]
     */
    protected ?array $actions = null;
    /**
     * @var Paging
     */
    protected ?Paging $paging = null;
    /**
     * Setter for data
     *
     * @internal
     *
     * @param Device[] $data
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
     * @return Device[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * Setter for actions
     *
     * @internal
     *
     * @param string[] $actions
     *
     * @return self To use in method chains
     */
    public function setActions(?array $actions) : self
    {
        $this->actions = $actions;
        return $this;
    }
    /**
     * Getter for actions
     *
     * @return string[]
     */
    public function getActions() : ?array
    {
        return $this->actions;
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
        $serializers = array('data' => new ArraySerializer(new ClassSerializer(Device::class)), 'actions' => new ArraySerializer(new PrimitiveSerializer('string')), 'paging' => new ClassSerializer(Paging::class));
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