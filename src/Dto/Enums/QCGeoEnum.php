<?php

namespace Ensi\DaDataClient\Dto\Enums;

/**
 * Coordinate precision code
 */
class QCGeoEnum
{
    public const EXACT = "0";
    public const HOUSE = "1";
    public const STREET = "2";
    public const SETTLEMENT = "3";
    public const CITY = "4";
    public const NOT_DEFINED = "5";

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues(): array
    {
        return [
            self::EXACT,
            self::HOUSE,
            self::STREET,
            self::SETTLEMENT,
            self::CITY,
            self::NOT_DEFINED,
        ];
    }
}
