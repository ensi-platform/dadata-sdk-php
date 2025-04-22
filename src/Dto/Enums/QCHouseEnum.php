<?php

namespace Ensi\DaDataClient\Dto\Enums;

/**
 * Indicates the presence of a house in FIAS
 */
class QCHouseEnum
{
    public const FOUND_IN_FIAS = "2";
    public const NOT_FOUND_IN_FIAS = "10";

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues(): array
    {
        return [
            self::FOUND_IN_FIAS,
            self::NOT_FOUND_IN_FIAS,
        ];
    }

    /**
     * Gets allowable values and titles of the enum
     * @return string[]
     */
    public static function getDescriptions(): array
    {
        return [
            self::FOUND_IN_FIAS => 'Дом найден в ФИАС',
            self::NOT_FOUND_IN_FIAS => 'Дом не найден в ФИАС',
        ];
    }
}
