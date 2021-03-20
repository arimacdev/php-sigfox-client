<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\MinProvider;
use Arimac\Sigfox\Definition\MinContact;
/**
 * Generic internet subscription information
 */
class CreateInternetSubscription
{
    /** GSM */
    public const TYPE_GSM = 0;
    /** ADSL */
    public const TYPE_ADSL = 1;
    /** SATELLITE */
    public const TYPE_SATELLITE = 2;
    /** LAN */
    public const TYPE_LAN = 3;
    /** WIFI */
    public const TYPE_WIFI = 4;
    /** PRIMARY */
    public const PRIORITY_PRIMARY = 0;
    /** SECONDARY */
    public const PRIORITY_SECONDARY = 1;
    /** TERMINATED */
    public const PRIORITY_TERMINATED = 2;
    /**
     * The identifier of this internet subscription
     *
     * @var string
     */
    protected ?string $id;
    /**
     * Internet subscription type
     * - `CreateInternetSubscription::TYPE_GSM`
     * - `CreateInternetSubscription::TYPE_ADSL`
     * - `CreateInternetSubscription::TYPE_SATELLITE`
     * - `CreateInternetSubscription::TYPE_LAN`
     * - `CreateInternetSubscription::TYPE_WIFI`
     *
     * @var int
     */
    protected int $type;
    /**
     * Internet subscription priority.
     * - `CreateInternetSubscription::PRIORITY_PRIMARY`
     * - `CreateInternetSubscription::PRIORITY_SECONDARY`
     * - `CreateInternetSubscription::PRIORITY_TERMINATED`
     *
     * @var int
     */
    protected int $priority;
    /**
     * The comments about this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $comments;
    /**
     * The start time of this internet subscription
     *
     * @var int
     */
    protected int $startTime;
    /**
     * The end time this internet subscription. This field can be unset when updating.
     *
     * @var int
     */
    protected ?int $endTime;
    /** @var MinProvider */
    protected ?MinProvider $provider;
    /** @var MinContact[] */
    protected ?array $contacts;
    /**
     * @param string id The identifier of this internet subscription
     */
    function setId(?string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The identifier of this internet subscription
     */
    function getId() : ?string
    {
        return $this->id;
    }
    /**
     * @param int type Internet subscription type
     * - `CreateInternetSubscription::TYPE_GSM`
     * - `CreateInternetSubscription::TYPE_ADSL`
     * - `CreateInternetSubscription::TYPE_SATELLITE`
     * - `CreateInternetSubscription::TYPE_LAN`
     * - `CreateInternetSubscription::TYPE_WIFI`
     */
    function setType(int $type)
    {
        $this->type = $type;
    }
    /**
     * @return int Internet subscription type
     * - `CreateInternetSubscription::TYPE_GSM`
     * - `CreateInternetSubscription::TYPE_ADSL`
     * - `CreateInternetSubscription::TYPE_SATELLITE`
     * - `CreateInternetSubscription::TYPE_LAN`
     * - `CreateInternetSubscription::TYPE_WIFI`
     */
    function getType() : int
    {
        return $this->type;
    }
    /**
     * @param int priority Internet subscription priority.
     * - `CreateInternetSubscription::PRIORITY_PRIMARY`
     * - `CreateInternetSubscription::PRIORITY_SECONDARY`
     * - `CreateInternetSubscription::PRIORITY_TERMINATED`
     */
    function setPriority(int $priority)
    {
        $this->priority = $priority;
    }
    /**
     * @return int Internet subscription priority.
     * - `CreateInternetSubscription::PRIORITY_PRIMARY`
     * - `CreateInternetSubscription::PRIORITY_SECONDARY`
     * - `CreateInternetSubscription::PRIORITY_TERMINATED`
     */
    function getPriority() : int
    {
        return $this->priority;
    }
    /**
     * @param string comments The comments about this internet subscription. This field can be unset when updating.
     */
    function setComments(?string $comments)
    {
        $this->comments = $comments;
    }
    /**
     * @return string The comments about this internet subscription. This field can be unset when updating.
     */
    function getComments() : ?string
    {
        return $this->comments;
    }
    /**
     * @param int startTime The start time of this internet subscription
     */
    function setStartTime(int $startTime)
    {
        $this->startTime = $startTime;
    }
    /**
     * @return int The start time of this internet subscription
     */
    function getStartTime() : int
    {
        return $this->startTime;
    }
    /**
     * @param int endTime The end time this internet subscription. This field can be unset when updating.
     */
    function setEndTime(?int $endTime)
    {
        $this->endTime = $endTime;
    }
    /**
     * @return int The end time this internet subscription. This field can be unset when updating.
     */
    function getEndTime() : ?int
    {
        return $this->endTime;
    }
    /**
     * @param MinProvider provider
     */
    function setProvider(?MinProvider $provider)
    {
        $this->provider = $provider;
    }
    /**
     * @return MinProvider provider
     */
    function getProvider() : ?MinProvider
    {
        return $this->provider;
    }
    /**
     * @param MinContact[] contacts
     */
    function setContacts(?array $contacts)
    {
        $this->contacts = $contacts;
    }
    /**
     * @return MinContact[] contacts
     */
    function getContacts() : ?array
    {
        return $this->contacts;
    }
}