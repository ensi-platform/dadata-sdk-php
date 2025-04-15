<?php

namespace Ensi\DaDataClient\Dto\Enums;

/**
 * Признак центра района или региона
 */
class CapitalMarkerEnum
{
    # Центр района: Московская обл, Одинцовский р-н, г Одинцово
    public const CENTER_AREA = 1;

    # Центр региона: Новосибирская обл, г Новосибирск
    public const CENTER_REGION = 2;

    # Центр района и региона: Томская обл, г Томск
    public const CENTER_AREA_AND_REGION = 3;

    # Центральный район региона: Тюменская обл, Тюменский р-н
    public const CENTER_AREA_REGION = 4;

    # Ничего из перечисленного: Московская обл, г Балашиха
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

    /**
     * Gets allowable values and titles of the enum
     * @return array<int, string>
     */
    public static function getDescriptions(): array
    {
        return [
            self::CENTER_AREA => 'Центр района',
            self::CENTER_REGION => 'Центр региона',
            self::CENTER_AREA_AND_REGION => 'Центр района и региона',
            self::CENTER_AREA_REGION => 'Центральный район региона',
            self::EXCLUDE => 'Ничего из перечисленного',
        ];
    }
}
