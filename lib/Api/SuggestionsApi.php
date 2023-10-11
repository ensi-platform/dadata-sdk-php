<?php

namespace Ensi\DaDataClient\Api;

use Ensi\DaDataClient\Dto\Suggestions\Requests\SearchSuggestionsRequest;
use Ensi\DaDataClient\Dto\Suggestions\Responses\SearchSuggestionsResponse;
use Ensi\DaDataClient\RequestBuilder;
use GuzzleHttp\Promise\PromiseInterface;

class SuggestionsApi extends BaseApi
{
    public function searchAddress(SearchSuggestionsRequest $request): SearchSuggestionsResponse
    {
        return $this->send($this->searchAddressRequest($request), fn ($content) => new SearchSuggestionsResponse($content));
    }

    public function searchAddressAsync(SearchSuggestionsRequest $request): PromiseInterface
    {
        return $this->sendAsync($this->searchAddressRequest($request), fn ($content) => new SearchSuggestionsResponse($content));
    }

    protected function searchAddressRequest(SearchSuggestionsRequest $requestDto): RequestBuilder
    {
        return (new RequestBuilder('/suggestions/api/4_1/rs/suggest/address', 'POST'))->json($requestDto);
    }
}
