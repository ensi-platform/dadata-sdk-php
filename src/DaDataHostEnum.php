<?php

namespace Ensi\DaDataClient;

class DaDataHostEnum
{
    public const SUGGESTIONS = 'suggestions';
    public const CLEAN = 'clean';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues(): array
    {
        return [
            self::SUGGESTIONS,
            self::CLEAN,
        ];
    }

    /**
     * Gets allowable values and titles of the enum
     * @return string[]
     */
    public static function getDescriptions(): array
    {
        return [
            self::SUGGESTIONS => 'API: подсказки по адресам',
            self::CLEAN => 'API: стандартизация адресов',
        ];
    }
}
