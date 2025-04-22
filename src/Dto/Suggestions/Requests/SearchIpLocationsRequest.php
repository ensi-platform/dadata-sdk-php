<?php

namespace Ensi\DaDataClient\Dto\Suggestions\Requests;

use Ensi\DaDataClient\Dto\BaseBodyDto;

/**
 * @property string $ip - IP

 * @property string|null $language - response language (see: LanguageEnum)
 * @property string|null $division - administrative or municipal division (see: DivisionEnum)
 */
class SearchIpLocationsRequest extends BaseBodyDto
{
}
