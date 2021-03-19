<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\object;
class DownlinkAnswerStatus
{
    /**
     * base station to send downlink message
     *
     * @var object
     */
    protected object $baseStation;
    /**
     * planned downlink power as it was computed by the backend
     *
     * @var int
     */
    protected int $plannedPower;
    /**
     * response content, hex encoded
     *
     * @var string
     */
    protected string $data;
    /**
     * name of the first operator which received the message as roaming
     *
     * @var string
     */
    protected string $operator;
    /**
     * country of the operator
     *
     * @var string
     */
    protected string $country;
}