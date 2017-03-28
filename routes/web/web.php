<?php

Route::get('/', [
    'as'   => 'web.index',
    'uses' => 'WebController@index',
]);

Route::get('/search_advanced', [
    'as'   => 'web.search',
    'uses' => 'WebController@search_advanced',
]);

Route::get('/spas', [
    'as'   => 'web.spas',
    'uses' => 'WebController@spas',
]);

Route::group([
    'middleware' => ['auth'],

], function () {

    Route::get('/client', [
        'as'   => 'web.home',
        'uses' => 'WebController@home',
    ]);

});