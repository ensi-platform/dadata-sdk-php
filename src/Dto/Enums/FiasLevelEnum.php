<?php

namespace Ensi\DaDataClient\Dto\Enums;

/**
 * FIAS code (aka GAR code) of the address for Russia.
 * OpenStreetMap identifier for Belarus, Kazakhstan and Uzbekistan.
 * For other countries — not filled.
 */
class FiasLevelEnum
{
    public const COUNTRY = "0";
    public const REGION = "1";
    public const AREA = "3";
    public const CITY = "4";
    public const CITY_AREA = "5";
    public const SETTLEMENT = "6";
    public const STREET = "7";
    public const HOUSE = "8";
    public const FLAT = "9";
    public const PLANNING_STRUCTURE = "65";
    public const LAND_PLOT = "75";
    public const FOREIGN_OR_EMPTY = "-1";

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues(): array
    {
        return [
            self::COUNTRY,
            self::REGION,
            self::AREA,
            self::CITY,
            self::CITY_AREA,
            self::SETTLEMENT,
            self::STREET,
            self::HOUSE,
            self::FLAT,
            self::PLANNING_STRUCTURE,
            self::LAND_PLOT,
            self::FOREIGN_OR_EMPTY,
        ];
    }
}
