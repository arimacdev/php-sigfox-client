<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class CbStatus extends Model
{
    /**
     * http response status
     *
     * @var int
     */
    protected ?int $status = null;
    /**
     * http response message
     *
     * @var string
     */
    protected ?string $info = null;
    /**
     * callback definition triggered
     *
     * @var string
     */
    protected ?string $cbDef = null;
    /**
     * time the callback was called (in milliseconds since the Unix Epoch)
     *
     * @var int
     */
    protected ?int $time = null;
    /**
     * Setter for status
     *
     * @param int $status http response status
     *
     * @return static To use in method chains
     */
    public function setStatus(?int $status)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Getter for status
     *
     * @return int http response status
     */
    public function getStatus() : ?int
    {
        return $this->status;
    }
    /**
     * Setter for info
     *
     * @param string $info http response message
     *
     * @return static To use in method chains
     */
    public function setInfo(?string $info)
    {
        $this->info = $info;
        return $this;
    }
    /**
     * Getter for info
     *
     * @return string http response message
     */
    public function getInfo() : ?string
    {
        return $this->info;
    }
    /**
     * Setter for cbDef
     *
     * @param string $cbDef callback definition triggered
     *
     * @return static To use in method chains
     */
    public function setCbDef(?string $cbDef)
    {
        $this->cbDef = $cbDef;
        return $this;
    }
    /**
     * Getter for cbDef
     *
     * @return string callback definition triggered
     */
    public function getCbDef() : ?string
    {
        return $this->cbDef;
    }
    /**
     * Setter for time
     *
     * @param int $time time the callback was called (in milliseconds since the Unix Epoch)
     *
     * @return static To use in method chains
     */
    public function setTime(?int $time)
    {
        $this->time = $time;
        return $this;
    }
    /**
     * Getter for time
     *
     * @return int time the callback was called (in milliseconds since the Unix Epoch)
     */
    public function getTime() : ?int
    {
        return $this->time;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('status' => new PrimitiveSerializer('int'), 'info' => new PrimitiveSerializer('string'), 'cbDef' => new PrimitiveSerializer('string'), 'time' => new PrimitiveSerializer('int'));
        return $serializers;
    }
}