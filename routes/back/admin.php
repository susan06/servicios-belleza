<?php
    
    Route::group([
        'middleware' => ['auth'],
        'prefix'     => 'admin',
    
    ], function () {
        
        Route::get('/add', [
            'as'   => 'back.admin.add',
            'uses' => 'AdminController@add',
        ]);
        
        Route::post('/add/post', [
            'as'   => 'back.admin.add.post',
            'uses' => 'AdminController@add_post',
        ]);
        
    });

    
    
