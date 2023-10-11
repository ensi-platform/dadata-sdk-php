<?php

namespace Ensi\DaDataClient\Dto\Suggestions\Data;

use Ensi\DaDataClient\Dto\BaseBodyDto;
use Webmozart\Assert\Assert;

/**
 * Ограничение по радиусу окружности
 * Работает в «Подсказках» 20.4+.
 * Требует лицензию на модули address и geo.
 *
 * @property float $lat Географическая широта
 * @property float $lon Географическая долгота
 * @property int $radius_meters Радиус поиска в метрах (по умолчанию – 100, максимум – 100000)
 */
class LocationGeoData extends BaseBodyDto
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
