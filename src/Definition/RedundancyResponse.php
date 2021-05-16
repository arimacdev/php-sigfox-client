<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Returned data for Service Coverage Redundancy API
 */
class RedundancyResponse extends Definition
{
    /**
     * The base station redundancy, 0 = none, 1 = 1 base station, 2 = 2 base stations, 3 = 3 base stations or more
     *
     * @var int
     */
    protected ?int $redundancy = null;
    /**
     * Setter for redundancy
     *
     * @param int $redundancy The base station redundancy, 0 = none, 1 = 1 base station, 2 = 2 base stations, 3 = 3
     *                        base stations or more
     *
     * @return self To use in method chains
     */
    public function setRedundancy(?int $redundancy) : self
    {
        $this->redundancy = $redundancy;
        return $this;
    }
    /**
     * Getter for redundancy
     *
     * @return int The base station redundancy, 0 = none, 1 = 1 base station, 2 = 2 base stations, 3 = 3 base
     *             stations or more
     */
    public function getRedundancy() : ?int
    {
        return $this->redundancy;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        return array('redundancy' => new PrimitiveSerializer('int'));
    }
}