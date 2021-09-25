<?php

namespace Jefte\Larams\Traits;

use Closure;
use Jefte\Larams\Controllers\MediaFilesController;

trait RoutesMediaFiles
{
    public static function routesMediaFiles($params, Closure $closure = null)
    {
        MediaFilesController::routes($params, $closure);
    }
}
