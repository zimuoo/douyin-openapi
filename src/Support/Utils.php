<?php

declare(strict_types=1);

namespace Zimuoo\DouyinOpenapi\Support;

use Psr\Http\Message\ResponseInterface;

class Utils
{
    public static function arrayToJson(array $params): string
    {
        return json_encode($params, 320);
    }

    public static function jsonResponseToArray(ResponseInterface $response): ?array
    {
        return json_decode($response->getBody()->getContents(), true);
    }
}
