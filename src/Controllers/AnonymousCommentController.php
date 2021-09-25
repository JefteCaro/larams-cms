<?php

namespace Jefte\Larams\Controllers;

use App\Http\Controllers\Controller;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class AnonymousCommentController extends LaramsController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public static function routes($params = [], Closure $closure = null)
    {
        if(!isset($params['prefix']))
        {
            $params['prefix'] = 'anonymous-comments';
        }

        Route::group($params, function($closure) {

            Route::get('/', [
                'as' => '.anonymous-comments',
                'uses' => AnonymousCommentController::class . '@index',
            ]);

            Route::get('/{slug}', [
                'as' => '.anonymous-comments.show',
                'uses' => AnonymousCommentController::class . '@show',
            ]);

            Route::post('/', [
                'as' => '.anonymous-comments.create',
                'uses' => AnonymousCommentController::class . '@store',
            ]);

            Route::put('/{slug}', [
                'as' => '.anonymous-comments.update',
                'uses' => AnonymousCommentController::class . '@update',
            ]);

            Route::delete('/{slug}', [
                'as' => '.anonymous-comments.delete',
                'uses' => AnonymousCommentController::class . '@destroy',
            ]);

        });
    }

}
