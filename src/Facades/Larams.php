<?php

namespace Jefte\Larams\Facades;

use Illuminate\Support\Facades\Facade;
use Jefte\Larams\Contracts\LaramsService;

/**
 * @method static void route($params = [])
 */
class Larams extends Facade
{
    public static function getFacadeAccessor()
    {
        return LaramsService::class;
    }
}
