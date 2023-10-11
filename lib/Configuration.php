<?php

namespace Ensi\DaDataClient;

use InvalidArgumentException;

class Configuration
{
    private static Configuration $defaultConfiguration;

    protected ?string $apiKey = null;
    protected ?string $secretKey = null;
    protected string $suggestionsHost = 'https://suggestions.dadata.ru';

    /** @var string User agent of the HTTP request, set to "Ensi/1.0.0/PHP" by default */
    protected string $userAgent = 'Ensi/1.0.0/PHP';

    public function setSecretKey(string $secret): static
    {
        $this->secretKey = $secret;

        return $this;
    }

    public function getSecretKey(): ?string
    {
        return $this->secretKey;
    }

    public function setApiKey(string $key): static
    {
        $this->apiKey = $key;

        return $this;
    }

    public function getApiKey(): ?string
    {
        return $this->apiKey;
    }

    public function setSuggestionsHost(string $host): static
    {
        $this->suggestionsHost = $host;

        return $this;
    }

    public function getSuggestionsHost(): string
    {
        return $this->suggestionsHost;
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

    public function getHost(string $hostTypeEnum): string
    {
        return match ($hostTypeEnum) {
            DaDataHostEnum::SUGGESTIONS => $this->getSuggestionsHost(),
            default => throw new InvalidArgumentException("Host type {$hostTypeEnum} not found"),
        };
    }
}
