<?php

namespace Ensi\DaDataClient\Dto\Enums;

/**
 * The address's suitability code for mailing
 */
class QCCompleteEnum
{
    /** @var string Suitable for mailing */
    public const SUITABLE = "0";
    public const NO_REGION = "1";
    public const NO_CITY = "2";
    public const NO_STREET = "3";
    public const NO_HOUSE = "4";
    public const NO_FLAT = "5";
    public const INCOMPLETE = "6";
    public const FOREIGN = "7";
    /** @var string Suitable for emails, but not for courier delivery. */
    public const POSTAL_BOX = "8";
    /** @var string Check if Dadata parsed the source address correctly */
    public const VERIFY_SOURCE = "9";
    /** @var string There is no home in FIAS */
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
}
