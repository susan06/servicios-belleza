<?php
    
    Route::group([
        'middleware' => ['auth'],
        'prefix'     => '',
    
    ], function () {
        
        Route::get('/', [
            'as'   => 'back.index',
            'uses' => 'BackController@index',
        ]);
    
        Route::get('/account', [
            'as'   => 'back.account.details',
            'uses' => 'BackController@account_details',
        ]);
    
        Route::post('/account/update', [
            'as'   => 'back.account.update',
            'uses' => 'BackController@account_update',
        ]);
        
    });

    
    
