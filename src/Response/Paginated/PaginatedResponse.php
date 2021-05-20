<?php

namespace Arimac\Sigfox\Response\Paginated;

use Arimac\Sigfox\Model\Paging;

interface PaginatedResponse {
    function setData(?array $data): self;

    function getData(): ?array;

    function setPaging(?Paging $paging): self;

    function getPaging(): ?Paging;
}
