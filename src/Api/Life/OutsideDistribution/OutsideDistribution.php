<?php

declare(strict_types=1);

namespace Zimuoo\DouyinOpenapi\Api\Life\OutsideDistribution;

use Zimuoo\DouyinOpenapi\DouyinClient;

class OutsideDistribution extends DouyinClient
{
    /**
     * 口令解析&转链
     * @param $params
     * @return array
     * @example params['uid'] 抖音的达人账号UID
     * @example params['command'] 商品ID/商品URL/短链/口令
     * @example params['share_params'] 转链参数，⽆需转链不传
     * @example params['share_params']['pid'] 转链pid
     * @example params['share_params']['external_info'] ⾃定义字段，只允许 数字、字母和_，限制长度为40
     * @example params['share_params']['platform'] ⾃回流端标识 0：抖音，1：抖音极速版，默认 0
     * @example params['share_params']['need_qr_code'] ⾃是否需要⼆维码，默认false
     * @example params['share_params']['need_share_link'] ⾃是否返回站外H5链接, 默认false
     * @example params['share_params']['need_zlink'] ⾃是否返回zlink，默认false
     * @example params['share_params']['need_command'] ⾃是否需要⼝令，默认false
     */
    public function command_parse_and_share($params): ?array
    {
        return $this->json('/api/life/v1/outside_distribution/command_parse_and_share/', $params);
    }

    /**
     * 分销商品列表查询
     * @param $params
     * @return array
     * @example params['uid'] 抖音的达人账号UID
     * @example params['cursor'] 查询光标起点，默认0
     * @example params['count'] 本次查询数量，需⼩于20。（response可能因为过滤等原因，返回数量小于count）
     * @example params['city_code'] 中国城市city_code（市级）
     * @example params['longitude']⽤⼾位置的经度(WGS84坐标)。如果不传，默认北京王府井
     * @example params['latitude']⽤⼾位置的纬度(WGS84坐标)。如果不传，默认北京王府井
     * @example params['key_word']⽤⼾查询关键字(支持商品名查询)
     * @example params['sort_by']⽤⼾排序类型，可选： 1-距离,2-销量,3-优惠前价格,4-佣金率
     * @example params['order_by']⽤⼾排序顺序：1-升序，2-降序
     * @example params['category_id']⽤⼾筛选项：商品类⽬-任意级别
     * @example params['need_invoice']⽤⼾筛选项：筛选项：是否需要发票（商家给出分佣佣金后需要发票）
     */
    public function search_product($params,$accessToken=''): ?array
    {
        return $this->json('/api/life/v1/outside_distribution/search_product/', $params);
    }

    /**
     * 商品详情查询
     * @param $params
     * @return array
     * @example params['uid'] 抖音的达人账号UID
     * @example params['city_code'] 中国城市city_code（市级）
     * @example params['longitude']⽤⼾位置的经度(WGS84坐标)。如果不传，默认北京王府井
     * @example params['latitude']⽤⼾位置的纬度(WGS84坐标)。如果不传，默认北京王府井
     * @example params['product_id_list']⽤⼾商品id列表，示例：[456,789]
     */
    public function mget_produce_by_id($params,$accessToken=''): ?array
    {
        return $this->json('/api/life/v1/outside_distribution/mget_produce_by_id/', $params);
    }

    /**
     * 子订单查询
     * @param $params
     * @return array
     * @example params['uid'] 抖音的达人账号UID
     * @example params['cursor'] 查询光标起点，第一次查询传空字符串""
     * @example params['count'] 本次查询数量，需小于50。（response可能因为过滤等原因，返回数量小于count）
     * @example params['pid'] PID
     * @example params['external_info'] 分销机构在发起转链时自定义的external_info
     * @example params['item_order_id_list'] 订单id
     * @example params['pay_time_begin']⽤⼾筛选项：订单支付时间的开始值（秒级时间戳）
     * @example params['pay_time_end']⽤筛选项：订单支付时间的结束值（秒级时间戳）
     * @example params['update_time_begin']⽤⼾筛选项：订单更新时间的开始值（秒级时间戳）
     * @example params['update_time_end']⽤筛选项：订单更新时间的结束值（秒级时间戳）
     */
    public function query_order($params,$accessToken=''): ?array
    {
        return $this->json('/api/life/v1/outside_distribution/query_order/', $params);
    }

    /**
     * 订单信息离线下载
     * @param $params
     * @return array
     * @example params['uid'] 抖音的达人账号UID
     * @example params['date'] 日期，如想下载2023年8月15号的订单，传2023-08-15
     * @example params['file_type'] 固定传 1 订单
     */
    public function download($params,$accessToken=''): ?array
    {
        return $this->json('/api/life/v1/outside_distribution/download/', $params);
    }

    /**
     * PID创建
     * @param $params
     * @return array
     * @example params['uid'] 抖音的达人账号UID
     * @example params['media_type'] 渠道类型，-1:其他, 1:微信, 2:QQ, 3:微博, 4:抖音, 5:头条
     * @example params['media_id'] 渠道id，不传默认生成
     * @example params['media_name'] 渠道名
     * @example params['site_id'] 推广位ID，不传默认生成
     * @example params['site_name'] 推广位名
     */
    public function create_pid($params,$accessToken=''): ?array
    {
        return $this->json('/api/life/v1/outside_distribution/create_pid/', $params);
    }

    /**
     * PID编辑
     * @param $params
     * @return array
     * @example params['uid'] 抖音的达人账号UID
     * @example params['pid'] PID
     * @example params['media_name'] 渠道名
     * @example params['site_name'] 推广位名
     */
    public function modify_pid($params,$accessToken=''): ?array
    {
        return $this->json('/api/life/v1/outside_distribution/modify_pid/', $params);
    }

    /**
     * PID查询
     * @param $params
     * @return array
     * @example params['uid'] 抖音的达人账号UID
     * @example params['pid'] PID
     * @example params['media_id'] 渠道ID
     * @example params['site_id'] 推广位ID
     * @example params['cursor'] 起始值为0，获取更多数据，需带上上次请求返回的cursor
     * @example params['count'] 获取数量
     */
    public function query_pid($params,$accessToken=''): ?array
    {
        return $this->json('/api/life/v1/outside_distribution/query_pid/', $params);
    }

    /**
     * PID删除
     * @param $params
     * @return array
     * @example params['uid'] 抖音的达人账号UID
     * @example params['pids'] PID列表，示例：['dy_123','dy_456']
     */
    public function delete_pid($params,$accessToken=''): ?array
    {
        return $this->json('/api/life/v1/outside_distribution/delete_pid/', $params);
    }
}
