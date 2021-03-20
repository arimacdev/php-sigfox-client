<?php

namespace Arimac\Sigfox\Definition;

class CbStatus
{
    /**
     * http response status
     *
     * @var int
     */
    protected int $status;
    /**
     * http response message
     *
     * @var string
     */
    protected string $info;
    /**
     * callback definition triggered
     *
     * @var string
     */
    protected string $cbDef;
    /**
     * time the callback was called (in milliseconds since the Unix Epoch)
     *
     * @var int
     */
    protected int $time;
    /**
     * @param int status http response status
     */
    function setStatus(int $status)
    {
        $this->status = $status;
    }
    /**
     * @return int http response status
     */
    function getStatus() : int
    {
        return $this->status;
    }
    /**
     * @param string info http response message
     */
    function setInfo(string $info)
    {
        $this->info = $info;
    }
    /**
     * @return string http response message
     */
    function getInfo() : string
    {
        return $this->info;
    }
    /**
     * @param string cbDef callback definition triggered
     */
    function setCbDef(string $cbDef)
    {
        $this->cbDef = $cbDef;
    }
    /**
     * @return string callback definition triggered
     */
    function getCbDef() : string
    {
        return $this->cbDef;
    }
    /**
     * @param int time time the callback was called (in milliseconds since the Unix Epoch)
     */
    function setTime(int $time)
    {
        $this->time = $time;
    }
    /**
     * @return int time the callback was called (in milliseconds since the Unix Epoch)
     */
    function getTime() : int
    {
        return $this->time;
    }
}