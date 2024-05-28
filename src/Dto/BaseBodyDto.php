<?php

namespace Ensi\DaDataClient\Dto;

abstract class BaseBodyDto extends BaseRequestDto
{
    public function getBody(): array
    {
        return $this->toArray();
    }
}
