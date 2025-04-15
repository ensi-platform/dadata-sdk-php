<?php

namespace Ensi\DaDataClient\Dto\Enums;

/**
 * Код точности координат
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

    /**
     * Gets allowable values and titles of the enum
     * @return string[]
     */
    public static function getDescriptions(): array
    {
        return [
            self::EXACT => 'Точные координаты',
            self::HOUSE => 'Ближайший дом',
            self::STREET => 'Улица',
            self::SETTLEMENT => 'Населенный пункт',
            self::CITY => 'Город',
            self::NOT_DEFINED => 'Координаты не определены',
        ];
    }
}
