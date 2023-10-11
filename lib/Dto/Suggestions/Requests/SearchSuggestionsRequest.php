<?php

namespace Ensi\DaDataClient\Dto\Suggestions\Requests;

use Ensi\DaDataClient\Dto\BaseBodyDto;
use Ensi\DaDataClient\Dto\Suggestions\Data\BoundData;
use Ensi\DaDataClient\Dto\Suggestions\Data\LocationBoostData;
use Ensi\DaDataClient\Dto\Suggestions\Data\LocationData;
use Ensi\DaDataClient\Dto\Suggestions\Data\LocationGeoData;
use Webmozart\Assert\Assert;

/**
 * @property string $query Текст запроса
 * @property int $count Количество результатов (максимум 20)
 * @property string $language На каком языке вернуть результат (see: LanguageEnum)
 * @property string $division Административное либо муниципальное деление (see: DivisionEnum)
 * @property LocationData[] $locations Ограничение по сектору
 * @property LocationGeoData[] $locations_geo Ограничение по радиусу окружности
 * @property LocationBoostData[] $locations_boost Приоритет города при ранжировании
 * @property BoundData[] $from_bound Гранулярные подсказки
 * @property BoundData[] $to_bound Гранулярные подсказки
 */
class SearchSuggestionsRequest extends BaseBodyDto
{
    public const MAX_COUNT = 10;
    public const MAX_LOCATIONS = 100;

    public function __construct(array $attributes = [])
    {
        Assert::nullOrMaxCount($attributes['count'] ?? null, self::MAX_COUNT);
        Assert::nullOrMaxCount($attributes['locations'] ?? null, self::MAX_LOCATIONS);

        parent::__construct($attributes);

        $this->mapAttributeToArray('locations', LocationData::class);
        $this->mapAttributeToArray('locations_geo', LocationGeoData::class);
        $this->mapAttributeToArray('locations_boost', LocationBoostData::class);

        $this->mapAttributeToArray('from_bound', BoundData::class);
        $this->mapAttributeToArray('to_bound', BoundData::class);
    }
}
