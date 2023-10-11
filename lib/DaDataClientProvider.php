<?php

namespace Ensi\DaDataClient;

class DaDataClientProvider
{
    public static array $apis = [
        '\Ensi\DaDataClient\Api\SuggestionsApi',
    ];

    public static string $configuration = Configuration::class;
}
