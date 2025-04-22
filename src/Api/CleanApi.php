<?php

namespace Ensi\DaDataClient\Api;

use Ensi\DaDataClient\DaDataHostEnum;
use Ensi\DaDataClient\Dto\Clean\Requests\SearchCleanAddressRequest;
use Ensi\DaDataClient\Dto\Clean\Responses\SearchCleanAddressResponse;
use Ensi\DaDataClient\RequestBuilder;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Methods are not included in the subscription. Each processed API request is paid for
 * More details in the documentation: https://dadata.ru/pricing/?product=clean
 */
class CleanApi extends BaseApi
{
    public function searchAddress(SearchCleanAddressRequest $request): SearchCleanAddressResponse
    {
        return $this->send($this->searchAddressRequest($request), fn ($content) => new SearchCleanAddressResponse($content));
    }

    public function searchAddressAsync(SearchCleanAddressRequest $request): PromiseInterface
    {
        return $this->sendAsync($this->searchAddressRequest($request), fn ($content) => new SearchCleanAddressResponse($content));
    }

    protected function searchAddressRequest(SearchCleanAddressRequest $requestDto): RequestBuilder
    {
        return (new RequestBuilder('/api/v1/clean/address', 'POST'))->json($requestDto);
    }

    protected function getHostTypeEnum(): string
    {
        return DaDataHostEnum::CLEAN;
    }
}
