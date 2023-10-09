<?php

namespace Ensi\DaDataClient\Dto;

abstract class BaseQueryDto extends BaseRequestDto
{
    public function getQueryParams(): array
    {
        return $this->toArray();
    }
}
