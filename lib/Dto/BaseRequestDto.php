<?php

namespace Ensi\DaDataClient\Dto;

abstract class BaseRequestDto extends BaseDto
{
    public function getBody(): mixed
    {
        return [];
    }

    public function getHeaders(): array
    {
        return [];
    }

    public function getQueryParams(): array
    {
        return [];
    }
}
