<?php

declare(strict_types=1);

namespace Zimuoo\DouyinOpenapi;

use Ydg\FoudationSdk\ServiceContainer;

/**
 * @property Oauth\Oauth $oauth
 * @property Zimuoo\DouyinOpenapi\Api\Life\GoodsLife\OutsideDistribution $lifeOutsideDistribution
 * @property Zimuoo\DouyinOpenapi\Api\Life\GoodsLife\OutsideDistribution $goodsLife
 */
class Douyin extends ServiceContainer
{
    protected $providers = [
        Oauth\ServiceProvider::class,
        Zimuoo\DouyinOpenapi\Api\Life\GoodsLife\ServiceProvider::class,
        Api\Life\GoodsLife\ServiceProvider::class,
    ];
}
