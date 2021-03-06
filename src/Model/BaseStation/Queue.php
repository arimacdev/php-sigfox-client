<?php

namespace Arimac\Sigfox\Model\BaseStation;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class Queue extends Model
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
     * Setter for in
     *
     * @param int $in The number of messages handled by the base station
     *
     * @return static To use in method chains
     */
    public function setIn(?int $in)
    {
        $this->in = $in;
        return $this;
    }
    /**
     * Getter for in
     *
     * @return int The number of messages handled by the base station
     */
    public function getIn() : ?int
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
     * @return static To use in method chains
     */
    public function setOut(?int $out)
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
    public function getOut() : ?int
    {
        return $this->out;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('in' => new PrimitiveSerializer('int'), 'out' => new PrimitiveSerializer('int'));
        return $serializers;
    }
}