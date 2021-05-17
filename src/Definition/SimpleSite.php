<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
/**
 * Minimal information about a site linked to a Base Station.
 */
class SimpleSite extends MinSite
{
    /**
     * PROD
     */
    public const STATUS_PROD = 0;
    /**
     * REFUSED
     */
    public const STATUS_REFUSED = 1;
    /**
     * INSTALLED
     */
    public const STATUS_INSTALLED = 2;
    /**
     * NOT PLANNED
     */
    public const STATUS_NOT_PLANNED = 3;
    /**
     * PRE PROD
     */
    public const STATUS_PRE_PROD = 4;
    /**
     * CANDIDATE
     */
    public const STATUS_CANDIDATE = 5;
    /**
     * CANCELLED
     */
    public const STATUS_CANCELLED = 6;
    /**
     * CLIENT
     */
    public const STATUS_CLIENT = 7;
    /**
     * RD
     */
    public const STATUS_RD = 8;
    /**
     * LABO
     */
    public const STATUS_LABO = 9;
    /**
     * INSTALLED CONNECTED ONLY SECONDARY
     */
    public const STATUS_INSTALLED_CONNECTED_ONLY_SECONDARY = 14;
    /**
     * INSTALLED CONNECTED ONLY PRIMARY
     */
    public const STATUS_INSTALLED_CONNECTED_ONLY_PRIMARY = 15;
    /**
     * @var MinHost
     */
    protected ?MinHost $host = null;
    /**
     * external id of the site where the base station is installed
     *
     * @var int
     */
    protected ?int $candidateExternalId = null;
    /**
     * Site status
     * 
     * - {@see SimpleSite::STATUS_PROD}
     * - {@see SimpleSite::STATUS_REFUSED}
     * - {@see SimpleSite::STATUS_INSTALLED}
     * - {@see SimpleSite::STATUS_NOT_PLANNED}
     * - {@see SimpleSite::STATUS_PRE_PROD}
     * - {@see SimpleSite::STATUS_CANDIDATE}
     * - {@see SimpleSite::STATUS_CANCELLED}
     * - {@see SimpleSite::STATUS_CLIENT}
     * - {@see SimpleSite::STATUS_RD}
     * - {@see SimpleSite::STATUS_LABO}
     * - {@see SimpleSite::STATUS_INSTALLED_CONNECTED_ONLY_SECONDARY}
     * - {@see SimpleSite::STATUS_INSTALLED_CONNECTED_ONLY_PRIMARY}
     *
     * @var int
     */
    protected ?int $status = null;
    /**
     * id of the lessor of the site where the base station is installed
     *
     * @var string
     */
    protected ?string $lessorId = null;
    /**
     * @var string[]
     */
    protected ?array $actions = null;
    /**
     * Setter for host
     *
     * @param MinHost $host
     *
     * @return self To use in method chains
     */
    public function setHost(?MinHost $host) : self
    {
        $this->host = $host;
        return $this;
    }
    /**
     * Getter for host
     *
     * @return MinHost
     */
    public function getHost() : ?MinHost
    {
        return $this->host;
    }
    /**
     * Setter for candidateExternalId
     *
     * @param int $candidateExternalId external id of the site where the base station is installed
     *
     * @return self To use in method chains
     */
    public function setCandidateExternalId(?int $candidateExternalId) : self
    {
        $this->candidateExternalId = $candidateExternalId;
        return $this;
    }
    /**
     * Getter for candidateExternalId
     *
     * @return int external id of the site where the base station is installed
     */
    public function getCandidateExternalId() : ?int
    {
        return $this->candidateExternalId;
    }
    /**
     * Setter for status
     *
     * @param int $status Site status
     *                    
     *                    - {@see SimpleSite::STATUS_PROD}
     *                    - {@see SimpleSite::STATUS_REFUSED}
     *                    - {@see SimpleSite::STATUS_INSTALLED}
     *                    - {@see SimpleSite::STATUS_NOT_PLANNED}
     *                    - {@see SimpleSite::STATUS_PRE_PROD}
     *                    - {@see SimpleSite::STATUS_CANDIDATE}
     *                    - {@see SimpleSite::STATUS_CANCELLED}
     *                    - {@see SimpleSite::STATUS_CLIENT}
     *                    - {@see SimpleSite::STATUS_RD}
     *                    - {@see SimpleSite::STATUS_LABO}
     *                    - {@see SimpleSite::STATUS_INSTALLED_CONNECTED_ONLY_SECONDARY}
     *                    - {@see SimpleSite::STATUS_INSTALLED_CONNECTED_ONLY_PRIMARY}
     *                    
     *
     * @return self To use in method chains
     */
    public function setStatus(?int $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Getter for status
     *
     * @return int Site status
     *             
     *             - {@see SimpleSite::STATUS_PROD}
     *             - {@see SimpleSite::STATUS_REFUSED}
     *             - {@see SimpleSite::STATUS_INSTALLED}
     *             - {@see SimpleSite::STATUS_NOT_PLANNED}
     *             - {@see SimpleSite::STATUS_PRE_PROD}
     *             - {@see SimpleSite::STATUS_CANDIDATE}
     *             - {@see SimpleSite::STATUS_CANCELLED}
     *             - {@see SimpleSite::STATUS_CLIENT}
     *             - {@see SimpleSite::STATUS_RD}
     *             - {@see SimpleSite::STATUS_LABO}
     *             - {@see SimpleSite::STATUS_INSTALLED_CONNECTED_ONLY_SECONDARY}
     *             - {@see SimpleSite::STATUS_INSTALLED_CONNECTED_ONLY_PRIMARY}
     *             
     */
    public function getStatus() : ?int
    {
        return $this->status;
    }
    /**
     * Setter for lessorId
     *
     * @param string $lessorId id of the lessor of the site where the base station is installed
     *
     * @return self To use in method chains
     */
    public function setLessorId(?string $lessorId) : self
    {
        $this->lessorId = $lessorId;
        return $this;
    }
    /**
     * Getter for lessorId
     *
     * @return string id of the lessor of the site where the base station is installed
     */
    public function getLessorId() : ?string
    {
        return $this->lessorId;
    }
    /**
     * Setter for actions
     *
     * @param string[] $actions
     *
     * @return self To use in method chains
     */
    public function setActions(?array $actions) : self
    {
        $this->actions = $actions;
        return $this;
    }
    /**
     * Getter for actions
     *
     * @return string[]
     */
    public function getActions() : ?array
    {
        return $this->actions;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('host' => new ClassSerializer(MinHost::class), 'candidateExternalId' => new PrimitiveSerializer('int'), 'status' => new PrimitiveSerializer('int'), 'lessorId' => new PrimitiveSerializer('string'), 'actions' => new ArraySerializer(new PrimitiveSerializer('string')));
        $serializers = array_merge($serializers, parent::getSerializeMetaData());
        return $serializers;
    }
}