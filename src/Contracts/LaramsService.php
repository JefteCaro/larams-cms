<?php

namespace Jefte\Larams\Contracts;

use Illuminate\Support\Facades\Route;

class LaramsService
{
    /**
     * Generate Administration Routes for CMS
     *
     * @param array $params
     * @return void
     */
    public function routes($params = [])
    {
        if(!isset($params['prefix']))
        {
            $params['prefix'] = 'cms';
        }

        Route::group($params, function() {
            require __DIR__ . '../../resources/routes/cms.php';
        });
    }
}
