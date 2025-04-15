<?php

namespace Ensi\DaDataClient\Dto\Enums;

/**
 * Подсказки могут возвращать адрес в административном либо в муниципальном делении.
 * Если параметр не задан, используется административное деление.
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

    /**
     * Gets allowable values and titles of the enum
     * @return string[]
     */
    public static function getDescriptions(): array
    {
        return [
            self::ADMINISTRATIVE => 'Административное',
            self::MUNICIPAL => 'Муниципальное',
        ];
    }
}
