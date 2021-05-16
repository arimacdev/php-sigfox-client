<?php

namespace Arimac\Sigfox\Response\Generated;

use Arimac\Sigfox\Definition\Callback;
use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
class DeviceTypesIdCallbacksListResponse extends Definition
{
    /**
     * @var Callback[]
     */
    protected ?array $data = null;
    /**
     * Setter for data
     *
     * @internal
     *
     * @param Callback[] $data
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
     * @return Callback[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        return array('data' => new ArraySerializer(new ClassSerializer(Callback::class)));
    }
}