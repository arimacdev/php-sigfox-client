<?php

namespace Arimac\Sigfox\Repository;

class Coverages
{
    /**
     * @return CoveragesGlobal
     */
    public function global() : CoveragesGlobal
    {
        return new CoveragesGlobal();
    }
}