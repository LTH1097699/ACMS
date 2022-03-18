<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/phatsinhtang'], function (Router $router) {
    $router->bind('thongtinnhanvien', function ($id) {
        return app('Modules\Phatsinhtang\Repositories\ThongtinnhanvienRepository')->find($id);
    });
    $router->get('thongtinnhanviens', [
        'as' => 'admin.phatsinhtang.thongtinnhanvien.index',
        'uses' => 'ThongtinnhanvienController@index',
        'middleware' => 'can:phatsinhtang.thongtinnhanviens.index'
    ]);
    $router->get('thongtinnhanviens/create', [
        'as' => 'admin.phatsinhtang.thongtinnhanvien.create',
        'uses' => 'ThongtinnhanvienController@create',
        'middleware' => 'can:phatsinhtang.thongtinnhanviens.create'
    ]);
    $router->post('thongtinnhanviens', [
        'as' => 'admin.phatsinhtang.thongtinnhanvien.store',
        'uses' => 'ThongtinnhanvienController@store',
        'middleware' => 'can:phatsinhtang.thongtinnhanviens.create'
    ]);
    $router->get('thongtinnhanviens/{thongtinnhanvien}/edit', [
        'as' => 'admin.phatsinhtang.thongtinnhanvien.edit',
        'uses' => 'ThongtinnhanvienController@edit',
        'middleware' => 'can:phatsinhtang.thongtinnhanviens.edit'
    ]);
    $router->put('thongtinnhanviens/{thongtinnhanvien}', [
        'as' => 'admin.phatsinhtang.thongtinnhanvien.update',
        'uses' => 'ThongtinnhanvienController@update',
        'middleware' => 'can:phatsinhtang.thongtinnhanviens.edit'
    ]);
    $router->delete('thongtinnhanviens/{thongtinnhanvien}', [
        'as' => 'admin.phatsinhtang.thongtinnhanvien.destroy',
        'uses' => 'ThongtinnhanvienController@destroy',
        'middleware' => 'can:phatsinhtang.thongtinnhanviens.destroy'
    ]);
    $router->bind('chuyennoibotct', function ($id) {
        return app('Modules\Phatsinhtang\Repositories\chuyennoibotctRepository')->find($id);
    });
    $router->get('chuyennoibotcts', [
        'as' => 'admin.phatsinhtang.chuyennoibotct.index',
        'uses' => 'chuyennoibotctController@index',
        'middleware' => 'can:phatsinhtang.chuyennoibotcts.index'
    ]);
    $router->get('chuyennoibotcts/create', [
        'as' => 'admin.phatsinhtang.chuyennoibotct.create',
        'uses' => 'chuyennoibotctController@create',
        'middleware' => 'can:phatsinhtang.chuyennoibotcts.create'
    ]);
    $router->post('chuyennoibotcts', [
        'as' => 'admin.phatsinhtang.chuyennoibotct.store',
        'uses' => 'chuyennoibotctController@store',
        'middleware' => 'can:phatsinhtang.chuyennoibotcts.create'
    ]);
    $router->get('chuyennoibotcts/{chuyennoibotct}/edit', [
        'as' => 'admin.phatsinhtang.chuyennoibotct.edit',
        'uses' => 'chuyennoibotctController@edit',
        'middleware' => 'can:phatsinhtang.chuyennoibotcts.edit'
    ]);
    $router->put('chuyennoibotcts/{chuyennoibotct}', [
        'as' => 'admin.phatsinhtang.chuyennoibotct.update',
        'uses' => 'chuyennoibotctController@update',
        'middleware' => 'can:phatsinhtang.chuyennoibotcts.edit'
    ]);
    $router->delete('chuyennoibotcts/{chuyennoibotct}', [
        'as' => 'admin.phatsinhtang.chuyennoibotct.destroy',
        'uses' => 'chuyennoibotctController@destroy',
        'middleware' => 'can:phatsinhtang.chuyennoibotcts.destroy'
    ]);
    
    
    $router->bind('trangthai', function ($id) {
        return app('Modules\Phatsinhtang\Repositories\trangthaiRepository')->find($id);
    });
    $router->get('trangthais', [
        'as' => 'admin.phatsinhtang.trangthai.index',
        'uses' => 'trangthaiController@index',
        'middleware' => 'can:phatsinhtang.trangthais.index'
    ]);
    $router->get('trangthais/create', [
        'as' => 'admin.phatsinhtang.trangthai.create',
        'uses' => 'trangthaiController@create',
        'middleware' => 'can:phatsinhtang.trangthais.create'
    ]);
    $router->post('trangthais', [
        'as' => 'admin.phatsinhtang.trangthai.store',
        'uses' => 'trangthaiController@store',
        'middleware' => 'can:phatsinhtang.trangthais.create'
    ]);
    $router->get('trangthais/{trangthai}/edit', [
        'as' => 'admin.phatsinhtang.trangthai.edit',
        'uses' => 'trangthaiController@edit',
        'middleware' => 'can:phatsinhtang.trangthais.edit'
    ]);
    $router->put('trangthais/{trangthai}', [
        'as' => 'admin.phatsinhtang.trangthai.update',
        'uses' => 'trangthaiController@update',
        'middleware' => 'can:phatsinhtang.trangthais.edit'
    ]);
    $router->delete('trangthais/{trangthai}', [
        'as' => 'admin.phatsinhtang.trangthai.destroy',
        'uses' => 'trangthaiController@destroy',
        'middleware' => 'can:phatsinhtang.trangthais.destroy'
    ]);
// append





});
