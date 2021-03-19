<?php

namespace Arimac\Sigfox\Definition;

class DownlinkAnswerStatus
{
    /**
     * base station to send downlink message
     */
    protected object $baseStation;
    /**
     * planned downlink power as it was computed by the backend
     */
    protected int $plannedPower;
    /**
     * response content, hex encoded
     */
    protected string $data;
    /**
     * name of the first operator which received the message as roaming
     */
    protected string $operator;
    /**
     * country of the operator
     */
    protected string $country;
}