<?php

namespace Ensi\DaDataClient;

use Exception;
use Psr\Http\Message\ResponseInterface;

class ApiException extends Exception
{
    public function __construct($message = "", $code = 0, protected ?ResponseInterface $response = null)
    {
        parent::__construct($message, $code);
    }

    public function getResponseHeaders(): array
    {
        return $this->response?->getHeaders();
    }

    public function getResponseBody(): mixed
    {
        return $this->response ? json_decode($this->response->getBody(), true) : null;
    }
}
