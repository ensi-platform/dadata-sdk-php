<?php

namespace Ensi\DaDataClient\Dto\Suggestions\Requests;

use Ensi\DaDataClient\Dto\BaseBodyDto;
use Webmozart\Assert\Assert;

/**
 * @property float $lat Географическая широта
 * @property float $lon Географическая долгота
 *
 * @property int|null $count Количество результатов
 * @property int|null $radius_meters Радиус поиска в метрах
 *
 * @property string|null $language На каком языке вернуть результат (see: LanguageEnum)
 * @property string|null $division Административное либо муниципальное деление (see: DivisionEnum)
 */
class SearchGeolocationsRequest extends BaseBodyDto
{
    public const MAX_COUNT = 20;
    public const MAX_RADIUS_METER = 1000;

    public function __construct(array $attributes = [])
    {
        Assert::nullOrRange($attributes['count'] ?? null, 1, self::MAX_COUNT);
        Assert::nullOrRange($attributes['radius_meters'] ?? null, 1, self::MAX_RADIUS_METER);

        parent::__construct($attributes);
    }
}
