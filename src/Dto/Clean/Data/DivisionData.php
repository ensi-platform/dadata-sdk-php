<?php

namespace Ensi\DaDataClient\Dto\Clean\Data;

use Ensi\DaDataClient\Dto\BaseDto;

/**
 * @property AdministrativeData $administrative Components of an address in an administrative division
 */
class DivisionData extends BaseDto
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->mapAttribute('administrative', AdministrativeData::class);
    }
}
