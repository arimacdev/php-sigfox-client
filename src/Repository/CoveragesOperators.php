<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\CoveragesOperatorsRedundancy;
class CoveragesOperators
{
    /**
     * @return CoveragesOperatorsRedundancy
     */
    public function redundancy() : CoveragesOperatorsRedundancy
    {
        return new CoveragesOperatorsRedundancy();
    }
}