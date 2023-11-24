<?php


namespace Zimuoo\DouyinOpenapi\Api\Life\OutsideDistribution;


use Zimuoo\DouyinOpenapi\DouyinClient;

class GoodsLife extends DouyinClient
{

    /***
     * @Notes:验券准备
     * @Interface certificate_prepare
     * @param $params
     * 参数code 原始的抖音团购券码 (encrypted_data/code必须二选一)
     * @return array|null
     * @author: yijun
     * @Time: 2023/11/24   4:55 下午
     */
    public function certificate_prepare($params): ?array
    {
        return $this->get('/goodlife/v1/fulfilment/certificate/prepare/', $params);
    }

    /**
     * @Notes:撤销核验
     * @Interface certificate_cancel
     * @param $params
     * @return array|null
     * @author: yijun
     * @Time: 2023/11/24   4:58 下午
     */
    public function certificate_cancel($params): ?array
    {
        return $this->json('/goodlife/v1/fulfilment/certificate/cancel/', $params);
    }
}