<?php

namespace Ensi\DaDataClient;

class DaDataKeyEnum
{
    public const API_KEY = 'key';
    public const SECRET_KEY = 'secret';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues(): array
    {
        return [
            self::API_KEY,
            self::SECRET_KEY,
        ];
    }

    /**
     * Gets allowable values and titles of the enum
     * @return string[]
     */
    public static function getDescriptions(): array
    {
        return [
            self::API_KEY => 'API-ключ',
            self::SECRET_KEY => 'Секретный ключ',
        ];
    }
}
