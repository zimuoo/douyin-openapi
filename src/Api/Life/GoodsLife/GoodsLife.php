<?php


namespace Zimuoo\DouyinOpenapi\Api\Life\GoodsLife;


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
    public function certificate_prepare($params,$accessToken=''): ?array
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
    public function certificate_cancel($params,$accessToken=''): ?array
    {
        return $this->json('/goodlife/v1/fulfilment/certificate/cancel/', $params);
    }

    /**
     * @Notes:券状态查询
     * @Interface certificate_get
     * @param $params
     * encrypted_code  验券准备接口返回的加密券码（传参前需要先进行URL编码）
     * @return array|null
     * @author: yijun
     * @Time: 2023/11/24   5:21 下午
     */
    public function certificate_get($params,$accessToken=''): ?array
    {
        return $this->get('/goodlife/v1/fulfilment/certificate/get/', $params);
    }

    /**
     * @Notes:验券
     * @Interface certificate_verify
     * @param $params
     * @return array|null
     * @author: yijun
     * @Time: 2023/11/24   5:23 下午
     */
    public function certificate_verify($params,$accessToken=''): ?array
    {
        return $this->json('/goodlife/v1/fulfilment/certificate/verify/', $params);
    }
}