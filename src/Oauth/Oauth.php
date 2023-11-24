<?php

declare(strict_types=1);

namespace Zimuoo\DouyinOpenapi\Oauth;

use Zimuoo\DouyinOpenapi\DouyinClient;
use Zimuoo\DouyinOpenapi\Support\Utils;

class Oauth extends DouyinClient
{
    /**
     * 生成 client_token
     * @param $params
     * @return array
     * @example params['client_secret'] 应用密钥
     * @example params['grant_type']    授权类型
     * @example params['client_key']    应用标识
     */
    public function client_token($params): ?array
    {
        $params['grant_type'] = $params['grant_type'] ?? 'client_credential';
        $response = $this->getHttpClient()->post($this->getUri('/oauth/client_token'), $params);
        return Utils::jsonResponseToArray($response);
    }

}
