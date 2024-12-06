<?php

namespace Ensi\DaDataClient\Api;

use Ensi\DaDataClient\DaDataHostEnum;
use Ensi\DaDataClient\Dto\Suggestions\Requests\SearchGeolocationsRequest;
use Ensi\DaDataClient\Dto\Suggestions\Responses\SearchGeolocationsResponse;
use Ensi\DaDataClient\RequestBuilder;

class GeolocationsApi extends BaseApi
{
    public function searchAddress(SearchGeolocationsRequest $request): SearchGeolocationsResponse
    {
        return $this->send($this->searchAddressRequest($request), fn ($content) => new SearchGeolocationsResponse($content));
    }

    public function searchAddressAsync(SearchGeolocationsRequest $request): PromiseInterface
    {
        return $this->sendAsync($this->searchAddressRequest($request), fn ($content) => new SearchGeolocationsResponse($content));
    }

    protected function searchAddressRequest(SearchGeolocationsRequest $requestDto): RequestBuilder
    {
        return (new RequestBuilder('/suggestions/api/4_1/rs/geolocate/address', 'POST'))->json($requestDto);
    }

    protected function getHostTypeEnum(): string
    {
        return DaDataHostEnum::SUGGESTIONS;
    }
}
