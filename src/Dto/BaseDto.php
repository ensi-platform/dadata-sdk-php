<?php

namespace Ensi\DaDataClient\Dto;

use JsonSerializable;

abstract class BaseDto implements JsonSerializable
{
    protected array $attributes = [];

    public function __construct(array $attributes = [])
    {
        foreach ($attributes as $key => $value) {
            $this->__set($key, $value);
        }
    }

    public function get(string $key, mixed $default = null): mixed
    {
        if (array_key_exists($key, $this->attributes)) {
            return $this->attributes[$key];
        }

        return $default;
    }

    public function toArray(): array
    {
        return $this->attributes;
    }

    public function __get($key)
    {
        return $this->get($key);
    }

    public function __set($key, $value)
    {
        $this->attributes[$key] = $value;
    }

    public function __isset($key)
    {
        return isset($this->attributes[$key]);
    }

    public function __unset($key)
    {
        unset($this->attributes[$key]);
    }

    protected function mapAttributeToArray(string $key, string $class, $default = []): void
    {
        $values = $this->get($key);
        if (is_null($values)) {
            $this->__set($key, $default);

            return;
        }

        $result = [];
        foreach ($values as $value) {
            $result[] = new $class($value);
        }

        $this->__set($key, $result);
    }

    protected function mapAttribute(string $key, string $class, $default = null): void
    {
        $value = $this->get($key);
        if (is_null($value)) {
            $this->__set($key, $default);

            return;
        }

        $this->__set($key, new $class($value));
    }

    public function jsonSerialize(): array
    {
        return $this->attributes;
    }
}
