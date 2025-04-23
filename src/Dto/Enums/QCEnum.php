<?php

namespace Ensi\DaDataClient\Dto\Enums;

/**
 * Quality indicator
 */
class QCEnum
{
    /** @var string The address was recognized confidently */
    public const CONFIDENT = "0";
    /** @var string The address is empty or obviously "garbage" */
    public const EMPTY_OR_TRASH = "2";
    /** @var string The address contains extra parts or insufficient data */
    public const NEEDS_VERIFICATION = "1";
    /** @var string There are alternative options */
    public const HAS_ALTERNATIVES = "3";

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues(): array
    {
        return [
            self::CONFIDENT,
            self::EMPTY_OR_TRASH,
            self::NEEDS_VERIFICATION,
            self::HAS_ALTERNATIVES,
        ];
    }
}
