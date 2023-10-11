<?php

namespace Ensi\DaDataClient;

class Configuration
{
    private static Configuration $defaultConfiguration;

    /** @var string[] Associate array to store API key(s) */
    protected array $apiKeys = [];

    /** @var string The host */
    protected string $host = 'https://suggestions.dadata.ru';

    /** @var string User agent of the HTTP request, set to "Ensi/1.0.0/PHP" by default */
    protected string $userAgent = 'Ensi/1.0.0/PHP';

    public function setApiKey(string $apiKeyIdentifier, string $key): static
    {
        $this->apiKeys[$apiKeyIdentifier] = $key;

        return $this;
    }

    public function getApiKey(string $apiKeyIdentifier): ?string
    {
        return $this->apiKeys[$apiKeyIdentifier] ?? null;
    }

    public function setHost(string $host): static
    {
        $this->host = $host;

        return $this;
    }

    public function getHost(): string
    {
        return $this->host;
    }

    public function setUserAgent(string $userAgent): static
    {
        $this->userAgent = $userAgent;

        return $this;
    }

    public function getUserAgent(): string
    {
        return $this->userAgent;
    }

    public static function getDefaultConfiguration(): Configuration
    {
        if (self::$defaultConfiguration === null) {
            self::$defaultConfiguration = new Configuration();
        }

        return self::$defaultConfiguration;
    }

    public static function setDefaultConfiguration(Configuration $config): void
    {
        self::$defaultConfiguration = $config;
    }
}
