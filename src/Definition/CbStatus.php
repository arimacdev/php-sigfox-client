<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
class CbStatus extends Definition
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
     * @param int $status http response status
     */
    function setStatus(?int $status)
    {
        $this->status = $status;
    }
    /**
     * @return int http response status
     */
    function getStatus() : ?int
    {
        return $this->status;
    }
    /**
     * @param string $info http response message
     */
    function setInfo(?string $info)
    {
        $this->info = $info;
    }
    /**
     * @return string http response message
     */
    function getInfo() : ?string
    {
        return $this->info;
    }
    /**
     * @param string $cbDef callback definition triggered
     */
    function setCbDef(?string $cbDef)
    {
        $this->cbDef = $cbDef;
    }
    /**
     * @return string callback definition triggered
     */
    function getCbDef() : ?string
    {
        return $this->cbDef;
    }
    /**
     * @param int $time time the callback was called (in milliseconds since the Unix Epoch)
     */
    function setTime(?int $time)
    {
        $this->time = $time;
    }
    /**
     * @return int time the callback was called (in milliseconds since the Unix Epoch)
     */
    function getTime() : ?int
    {
        return $this->time;
    }
}