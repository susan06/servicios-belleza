<?php
    
    Route::group([
        'middleware' => ['auth'],
        'prefix'     => 'admin/security',

    ], function () {

        Route::get('/roles/add', [
            'middleware' => ['permission:' . \App\Security\Enums\SecurityPermission::$add_roles],
            'as'   => 'back.security.roles.add',
            'uses' => 'SecurityController@add_roles',
        ]);

        Route::post('/roles/create', [
            'middleware' => ['permission:' . \App\Security\Enums\SecurityPermission::$add_roles],
            'as'   => 'back.security.roles.create',
            'uses' => 'SecurityController@create_roles',
        ]);

        Route::get('/roles/edit/{id}', [
            'middleware' => ['permission:' . \App\Security\Enums\SecurityPermission::$update_roles],
            'as'   => 'back.security.roles.edit',
            'uses' => 'SecurityController@edit_roles',
        ]);

        Route::post('/roles/update/{id}', [
            'middleware' => ['permission:' . \App\Security\Enums\SecurityPermission::$update_roles],
            'as'   => 'back.security.roles.update',
            'uses' => 'SecurityController@update_roles',
        ]);

        Route::get('/roles/all', [
            'middleware' => ['permission:' . \App\Security\Enums\SecurityPermission::$all_roles],
            'as'   => 'back.security.roles.all',
            'uses' => 'SecurityController@all_roles',
        ]);

        Route::get('/permission/add', [
            'middleware' => ['permission:' . \App\Security\Enums\SecurityPermission::$add_permissions],
            'as'   => 'back.security.permission.add',
            'uses' => 'SecurityController@add_permission',
        ]);

        Route::post('/permission/create', [
            'middleware' => ['permission:' . \App\Security\Enums\SecurityPermission::$add_permissions],
            'as'   => 'back.security.permission.create',
            'uses' => 'SecurityController@create_permission',
        ]);

        Route::get('/permission/edit/{id}', [
            'middleware' => ['permission:' . \App\Security\Enums\SecurityPermission::$update_permissions],
            'as'   => 'back.security.permission.edit',
            'uses' => 'SecurityController@edit_permission',
        ]);

        Route::post('/permission/update/{id}', [
            'middleware' => ['permission:' . \App\Security\Enums\SecurityPermission::$update_permissions],
            'as'   => 'back.security.permission.update',
            'uses' => 'SecurityController@update_permission',
        ]);

        Route::get('/permission/all', [
            'middleware' => ['permission:' . \App\Security\Enums\SecurityPermission::$all_permissions],
            'as'   => 'back.security.permission.all',
            'uses' => 'SecurityController@all_permission',
        ]);

        Route::get('/user/add', [
            'middleware' => ['permission:' . \App\Security\Enums\SecurityPermission::$add_user],
            'as'   => 'back.security.user.add',
            'uses' => 'SecurityController@add_user',
        ]);

        Route::post('/user/create', [
            'middleware' => ['permission:' . \App\Security\Enums\SecurityPermission::$add_user],
            'as'   => 'back.security.user.create',
            'uses' => 'SecurityController@create_user',
        ]);

        Route::get('/user/edit/{id}', [
            'middleware' => ['permission:' . \App\Security\Enums\SecurityPermission::$update_user],
            'as'   => 'back.security.user.edit',
            'uses' => 'SecurityController@edit_user',
        ]);

        Route::post('/user/update/{id}', [
            'middleware' => ['permission:' . \App\Security\Enums\SecurityPermission::$update_user],
            'as'   => 'back.security.user.update',
            'uses' => 'SecurityController@update_user',
        ]);

        Route::get('/user/all', [
            'middleware' => ['permission:' . \App\Security\Enums\SecurityPermission::$all_user],
            'as'   => 'back.security.user.all',
            'uses' => 'SecurityController@all_user',
        ]);
        
    });

    
    
