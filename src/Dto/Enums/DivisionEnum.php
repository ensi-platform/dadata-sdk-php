<?php

namespace Ensi\DaDataClient\Dto\Enums;

/**
 * Hints can return an address in either an administrative or municipal division.
 * If the parameter is not specified, the administrative division is used.
 */
class DivisionEnum
{
    public const ADMINISTRATIVE = 'administrative';
    public const MUNICIPAL = 'municipal';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues(): array
    {
        return [
            self::ADMINISTRATIVE,
            self::MUNICIPAL,
        ];
    }
}
