<?php

namespace Ensi\DaDataClient\Dto\Clean\Data;

use Ensi\DaDataClient\Dto\BaseDto;

/**
 * @property DivisionUnitData|null $area Район региона
 * @property DivisionUnitData|null $city Город
 * @property DivisionUnitData|null $city_district Район города
 * @property DivisionUnitData|null $settlement Населенный пункт
 * @property DivisionUnitData|null $planning_structure Планировочная структура
 */
class AdministrativeData extends BaseDto
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->mapAttribute('area', DivisionUnitData::class);
        $this->mapAttribute('city', DivisionUnitData::class);
        $this->mapAttribute('city_district', DivisionUnitData::class);
        $this->mapAttribute('settlement', DivisionUnitData::class);
        $this->mapAttribute('planning_structure', DivisionUnitData::class);
    }
}
