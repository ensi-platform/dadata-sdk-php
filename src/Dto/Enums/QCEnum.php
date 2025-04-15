<?php

namespace Ensi\DaDataClient\Dto\Enums;

/**
 * Признак качества
 */
class QCEnum
{
    public const CONFIDENT = "0";
    public const EMPTY_OR_TRASH = "2";
    public const NEEDS_VERIFICATION = "1";
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

    /**
     * Gets descriptions for each qc code
     * @return string[]
     */
    public static function getDescriptions(): array
    {
        return [
            self::CONFIDENT => 'Адрес распознан уверенно',
            self::EMPTY_OR_TRASH => 'Адрес пустой или заведомо «мусорный»',
            self::NEEDS_VERIFICATION => 'Есть лишние части или недостаточно данных в адресе',
            self::HAS_ALTERNATIVES => 'Есть альтернативные варианты',
        ];
    }
}
