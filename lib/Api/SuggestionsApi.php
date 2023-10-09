<?php

namespace Ensi\DaDataClient\Api;

use Ensi\DaDataClient\Dto\Suggestions\Requests\SearchSuggestionsRequest;
use Ensi\DaDataClient\Dto\Suggestions\Responses\SearchSuggestionsResponse;
use Ensi\DaDataClient\RequestBuilder;
use GuzzleHttp\Promise\PromiseInterface;

class SuggestionsApi extends BaseApi
{
    public function example(SearchSuggestionsRequest $request): SearchSuggestionsResponse
    {
        return $this->send($this->exampleRequest($request), fn ($content) => new SearchSuggestionsResponse($content));
    }

    public function exampleAsync(SearchSuggestionsRequest $request): PromiseInterface
    {
        return $this->sendAsync($this->exampleRequest($request), fn ($content) => new SearchSuggestionsResponse($content));
    }

    protected function exampleRequest(SearchSuggestionsRequest $requestDto): RequestBuilder
    {
        return (new RequestBuilder('/suggestions/api/4_1/rs/suggest/address', 'POST'))->json($requestDto);
    }
}
