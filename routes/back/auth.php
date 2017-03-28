<?php
    Route::group([

    ], function () {
        Route::get('/login', [
            'as'   => 'auth.login',
            'uses' => 'AuthController@login',
        ]);

        Route::post('/login', [
            'as'   => 'auth.login.post',
            'uses' => 'AuthController@authenticate',
        ]);

        Route::get('/logout', [
            'as'   => 'auth.logout',
            'uses' => 'AuthController@logout',
        ]);

        Route::get('/register', [
            'as'   => 'auth.register',
            'uses' => 'AuthController@register_view',
        ]);

        Route::post('/register/post', [
            'as'   => 'auth.register.post',
            'uses' => 'AuthController@register',
        ]);


    });
