<?php

namespace Ensi\DaDataClient\Dto\Suggestions\Responses;

use Ensi\DaDataClient\Dto\BaseResponseDto;
use Ensi\DaDataClient\Dto\Suggestions\Data\SuggestionData;

/**
 * @property SuggestionData[] $suggestions
 */
class SearchSuggestionsResponse extends BaseResponseDto
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->mapAttributeToArray('suggestions', SuggestionData::class);
    }
}
