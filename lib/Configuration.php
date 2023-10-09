<?php

namespace Ensi\DaDataClient;

class Configuration
{
    private static Configuration $defaultConfiguration;

    /** @var string[] Associate array to store API key(s) */
    protected array $apiKeys = [];

    /** @var string[] Associate array to store API prefix (e.g. Bearer) */
    protected array $apiKeyPrefixes = [];

    /** @var string Access token for OAuth/Bearer authentication */
    protected string $accessToken = '';

    /** @var string Username for HTTP basic authentication */
    protected string $username = '';

    /** @var string Password for HTTP basic authentication */
    protected string $password = '';

    /** @var string The host */
    protected string $host = 'http://localhost/api/v1';

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

    public function setApiKeyPrefix(string $apiKeyIdentifier, string $prefix): static
    {
        $this->apiKeyPrefixes[$apiKeyIdentifier] = $prefix;

        return $this;
    }

    public function getApiKeyPrefix(string $apiKeyIdentifier): ?string
    {
        return $this->apiKeyPrefixes[$apiKeyIdentifier] ?? null;
    }

    public function setAccessToken(string $accessToken): static
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;

        return $this;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
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

    public function getApiKeyWithPrefix(string $apiKeyIdentifier): ?string
    {
        $prefix = $this->getApiKeyPrefix($apiKeyIdentifier);
        $apiKey = $this->getApiKey($apiKeyIdentifier);

        if ($apiKey === null) {
            return null;
        }

        if ($prefix === null) {
            $keyWithPrefix = $apiKey;
        } else {
            $keyWithPrefix = $prefix . ' ' . $apiKey;
        }

        return $keyWithPrefix;
    }
}
