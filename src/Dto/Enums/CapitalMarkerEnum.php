<?php

namespace Ensi\DaDataClient\Dto\Enums;

/**
 * District or region center indicator
 */
class CapitalMarkerEnum
{
    # District center: Moscow region, Odintsovo district, Odintsovo city
    public const CENTER_AREA = 1;

    # Regional center: Novosibirsk region, Novosibirsk city
    public const CENTER_REGION = 2;

    # District and regional center: Tomsk region, Tomsk
    public const CENTER_AREA_AND_REGION = 3;

    # Central region of the region: Tyumen region, Tyumen district
    public const CENTER_AREA_REGION = 4;

    # None of the above: Moscow region, Balashikha
    public const EXCLUDE = 0;

    /**
     * Gets allowable values of the enum
     * @return int[]
     */
    public static function getAllowableEnumValues(): array
    {
        return [
            self::CENTER_AREA,
            self::CENTER_REGION,
            self::CENTER_AREA_AND_REGION,
            self::CENTER_AREA_REGION,
            self::EXCLUDE,
        ];
    }
}
