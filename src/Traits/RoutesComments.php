<?php

namespace Jefte\Larams\Traits;

use Closure;
use Jefte\Larams\Controllers\CommentsController;

trait RoutesComments
{
    public static function routesComments($params, Closure $closure = null)
    {
        CommentsController::routes($params, $closure);
    }
}
