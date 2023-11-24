<?php

declare(strict_types=1);

namespace Zimuoo\DouyinOpenapi\Api\Life\GoodsLife;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Zimuoo\DouyinOpenapi\Api\Life\GoodsLife\GoodsLife;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * Registers services on the given container.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     */
    public function register(Container $pimple)
    {
        $pimple['goodsLife'] = function ($pimple) {
            return new GoodsLife(isset($pimple['config']) ? $pimple['config']->toArray() : []);
        };
    }
}
