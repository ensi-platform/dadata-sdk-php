<?php

namespace Ensi\DaDataClient\Dto\Suggestions\Data;

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
     * Квартира поддерживается только как правая граница.
     * То есть можно указать границы house-flat или street-flat, но не просто flat.
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

    /**
     * Gets allowable values and titles of the enum
     * @return string[]
     */
    public static function getDescriptions(): array
    {
        return [
            self::COUNTRY => 'Страна',
            self::REGION => 'Регион',
            self::AREA => 'Район',
            self::CITY => 'Город',
            self::SETTLEMENT => 'Населенный пункт',
            self::STREET => 'Улица',
            self::HOUSE => 'Дом',
            self::FLAT => 'Квартира',
        ];
    }
}