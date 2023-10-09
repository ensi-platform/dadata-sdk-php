<?php

namespace Ensi\DaDataClient\Api;

use Ensi\DaDataClient\Dto\Example\ExampleRequest;
use Ensi\DaDataClient\Dto\Example\ExampleResponse;
use Ensi\DaDataClient\RequestBuilder;
use GuzzleHttp\Promise\PromiseInterface;

class ExampleApi extends BaseApi
{
    public function example(ExampleRequest $request): ExampleResponse
    {
        return $this->send($this->exampleRequest($request), fn ($content) => new ExampleResponse($content));
    }

    public function exampleAsync(ExampleRequest $request): PromiseInterface
    {
        return $this->sendAsync($this->exampleRequest($request), fn ($content) => new ExampleResponse($content));
    }

    protected function exampleRequest(ExampleRequest $requestDto): RequestBuilder
    {
        return (new RequestBuilder('/example/endpoint', 'GET'))->json($requestDto);
    }
}
