<?php

namespace Arimac\Sigfox\Response\Generated;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class DevicesIdMessagesMetricResponse extends Definition
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
     * @param int $lastDay Number of device messages for the last day
     *
     * @return self To use in method chains
     */
    public function setLastDay(?int $lastDay) : self
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
     * @param int $lastWeek Number of device messages for the last week
     *
     * @return self To use in method chains
     */
    public function setLastWeek(?int $lastWeek) : self
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
     * @param int $lastMonth Number of device messages for the last month
     *
     * @return self To use in method chains
     */
    public function setLastMonth(?int $lastMonth) : self
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
        return array('lastDay' => new PrimitiveSerializer(self::class, 'lastDay', 'int'), 'lastWeek' => new PrimitiveSerializer(self::class, 'lastWeek', 'int'), 'lastMonth' => new PrimitiveSerializer(self::class, 'lastMonth', 'int'));
    }
}