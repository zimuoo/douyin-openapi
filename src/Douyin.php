<?php

declare(strict_types=1);

namespace Zimuoo\DouyinOpenapi;

use Ydg\FoudationSdk\ServiceContainer;

/**
 * @property Oauth\Oauth $oauth
 * @property Api\Life\OutsideDistribution\OutsideDistribution $lifeOutsideDistribution
 * @property Api\Life\OutsideDistribution\OutsideDistribution $goodsLife
 */
class Douyin extends ServiceContainer
{
    protected $providers = [
        Oauth\ServiceProvider::class,
        Api\Life\OutsideDistribution\ServiceProvider::class,
        Api\Life\GoodsLife\ServiceProvider::class,
    ];
}
