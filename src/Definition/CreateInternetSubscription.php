<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
/**
 * Generic internet subscription information
 */
class CreateInternetSubscription extends Definition
{
    /**
     * GSM
     */
    public const TYPE_GSM = 0;
    /**
     * ADSL
     */
    public const TYPE_ADSL = 1;
    /**
     * SATELLITE
     */
    public const TYPE_SATELLITE = 2;
    /**
     * LAN
     */
    public const TYPE_LAN = 3;
    /**
     * WIFI
     */
    public const TYPE_WIFI = 4;
    /**
     * PRIMARY
     */
    public const PRIORITY_PRIMARY = 0;
    /**
     * SECONDARY
     */
    public const PRIORITY_SECONDARY = 1;
    /**
     * TERMINATED
     */
    public const PRIORITY_TERMINATED = 2;
    /**
     * The identifier of this internet subscription
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * Internet subscription type
     * 
     * - {@see CreateInternetSubscription::TYPE_GSM}
     * - {@see CreateInternetSubscription::TYPE_ADSL}
     * - {@see CreateInternetSubscription::TYPE_SATELLITE}
     * - {@see CreateInternetSubscription::TYPE_LAN}
     * - {@see CreateInternetSubscription::TYPE_WIFI}
     *
     * @var int
     */
    protected ?int $type = null;
    /**
     * Internet subscription priority.
     * 
     * - {@see CreateInternetSubscription::PRIORITY_PRIMARY}
     * - {@see CreateInternetSubscription::PRIORITY_SECONDARY}
     * - {@see CreateInternetSubscription::PRIORITY_TERMINATED}
     *
     * @var int
     */
    protected ?int $priority = null;
    /**
     * The comments about this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $comments = null;
    /**
     * The start time of this internet subscription
     *
     * @var int
     */
    protected ?int $startTime = null;
    /**
     * The end time this internet subscription. This field can be unset when updating.
     *
     * @var int
     */
    protected ?int $endTime = null;
    /**
     * @var MinProvider
     */
    protected ?MinProvider $provider = null;
    /**
     * @var MinContact[]
     */
    protected ?array $contacts = null;
    protected array $validations = array('type' => array('required'), 'priority' => array('required'), 'startTime' => array('required'));
    /**
     * Setter for id
     *
     * @param string $id The identifier of this internet subscription
     *
     * @return self To use in method chains
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return string The identifier of this internet subscription
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * Setter for type
     *
     * @param int $type Internet subscription type
     *                  
     *                  - {@see CreateInternetSubscription::TYPE_GSM}
     *                  - {@see CreateInternetSubscription::TYPE_ADSL}
     *                  - {@see CreateInternetSubscription::TYPE_SATELLITE}
     *                  - {@see CreateInternetSubscription::TYPE_LAN}
     *                  - {@see CreateInternetSubscription::TYPE_WIFI}
     *                  
     *
     * @return self To use in method chains
     */
    public function setType(?int $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Getter for type
     *
     * @return int Internet subscription type
     *             
     *             - {@see CreateInternetSubscription::TYPE_GSM}
     *             - {@see CreateInternetSubscription::TYPE_ADSL}
     *             - {@see CreateInternetSubscription::TYPE_SATELLITE}
     *             - {@see CreateInternetSubscription::TYPE_LAN}
     *             - {@see CreateInternetSubscription::TYPE_WIFI}
     *             
     */
    public function getType() : ?int
    {
        return $this->type;
    }
    /**
     * Setter for priority
     *
     * @param int $priority Internet subscription priority.
     *                      
     *                      - {@see CreateInternetSubscription::PRIORITY_PRIMARY}
     *                      - {@see CreateInternetSubscription::PRIORITY_SECONDARY}
     *                      - {@see CreateInternetSubscription::PRIORITY_TERMINATED}
     *                      
     *
     * @return self To use in method chains
     */
    public function setPriority(?int $priority) : self
    {
        $this->priority = $priority;
        return $this;
    }
    /**
     * Getter for priority
     *
     * @return int Internet subscription priority.
     *             
     *             - {@see CreateInternetSubscription::PRIORITY_PRIMARY}
     *             - {@see CreateInternetSubscription::PRIORITY_SECONDARY}
     *             - {@see CreateInternetSubscription::PRIORITY_TERMINATED}
     *             
     */
    public function getPriority() : ?int
    {
        return $this->priority;
    }
    /**
     * Setter for comments
     *
     * @param string $comments The comments about this internet subscription. This field can be unset when updating.
     *
     * @return self To use in method chains
     */
    public function setComments(?string $comments) : self
    {
        $this->comments = $comments;
        return $this;
    }
    /**
     * Getter for comments
     *
     * @return string The comments about this internet subscription. This field can be unset when updating.
     */
    public function getComments() : ?string
    {
        return $this->comments;
    }
    /**
     * Setter for startTime
     *
     * @param int $startTime The start time of this internet subscription
     *
     * @return self To use in method chains
     */
    public function setStartTime(?int $startTime) : self
    {
        $this->startTime = $startTime;
        return $this;
    }
    /**
     * Getter for startTime
     *
     * @return int The start time of this internet subscription
     */
    public function getStartTime() : ?int
    {
        return $this->startTime;
    }
    /**
     * Setter for endTime
     *
     * @param int $endTime The end time this internet subscription. This field can be unset when updating.
     *
     * @return self To use in method chains
     */
    public function setEndTime(?int $endTime) : self
    {
        $this->endTime = $endTime;
        return $this;
    }
    /**
     * Getter for endTime
     *
     * @return int The end time this internet subscription. This field can be unset when updating.
     */
    public function getEndTime() : ?int
    {
        return $this->endTime;
    }
    /**
     * Setter for provider
     *
     * @param MinProvider $provider
     *
     * @return self To use in method chains
     */
    public function setProvider(?MinProvider $provider) : self
    {
        $this->provider = $provider;
        return $this;
    }
    /**
     * Getter for provider
     *
     * @return MinProvider
     */
    public function getProvider() : ?MinProvider
    {
        return $this->provider;
    }
    /**
     * Setter for contacts
     *
     * @param MinContact[] $contacts
     *
     * @return self To use in method chains
     */
    public function setContacts(?array $contacts) : self
    {
        $this->contacts = $contacts;
        return $this;
    }
    /**
     * Getter for contacts
     *
     * @return MinContact[]
     */
    public function getContacts() : ?array
    {
        return $this->contacts;
    }
    /**
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('id' => new PrimitiveSerializer(self::class, 'id', 'string'), 'type' => new PrimitiveSerializer(self::class, 'type', 'int'), 'priority' => new PrimitiveSerializer(self::class, 'priority', 'int'), 'comments' => new PrimitiveSerializer(self::class, 'comments', 'string'), 'startTime' => new PrimitiveSerializer(self::class, 'startTime', 'int'), 'endTime' => new PrimitiveSerializer(self::class, 'endTime', 'int'), 'provider' => new ClassSerializer(self::class, 'provider', MinProvider::class), 'contacts' => new ArraySerializer(self::class, 'contacts', new ClassSerializer(self::class, 'contacts', MinContact::class)));
    }
}