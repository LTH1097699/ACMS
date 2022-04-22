<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/tinhluong'], function (Router $router) {
    $router->bind('tinhluong', function ($id) {
        return app('Modules\Tinhluong\Repositories\TinhluongRepository')->find($id);
    });
    $router->get('tinhluongs', [
        'as' => 'admin.tinhluong.tinhluong.index',
        'uses' => 'TinhluongController@index',
        'middleware' => 'can:tinhluong.tinhluongs.index'
    ]);
    $router->get('tinhluongs/create', [
        'as' => 'admin.tinhluong.tinhluong.create',
        'uses' => 'TinhluongController@create',
        'middleware' => 'can:tinhluong.tinhluongs.create'
    ]);
    $router->post('tinhluongs', [
        'as' => 'admin.tinhluong.tinhluong.store',
        'uses' => 'TinhluongController@store',
        'middleware' => 'can:tinhluong.tinhluongs.create'
    ]);
    $router->get('tinhluongs/{tinhluong}/edit', [
        'as' => 'admin.tinhluong.tinhluong.edit',
        'uses' => 'TinhluongController@edit',
        'middleware' => 'can:tinhluong.tinhluongs.edit'
    ]);
    $router->put('tinhluongs/{tinhluong}', [
        'as' => 'admin.tinhluong.tinhluong.update',
        'uses' => 'TinhluongController@update',
        'middleware' => 'can:tinhluong.tinhluongs.edit'
    ]);
    $router->delete('tinhluongs/{tinhluong}', [
        'as' => 'admin.tinhluong.tinhluong.destroy',
        'uses' => 'TinhluongController@destroy',
        'middleware' => 'can:tinhluong.tinhluongs.destroy'
    ]);
    $router->bind('ngachluong', function ($id) {
        return app('Modules\Tinhluong\Repositories\NgachluongRepository')->find($id);
    });
    $router->get('ngachluongs', [
        'as' => 'admin.tinhluong.ngachluong.index',
        'uses' => 'NgachluongController@index',
        'middleware' => 'can:tinhluong.ngachluongs.index'
    ]);
    $router->get('ngachluongs/create', [
        'as' => 'admin.tinhluong.ngachluong.create',
        'uses' => 'NgachluongController@create',
        'middleware' => 'can:tinhluong.ngachluongs.create'
    ]);
    $router->post('ngachluongs', [
        'as' => 'admin.tinhluong.ngachluong.store',
        'uses' => 'NgachluongController@store',
        'middleware' => 'can:tinhluong.ngachluongs.create'
    ]);
    $router->get('ngachluongs/{ngachluong}/edit', [
        'as' => 'admin.tinhluong.ngachluong.edit',
        'uses' => 'NgachluongController@edit',
        'middleware' => 'can:tinhluong.ngachluongs.edit'
    ]);
    $router->put('ngachluongs/{ngachluong}', [
        'as' => 'admin.tinhluong.ngachluong.update',
        'uses' => 'NgachluongController@update',
        'middleware' => 'can:tinhluong.ngachluongs.edit'
    ]);
    $router->delete('ngachluongs/{ngachluong}', [
        'as' => 'admin.tinhluong.ngachluong.destroy',
        'uses' => 'NgachluongController@destroy',
        'middleware' => 'can:tinhluong.ngachluongs.destroy'
    ]);
    $router->bind('soluong', function ($id) {
        return app('Modules\Tinhluong\Repositories\SoluongRepository')->find($id);
    });
    $router->get('soluongs', [
        'as' => 'admin.tinhluong.soluong.index',
        'uses' => 'SoluongController@index',
        'middleware' => 'can:tinhluong.soluongs.index'
    ]);
    $router->get('soluongs/create', [
        'as' => 'admin.tinhluong.soluong.create',
        'uses' => 'SoluongController@create',
        'middleware' => 'can:tinhluong.soluongs.create'
    ]);
    $router->post('soluongs', [
        'as' => 'admin.tinhluong.soluong.store',
        'uses' => 'SoluongController@store',
        'middleware' => 'can:tinhluong.soluongs.create'
    ]);
    $router->get('soluongs/{soluong}/edit', [
        'as' => 'admin.tinhluong.soluong.edit',
        'uses' => 'SoluongController@edit',
        'middleware' => 'can:tinhluong.soluongs.edit'
    ]);
    $router->put('soluongs/{soluong}', [
        'as' => 'admin.tinhluong.soluong.update',
        'uses' => 'SoluongController@update',
        'middleware' => 'can:tinhluong.soluongs.edit'
    ]);
    $router->delete('soluongs/{soluong}', [
        'as' => 'admin.tinhluong.soluong.destroy',
        'uses' => 'SoluongController@destroy',
        'middleware' => 'can:tinhluong.soluongs.destroy'
    ]);
    $router->bind('bacluong', function ($id) {
        return app('Modules\Tinhluong\Repositories\BacluongRepository')->find($id);
    });
    $router->get('bacluongs', [
        'as' => 'admin.tinhluong.bacluong.index',
        'uses' => 'BacluongController@index',
        'middleware' => 'can:tinhluong.bacluongs.index'
    ]);
    $router->get('bacluongs/create', [
        'as' => 'admin.tinhluong.bacluong.create',
        'uses' => 'BacluongController@create',
        'middleware' => 'can:tinhluong.bacluongs.create'
    ]);
    $router->post('bacluongs', [
        'as' => 'admin.tinhluong.bacluong.store',
        'uses' => 'BacluongController@store',
        'middleware' => 'can:tinhluong.bacluongs.create'
    ]);
    $router->get('bacluongs/{bacluong}/edit', [
        'as' => 'admin.tinhluong.bacluong.edit',
        'uses' => 'BacluongController@edit',
        'middleware' => 'can:tinhluong.bacluongs.edit'
    ]);
    $router->put('bacluongs/{bacluong}', [
        'as' => 'admin.tinhluong.bacluong.update',
        'uses' => 'BacluongController@update',
        'middleware' => 'can:tinhluong.bacluongs.edit'
    ]);
    $router->delete('bacluongs/{bacluong}', [
        'as' => 'admin.tinhluong.bacluong.destroy',
        'uses' => 'BacluongController@destroy',
        'middleware' => 'can:tinhluong.bacluongs.destroy'
    ]);
// append




});
