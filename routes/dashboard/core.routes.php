<?php

route_group('core', function () {

    route_group('administration', function () {
        Route::get('profile', 'AdminProfileController@index')->name('profile');
        Route::put('profile', 'AdminProfileController@update');

        Route::resources([
            'admins' => 'AdminController',
            'roles'  => 'RoleController',
        ]);
    });

    Route::resources([
        'pages'             => 'PageController'
    ]);
});
