<?php

namespace Arimac\Sigfox\Response\Generated;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\Device;
use Arimac\Sigfox\Definition\Paging;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class DevicesListResponse extends Definition
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
    protected $serialize = array(new ArraySerializer(self::class, 'data', new ClassSerializer(self::class, 'data', Device::class)), new ArraySerializer(self::class, 'actions', new PrimitiveSerializer(self::class, 'actions', 'string')), new ClassSerializer(self::class, 'paging', Paging::class));
    /**
     * Setter for data
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
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * Setter for actions
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
    public function getActions() : array
    {
        return $this->actions;
    }
    /**
     * Setter for paging
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
    public function getPaging() : Paging
    {
        return $this->paging;
    }
}