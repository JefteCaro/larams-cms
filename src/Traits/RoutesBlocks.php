<?php

namespace Jefte\Larams\Traits;

use Closure;
use Jefte\Larams\Controllers\BlocksController;

trait RoutesBlocks
{
    public static function routesBlocks($params, Closure $closure = null)
    {
        BlocksController::routes($params, $closure);
    }
}
