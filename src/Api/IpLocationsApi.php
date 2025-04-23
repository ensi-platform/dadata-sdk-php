<?php

namespace Ensi\DaDataClient\Api;

use Ensi\DaDataClient\DaDataHostEnum;
use Ensi\DaDataClient\Dto\Suggestions\Requests\SearchIpLocationsRequest;
use Ensi\DaDataClient\Dto\Suggestions\Responses\SearchIpLocationsResponse;
use Ensi\DaDataClient\RequestBuilder;
use GuzzleHttp\Promise\PromiseInterface;

class IpLocationsApi extends BaseApi
{
    public function searchAddress(SearchIpLocationsRequest $request): SearchIpLocationsResponse
    {
        return $this->send($this->searchAddressRequest($request), fn ($content) => new SearchIpLocationsResponse($content));
    }

    public function searchAddressAsync(SearchIpLocationsRequest $request): PromiseInterface
    {
        return $this->sendAsync($this->searchAddressRequest($request), fn ($content) => new SearchIpLocationsResponse($content));
    }

    protected function searchAddressRequest(SearchIpLocationsRequest $requestDto): RequestBuilder
    {
        return (new RequestBuilder('/suggestions/api/4_1/rs/iplocate/address', 'POST'))->json($requestDto);
    }

    protected function getHostTypeEnum(): string
    {
        return DaDataHostEnum::SUGGESTIONS;
    }
}
