<?php

namespace Ensi\DaDataClient\Dto\Suggestions\Responses;

use Ensi\DaDataClient\Dto\BaseResponseDto;
use Ensi\DaDataClient\Dto\Suggestions\Data\SuggestionData;

/**
 * @property SuggestionData|null $location
 */
class SearchIpLocationsResponse extends BaseResponseDto
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->mapAttribute('location', SuggestionData::class);
    }
}
