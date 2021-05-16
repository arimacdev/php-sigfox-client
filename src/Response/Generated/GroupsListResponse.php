<?php

namespace Arimac\Sigfox\Response\Generated;

use Arimac\Sigfox\Definition\Group;
use Arimac\Sigfox\Definition\Paging;
use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
class GroupsListResponse extends Definition
{
    /**
     * @var Group[]
     */
    protected ?array $data = null;
    /**
     * @var Paging
     */
    protected ?Paging $paging = null;
    /**
     * Setter for data
     *
     * @param Group[] $data
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
     * @return Group[]
     */
    public function getData() : ?array
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
    public function getPaging() : ?Paging
    {
        return $this->paging;
    }
    /**
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('data' => new ArraySerializer(self::class, 'data', new ClassSerializer(self::class, 'data', Group::class)), 'paging' => new ClassSerializer(self::class, 'paging', Paging::class));
    }
}