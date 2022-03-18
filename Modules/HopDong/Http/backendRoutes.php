<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/hopdong'], function (Router $router) {
    $router->bind('hopdong', function ($id) {
        return app('Modules\HopDong\Repositories\HopdongRepository')->find($id);
    });
    $router->get('hopdongs', [
        'as' => 'admin.hopdong.hopdong.index',
        'uses' => 'HopdongController@index',
        'middleware' => 'can:hopdong.hopdongs.index'
    ]);
    $router->get('hopdongs/create', [
        'as' => 'admin.hopdong.hopdong.create',
        'uses' => 'HopdongController@create',
        'middleware' => 'can:hopdong.hopdongs.create'
    ]);
    $router->post('hopdongs', [
        'as' => 'admin.hopdong.hopdong.store',
        'uses' => 'HopdongController@store',
        'middleware' => 'can:hopdong.hopdongs.create'
    ]);
    $router->get('hopdongs/{hopdong}/edit', [
        'as' => 'admin.hopdong.hopdong.edit',
        'uses' => 'HopdongController@edit',
        'middleware' => 'can:hopdong.hopdongs.edit'
    ]);
    $router->put('hopdongs/{hopdong}', [
        'as' => 'admin.hopdong.hopdong.update',
        'uses' => 'HopdongController@update',
        'middleware' => 'can:hopdong.hopdongs.edit'
    ]);
    $router->delete('hopdongs/{hopdong}', [
        'as' => 'admin.hopdong.hopdong.destroy',
        'uses' => 'HopdongController@destroy',
        'middleware' => 'can:hopdong.hopdongs.destroy'
    ]);
// append

});
