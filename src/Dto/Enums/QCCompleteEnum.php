<?php

namespace Ensi\DaDataClient\Dto\Enums;

/**
 * The address's suitability code for mailing
 */
class QCCompleteEnum
{
    public const SUITABLE = "0";
    public const NO_REGION = "1";
    public const NO_CITY = "2";
    public const NO_STREET = "3";
    public const NO_HOUSE = "4";
    public const NO_FLAT = "5";
    public const INCOMPLETE = "6";
    public const FOREIGN = "7";
    public const POSTAL_BOX = "8";
    public const VERIFY_SOURCE = "9";
    public const NO_FIAS_HOUSE = "10";

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues(): array
    {
        return [
            self::SUITABLE,
            self::NO_REGION,
            self::NO_CITY,
            self::NO_STREET,
            self::NO_HOUSE,
            self::NO_FLAT,
            self::INCOMPLETE,
            self::FOREIGN,
            self::POSTAL_BOX,
            self::VERIFY_SOURCE,
            self::NO_FIAS_HOUSE,
        ];
    }

    /**
     * Gets allowable values and titles of the enum
     * @return string[]
     */
    public static function getDescriptions(): array
    {
        return [
            self::SUITABLE => 'Пригоден для почтовой рассылки',
            self::NO_REGION => 'Нет региона',
            self::NO_CITY => 'Нет города',
            self::NO_STREET => 'Нет улицы',
            self::NO_HOUSE => 'Нет дома',
            self::NO_FLAT => 'Нет квартиры. Подходит для юрлиц или частных владений',
            self::INCOMPLETE => 'Адрес неполный',
            self::FOREIGN => 'Иностранный адрес',
            self::POSTAL_BOX => 'Абонентский ящик или до востребования. Подходит для писем, но не для курьерской доставки.',
            self::VERIFY_SOURCE => 'Проверьте, правильно ли Дадата разобрала исходный адрес',
            self::NO_FIAS_HOUSE => 'Дома нет в ФИАС',
        ];
    }
}
