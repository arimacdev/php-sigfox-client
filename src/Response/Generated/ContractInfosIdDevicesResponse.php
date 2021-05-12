<?php

namespace Arimac\Sigfox\Response\Generated;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\Device;
use Arimac\Sigfox\Definition\Paging;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
class ContractInfosIdDevicesResponse extends Definition
{
    /**
     * @var Device[]
     */
    protected ?array $data = null;
    /**
     * @var Paging
     */
    protected ?Paging $paging = null;
    protected $serialize = array(new ArraySerializer(self::class, 'data', new ClassSerializer(self::class, 'data', Device::class)), new ClassSerializer(self::class, 'paging', Paging::class));
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