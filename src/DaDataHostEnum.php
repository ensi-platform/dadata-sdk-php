<?php

namespace Ensi\DaDataClient;

class DaDataHostEnum
{
    /** @var string suggestions for addresses */
    public const SUGGESTIONS = 'suggestions';
    /** @var string standardization of addresses */
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
}
