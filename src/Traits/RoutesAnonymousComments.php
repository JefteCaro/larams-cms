<?php

namespace Jefte\Larams\Traits;

use Closure;
use Jefte\Larams\Controllers\AnonymousCommentController;

trait RoutesAnonymousComments
{
    public static function routeAnonymousComments($params, Closure $closure = null)
    {
        AnonymousCommentController::routes($params, $closure);
    }
}
