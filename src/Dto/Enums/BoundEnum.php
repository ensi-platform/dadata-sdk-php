<?php

namespace Ensi\DaDataClient\Dto\Enums;

class BoundEnum
{
    public const COUNTRY = 'country';
    public const REGION = 'region';
    public const AREA = 'area';
    public const CITY = 'city';
    public const SETTLEMENT = 'settlement';
    public const STREET = 'street';
    public const HOUSE = 'house';

    /**
     * Flat is supported only as a right boundary.
     * That is, you can specify house-flat or street-flat boundaries, but not just flat.
     *
     * DaData 21.12+ ver.
     */
    public const FLAT = 'flat';

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
            self::SETTLEMENT,
            self::STREET,
            self::HOUSE,
            self::FLAT,
        ];
    }
}
