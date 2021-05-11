<?php

namespace Arimac\Sigfox\Definition\BaseStation;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
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
     *
     * @var int
     */
    protected ?int $out = null;
    protected $serialize = array(new PrimitiveSerializer(self::class, 'in', 'int'), new PrimitiveSerializer(self::class, 'out', 'int'));
    /**
     * Setter for in
     *
     * @param int $in The number of messages handled by the base station
     *
     * @return self To use in method chains
     */
    public function setIn(?int $in) : self
    {
        $this->in = $in;
        return $this;
    }
    /**
     * Getter for in
     *
     * @return int The number of messages handled by the base station
     */
    public function getIn() : int
    {
        return $this->in;
    }
    /**
     * Setter for out
     *
     * @param int $out The number of messages sent to back-end by the base station.
     *                 A high difference between in and out values may suggest either connectivity problems with the
     *                 back-end,
     *                 or too many messages received at once by the station
     *                 
     *
     * @return self To use in method chains
     */
    public function setOut(?int $out) : self
    {
        $this->out = $out;
        return $this;
    }
    /**
     * Getter for out
     *
     * @return int The number of messages sent to back-end by the base station.
     *             A high difference between in and out values may suggest either connectivity problems with the
     *             back-end,
     *             or too many messages received at once by the station
     *             
     */
    public function getOut() : int
    {
        return $this->out;
    }
}