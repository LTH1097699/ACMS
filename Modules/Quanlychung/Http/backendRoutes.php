<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/quanlychung'], function (Router $router) {
    $router->bind('chucdanh', function ($id) {
        return app('Modules\Quanlychung\Repositories\ChucdanhRepository')->find($id);
    });
    $router->get('chucdanhs', [
        'as' => 'admin.quanlychung.chucdanh.index',
        'uses' => 'ChucdanhController@index',
        'middleware' => 'can:quanlychung.chucdanhs.index'
    ]);
    $router->get('chucdanhs/create', [
        'as' => 'admin.quanlychung.chucdanh.create',
        'uses' => 'ChucdanhController@create',
        'middleware' => 'can:quanlychung.chucdanhs.create'
    ]);
    $router->post('chucdanhs', [
        'as' => 'admin.quanlychung.chucdanh.store',
        'uses' => 'ChucdanhController@store',
        'middleware' => 'can:quanlychung.chucdanhs.create'
    ]);
    $router->get('chucdanhs/{chucdanh}/edit', [
        'as' => 'admin.quanlychung.chucdanh.edit',
        'uses' => 'ChucdanhController@edit',
        'middleware' => 'can:quanlychung.chucdanhs.edit'
    ]);
    $router->put('chucdanhs/{chucdanh}', [
        'as' => 'admin.quanlychung.chucdanh.update',
        'uses' => 'ChucdanhController@update',
        'middleware' => 'can:quanlychung.chucdanhs.edit'
    ]);
    $router->delete('chucdanhs/{chucdanh}', [
        'as' => 'admin.quanlychung.chucdanh.destroy',
        'uses' => 'ChucdanhController@destroy',
        'middleware' => 'can:quanlychung.chucdanhs.destroy'
    ]);
    $router->bind('phongban', function ($id) {
        return app('Modules\Quanlychung\Repositories\PhongbanRepository')->find($id);
    });
    $router->get('phongbans', [
        'as' => 'admin.quanlychung.phongban.index',
        'uses' => 'PhongbanController@index',
        'middleware' => 'can:quanlychung.phongbans.index'
    ]);
    $router->get('phongbans/create', [
        'as' => 'admin.quanlychung.phongban.create',
        'uses' => 'PhongbanController@create',
        'middleware' => 'can:quanlychung.phongbans.create'
    ]);
    $router->post('phongbans', [
        'as' => 'admin.quanlychung.phongban.store',
        'uses' => 'PhongbanController@store',
        'middleware' => 'can:quanlychung.phongbans.create'
    ]);
    $router->get('phongbans/{phongban}/edit', [
        'as' => 'admin.quanlychung.phongban.edit',
        'uses' => 'PhongbanController@edit',
        'middleware' => 'can:quanlychung.phongbans.edit'
    ]);
    $router->put('phongbans/{phongban}', [
        'as' => 'admin.quanlychung.phongban.update',
        'uses' => 'PhongbanController@update',
        'middleware' => 'can:quanlychung.phongbans.edit'
    ]);
    $router->delete('phongbans/{phongban}', [
        'as' => 'admin.quanlychung.phongban.destroy',
        'uses' => 'PhongbanController@destroy',
        'middleware' => 'can:quanlychung.phongbans.destroy'
    ]);
    $router->bind('noibotct', function ($id) {
        return app('Modules\Quanlychung\Repositories\noibotctRepository')->find($id);
    });
    $router->get('noibotcts', [
        'as' => 'admin.quanlychung.noibotct.index',
        'uses' => 'noibotctController@index',
        'middleware' => 'can:quanlychung.noibotcts.index'
    ]);
    $router->get('noibotcts/create', [
        'as' => 'admin.quanlychung.noibotct.create',
        'uses' => 'noibotctController@create',
        'middleware' => 'can:quanlychung.noibotcts.create'
    ]);
    $router->post('noibotcts', [
        'as' => 'admin.quanlychung.noibotct.store',
        'uses' => 'noibotctController@store',
        'middleware' => 'can:quanlychung.noibotcts.create'
    ]);
    $router->get('noibotcts/{noibotct}/edit', [
        'as' => 'admin.quanlychung.noibotct.edit',
        'uses' => 'noibotctController@edit',
        'middleware' => 'can:quanlychung.noibotcts.edit'
    ]);
    $router->put('noibotcts/{noibotct}', [
        'as' => 'admin.quanlychung.noibotct.update',
        'uses' => 'noibotctController@update',
        'middleware' => 'can:quanlychung.noibotcts.edit'
    ]);
    $router->delete('noibotcts/{noibotct}', [
        'as' => 'admin.quanlychung.noibotct.destroy',
        'uses' => 'noibotctController@destroy',
        'middleware' => 'can:quanlychung.noibotcts.destroy'
    ]);
    $router->bind('noibodonvi', function ($id) {
        return app('Modules\Quanlychung\Repositories\noibodonviRepository')->find($id);
    });
    $router->get('noibodonvis', [
        'as' => 'admin.quanlychung.noibodonvi.index',
        'uses' => 'noibodonviController@index',
        'middleware' => 'can:quanlychung.noibodonvis.index'
    ]);
    $router->get('noibodonvis/create', [
        'as' => 'admin.quanlychung.noibodonvi.create',
        'uses' => 'noibodonviController@create',
        'middleware' => 'can:quanlychung.noibodonvis.create'
    ]);
    $router->post('noibodonvis', [
        'as' => 'admin.quanlychung.noibodonvi.store',
        'uses' => 'noibodonviController@store',
        'middleware' => 'can:quanlychung.noibodonvis.create'
    ]);
    $router->get('noibodonvis/{noibodonvi}/edit', [
        'as' => 'admin.quanlychung.noibodonvi.edit',
        'uses' => 'noibodonviController@edit',
        'middleware' => 'can:quanlychung.noibodonvis.edit'
    ]);
    $router->put('noibodonvis/{noibodonvi}', [
        'as' => 'admin.quanlychung.noibodonvi.update',
        'uses' => 'noibodonviController@update',
        'middleware' => 'can:quanlychung.noibodonvis.edit'
    ]);
    $router->delete('noibodonvis/{noibodonvi}', [
        'as' => 'admin.quanlychung.noibodonvi.destroy',
        'uses' => 'noibodonviController@destroy',
        'middleware' => 'can:quanlychung.noibodonvis.destroy'
    ]);
    
    
// append






});
