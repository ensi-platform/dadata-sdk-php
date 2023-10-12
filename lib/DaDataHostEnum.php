<?php

namespace Ensi\DaDataClient;

class DaDataHostEnum
{
    public const SUGGESTIONS = 'suggestions';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues(): array
    {
        return [
            self::SUGGESTIONS,
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
        ];
    }
}
