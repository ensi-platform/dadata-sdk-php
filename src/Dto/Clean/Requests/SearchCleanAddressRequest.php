<?php

namespace Ensi\DaDataClient\Dto\Clean\Requests;

use Ensi\DaDataClient\Dto\BaseBodyDto;

/**
 * @property string $query Query text
 */
class SearchCleanAddressRequest extends BaseBodyDto
{
    public function getBody(): array
    {
        return [$this->query];
    }
}
