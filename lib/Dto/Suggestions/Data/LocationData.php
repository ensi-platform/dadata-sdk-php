<?php

namespace Ensi\DaDataClient\Dto\Suggestions\Data;

use Ensi\DaDataClient\Dto\BaseBodyDto;
use Webmozart\Assert\Assert;

/**
 * @property string $country_iso_code ISO-код страны
 * @property string $region_iso_code ISO-код региона
 * @property string $kladr_id КЛАДР
 * @property string $country Название страны
 * @property string $region Название региона
 * @property string $area Название района
 * @property string $city Название города
 * @property string $settlement Название населенного пункта
 * @property string $street Название улицы
 * @property float $lat Географическая широта
 * @property float $lon Географическая долгота
 * @property int $radius_meters Радиус поиска в метрах (по умолчанию – 100, максимум – 100000)
 * @property string $region_type_full Полный тип региона
 * @property string $area_type_full Полный тип района в регионе
 * @property string $city_type_full Полный тип города
 * @property string $settlement_type_full Полный тип населенного пункта
 * @property string $street_type_full Полный тип улицы
 * @property string $region_fias_id ФИАС-код региона
 * @property string $area_fias_id ФИАС-код области
 * @property string $city_fias_id ФИАС-код города
 * @property string $settlement_fias_id ФИАС-код населенного пункта
 * @property string $street_fias_id ФИАС-код улицы
 */
class LocationData extends BaseBodyDto
{
    public const MAX_RADIUS_METERS = 100_000;

    public function __construct(array $attributes = [])
    {
        Assert::nullOrRange(
            value: $attributes['radius_meters'] ?? null,
            min: 0,
            max: self::MAX_RADIUS_METERS
        );

        parent::__construct($attributes);
    }
}
