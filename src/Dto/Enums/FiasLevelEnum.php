<?php

namespace Ensi\DaDataClient\Dto\Enums;

/**
 * ФИАС-код (он же код ГАР) адреса для России.
 * Идентификатор OpenStreetMap для Белоруссии, Казахстана и Узбекистана.
 * Для остальных стран — не заполняется.
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
            self::CITY_AREA => 'Район города',
            self::SETTLEMENT => 'Населенный пункт',
            self::STREET => 'Улица',
            self::HOUSE => 'Дом',
            self::FLAT => 'Квартира или комната',
            self::PLANNING_STRUCTURE => 'Планировочная структура',
            self::LAND_PLOT => 'Земельный участок',
            self::FOREIGN_OR_EMPTY => 'ИНостранный или пустой',
        ];
    }
}
