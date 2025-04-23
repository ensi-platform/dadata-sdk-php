<?php

namespace Ensi\DaDataClient\Dto\Enums;

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
}
