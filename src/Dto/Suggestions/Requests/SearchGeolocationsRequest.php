<?php

namespace Ensi\DaDataClient\Dto\Suggestions\Requests;

use Ensi\DaDataClient\Dto\BaseBodyDto;
use Webmozart\Assert\Assert;

/**
 * @property float $lat - latitude
 * @property float $lon - longitude
 *
 * @property int|null $count - count of results
 * @property int|null $radius_meters - search radius in meters
 *
 * @property string|null $language - response language (see: LanguageEnum)
 * @property string|null $division - administrative or municipal division (see: DivisionEnum)
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
