<?php

declare(strict_types=1);

namespace Zimuoo\DouyinOpenapi;

use Zimuoo\DouyinOpenapi\Support\Utils;
use Ydg\FoudationSdk\FoundationApi;
use Ydg\FoudationSdk\Traits\HasAttributes;

class DouyinClient extends FoundationApi
{
    use HasAttributes;

    protected $baseUri = 'https://open.douyin.com';

    public function getUri(string $method): string
    {
        return $this->getBaseUri() . $method;
    }

    public function getBaseUri(): string
    {
        return $this->baseUri;
    }

    public function setBaseUri(string $baseUri)
    {
        $this->baseUri = $baseUri;
    }

    public function json(string $method, array $param): ?array
    {
        $response = $this->getHttpClient()->json($this->getUri($method), $param, [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'access-token' => $this->offsetGet('access_token'),
            ],
        ]);
        return Utils::jsonResponseToArray($response);
    }

    public function post(string $method, array $param): ?array
    {
        $response = $this->getHttpClient()->post($this->getUri($method), $param, [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'access-token' => $this->offsetGet('access_token'),
            ],
        ]);
        return Utils::jsonResponseToArray($response);
    }

    public function get(string $method, array $param): ?array
    {
        $response = $this->getHttpClient()->get($this->getUri($method), $param, [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'access-token' => $this->offsetGet('access_token'),
            ],
        ]);
        return Utils::jsonResponseToArray($response);
    }

    public function getHttpClientDefaultOptions(): array
    {
        return [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'verify' => false,
        ];
    }
}
