<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/bangchamcong'], function (Router $router) {
    $router->bind('bangchamcong', function ($id) {
        return app('Modules\Bangchamcong\Repositories\BangchamcongRepository')->find($id);
    });
    $router->get('bangchamcongs', [
        'as' => 'admin.bangchamcong.bangchamcong.index',
        'uses' => 'BangchamcongController@index',
        'middleware' => 'can:bangchamcong.bangchamcongs.index'
    ]);
    $router->get('bangchamcongs/create', [
        'as' => 'admin.bangchamcong.bangchamcong.create',
        'uses' => 'BangchamcongController@create',
        'middleware' => 'can:bangchamcong.bangchamcongs.create'
    ]);
    $router->post('bangchamcongs', [
        'as' => 'admin.bangchamcong.bangchamcong.store',
        'uses' => 'BangchamcongController@store',
        'middleware' => 'can:bangchamcong.bangchamcongs.create'
    ]);
    $router->get('bangchamcongs/{bangchamcong}/edit', [
        'as' => 'admin.bangchamcong.bangchamcong.edit',
        'uses' => 'BangchamcongController@edit',
        'middleware' => 'can:bangchamcong.bangchamcongs.edit'
    ]);
    $router->put('bangchamcongs/{bangchamcong}', [
        'as' => 'admin.bangchamcong.bangchamcong.update',
        'uses' => 'BangchamcongController@update',
        'middleware' => 'can:bangchamcong.bangchamcongs.edit'
    ]);
    $router->delete('bangchamcongs/{bangchamcong}', [
        'as' => 'admin.bangchamcong.bangchamcong.destroy',
        'uses' => 'BangchamcongController@destroy',
        'middleware' => 'can:bangchamcong.bangchamcongs.destroy'
    ]);
// append
    $router->get('bangchamcongs/search', [
        'as' => 'admin.bangchamcong.bangchamcong.search',
        'uses' => 'BangchamcongController@search',
        'middleware' => 'can:bangchamcong.bangchamcongs.search'
    ]);

     $router->get('bangchamcongs/autocomplete', [
        'as' => 'admin.bangchamcong.bangchamcong.autocomplete',
        'uses' => 'BangchamcongController@autocomplete',
        'middleware' => 'can:bangchamcong.bangchamcongs.index'
    ]);

});
