<?php

namespace Ensi\DaDataClient;

class DaDataClientProvider
{
    public static array $apis = [
        '\Ensi\DaDataClient\Api\SuggestionsApi',
        '\Ensi\DaDataClient\Api\GeolocationsApi',
        '\Ensi\DaDataClient\Api\IpLocationsApi',
        '\Ensi\DaDataClient\Api\CleanApi',
    ];

    public static string $configuration = Configuration::class;
}
