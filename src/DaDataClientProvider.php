<?php

namespace Ensi\DaDataClient;

class DaDataClientProvider
{
    public static array $apis = [
        '\Ensi\DaDataClient\Api\SuggestionsApi',
        '\Ensi\DaDataClient\Api\GeolocationsApi',
    ];

    public static string $configuration = Configuration::class;
}
