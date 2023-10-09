<?php

namespace Ensi\DaDataClient;

use Ensi\DaDataClient\Dto\BaseRequestDto;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Query;
use GuzzleHttp\Psr7\Request;

class RequestBuilder
{
    protected array $queryParams = [];
    protected array $headerParams = [];
    protected mixed $body = null;

    public function __construct(
        protected string $resourcePath,
        protected string $method,
    ) {
    }

    public function json(BaseRequestDto $request): self
    {
        $headers = ['Accept' => 'application/json'];
        if ($request->getBody()) {
            $this->body = json_encode($request->getBody());
            $headers['Content-Type'] = 'application/json';
        }
        $this->fillFromRequest($request);
        $this->addHeaders($headers);

        return $this;
    }

    public function urlencoded(BaseRequestDto $request): self
    {
        $this->body = Query::build($request->getBody());
        $this->fillFromRequest($request);
        $this->addHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/x-www-form-urlencoded',
        ]);

        return $this;
    }

    protected function fillFromRequest(BaseRequestDto $request)
    {
        $this->addHeaders($request->getHeaders());
        $this->addQueryParams($request->getQueryParams());
    }

    public function addHeaders(array $headers): self
    {
        $this->headerParams = array_merge($this->headerParams, $headers);

        return $this;
    }

    public function addQueryParams(array $queryParams): self
    {
        $this->queryParams = array_merge($this->queryParams, $queryParams);

        return $this;
    }

    public function build(Configuration $config, ClientInterface $client): Request
    {
        $query = Query::build($this->queryParams);

        return new Request(
            $this->method,
            $config->getHost() . $this->resourcePath . ($query ? "?{$query}" : ''),
            array_merge(
                $this->headerParams,
                $this->getDefaultHeaders($config, $client),
            ),
            $this->body
        );
    }

    protected function getDefaultHeaders(Configuration $config, ClientInterface $client): array
    {
        $headers = [];
        if ($config->getUserAgent()) {
            $headers['User-Agent'] = $config->getUserAgent();
        }

        return array_merge($headers, $this->getAuthHeaders($config, $client));
    }

    protected function getAuthHeaders(Configuration $config, ClientInterface $client): array
    {
        return [];
    }
}
