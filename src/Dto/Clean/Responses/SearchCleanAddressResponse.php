<?php

namespace Ensi\DaDataClient\Dto\Clean\Responses;

use Ensi\DaDataClient\Dto\BaseResponseDto;
use Ensi\DaDataClient\Dto\Clean\Data\CleanAddressData;

/**
 * @property CleanAddressData $address Стандартизованный объект адреса
 */
class SearchCleanAddressResponse extends BaseResponseDto
{
    public function __construct(array $attributes = [])
    {
        parent::__construct();
        $this->address = new CleanAddressData($attributes[0]);
    }
}
