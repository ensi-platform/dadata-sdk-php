<?php

namespace Ensi\DaDataClient\Dto\Suggestions\Data;

class LanguageEnum
{
    public const RU = 'ru';
    public const EN = 'en';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues(): array
    {
        return [
            self::RU,
            self::EN,
        ];
    }

    /**
     * Gets allowable values and titles of the enum
     * @return string[]
     */
    public static function getDescriptions(): array
    {
        return [
            self::RU => 'Русский',
            self::EN => 'Латиница',
        ];
    }
}