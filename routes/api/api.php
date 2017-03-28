<?php

Route::get('/api', [
    'as'   => 'api.index',
    'uses' => 'ApiController@index',
]);