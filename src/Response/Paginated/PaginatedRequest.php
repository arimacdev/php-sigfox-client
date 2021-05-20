<?php

namespace Arimac\Sigfox\Response\Paginated;

interface PaginatedRequest {
    function setLimit(?int $limit): self;

    function getLimit():?int;

    function setOffset(?int $offset): self;

    function getOffset():?int;
}
