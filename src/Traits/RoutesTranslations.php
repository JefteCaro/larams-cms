<?php

namespace Jefte\Larams\Traits;

use Closure;
use Jefte\Larams\Controllers\TranslationsController;

trait RoutesTranslations
{
    public static function routesTranslations($params, Closure $closure = null)
    {
        TranslationsController::routes($params, $closure);
    }
}
