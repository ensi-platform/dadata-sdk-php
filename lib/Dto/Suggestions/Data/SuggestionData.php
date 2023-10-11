<?php

namespace Ensi\DaDataClient\Dto\Suggestions\Data;

use Ensi\DaDataClient\Dto\BaseBodyDto;

/**
 * @property string $value Адрес одной строкой (как показывается в списке подсказок)
 * @property string $unrestricted_value Адрес одной строкой (полный, с индексом)
 * @property SuggestionAddressData $data
 */
class SuggestionData extends BaseBodyDto
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->mapAttribute('data', SuggestionAddressData::class);
    }
}
