<?php

namespace Arimac\Sigfox\Definition\BaseStation;

use Arimac\Sigfox\Definition;
class Queue extends Definition
{
    /**
     * The number of messages handled by the base station
     *
     * @var int
     */
    protected ?int $in = null;
    /**
     * The number of messages sent to back-end by the base station.
     * A high difference between in and out values may suggest either connectivity problems with the back-end,
     * or too many messages received at once by the station
     *
     * @var int
     */
    protected ?int $out = null;
    /**
     * @param int $in The number of messages handled by the base station
     */
    function setIn(?int $in)
    {
        $this->in = $in;
    }
    /**
     * @return int The number of messages handled by the base station
     */
    function getIn() : ?int
    {
        return $this->in;
    }
    /**
     * @param int $out The number of messages sent to back-end by the base station.
     * A high difference between in and out values may suggest either connectivity problems with the back-end,
     * or too many messages received at once by the station
     */
    function setOut(?int $out)
    {
        $this->out = $out;
    }
    /**
     * @return int The number of messages sent to back-end by the base station.
     * A high difference between in and out values may suggest either connectivity problems with the back-end,
     * or too many messages received at once by the station
     */
    function getOut() : ?int
    {
        return $this->out;
    }
}