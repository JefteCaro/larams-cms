<?php

namespace Jefte\Larams\Facades;

use Illuminate\Support\Facades\Facade;
use Jefte\Larams\Contracts\PageCache as ContractsPageCache;

/**
 * @method static bool create(\Illuminate\Http\Request $request, \Illuminate\Http\Response $response)
 * @method static void clear()
 */
class PageCache extends Facade
{
    public static function getFacadeAccessor()
    {
        return ContractsPageCache::class;
    }
}
