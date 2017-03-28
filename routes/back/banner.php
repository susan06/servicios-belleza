<?php
    
    Route::group([
        'middleware' => ['auth'],
        'prefix'     => 'admin/banner',
    
    ], function () {
        
        Route::get('/add', [
            'middleware' => ['permission:' . \App\Security\Enums\SecurityPermission::$add_banner],
            'as'   => 'back.banner.add',
            'uses' => 'BannerController@add',
        ]);
        
        Route::post('/add/post', [
            'middleware' => ['permission:' . \App\Security\Enums\SecurityPermission::$add_banner],
            'as'   => 'back.banner.add.post',
            'uses' => 'BannerController@create',
        ]);
        
        Route::get('/edit/{id}', [
            'middleware' => ['permission:' . \App\Security\Enums\SecurityPermission::$update_banner],
            'as'   => 'back.banner.edit',
            'uses' => 'BannerController@edit',
        ]);
    
        Route::post('/update/{id}', [
            'middleware' => ['permission:' . \App\Security\Enums\SecurityPermission::$update_banner],
            'as'   => 'back.banner.update',
            'uses' => 'BannerController@update',
        ]);
    
        Route::get('/all', [
            'middleware' => ['permission:' . \App\Security\Enums\SecurityPermission::$all_banner],
            'as'   => 'back.banner.all',
            'uses' => 'BannerController@all',
        ]);
        
    });

    
    
