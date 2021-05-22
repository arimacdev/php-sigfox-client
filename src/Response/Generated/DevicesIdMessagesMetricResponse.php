<?php

namespace Arimac\Sigfox\Response\Generated;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class DevicesIdMessagesMetricResponse extends Model
{
    /**
     * Number of device messages for the last day
     *
     * @var int
     */
    protected ?int $lastDay = null;
    /**
     * Number of device messages for the last week
     *
     * @var int
     */
    protected ?int $lastWeek = null;
    /**
     * Number of device messages for the last month
     *
     * @var int
     */
    protected ?int $lastMonth = null;
    /**
     * Setter for lastDay
     *
     * @internal
     *
     * @param int $lastDay Number of device messages for the last day
     *
     * @return static To use in method chains
     */
    public function setLastDay(?int $lastDay)
    {
        $this->lastDay = $lastDay;
        return $this;
    }
    /**
     * Getter for lastDay
     *
     * @return int Number of device messages for the last day
     */
    public function getLastDay() : ?int
    {
        return $this->lastDay;
    }
    /**
     * Setter for lastWeek
     *
     * @internal
     *
     * @param int $lastWeek Number of device messages for the last week
     *
     * @return static To use in method chains
     */
    public function setLastWeek(?int $lastWeek)
    {
        $this->lastWeek = $lastWeek;
        return $this;
    }
    /**
     * Getter for lastWeek
     *
     * @return int Number of device messages for the last week
     */
    public function getLastWeek() : ?int
    {
        return $this->lastWeek;
    }
    /**
     * Setter for lastMonth
     *
     * @internal
     *
     * @param int $lastMonth Number of device messages for the last month
     *
     * @return static To use in method chains
     */
    public function setLastMonth(?int $lastMonth)
    {
        $this->lastMonth = $lastMonth;
        return $this;
    }
    /**
     * Getter for lastMonth
     *
     * @return int Number of device messages for the last month
     */
    public function getLastMonth() : ?int
    {
        return $this->lastMonth;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('lastDay' => new PrimitiveSerializer('int'), 'lastWeek' => new PrimitiveSerializer('int'), 'lastMonth' => new PrimitiveSerializer('int'));
        return $serializers;
    }
}