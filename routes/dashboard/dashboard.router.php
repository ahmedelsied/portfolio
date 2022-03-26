<?php

use App\Domain\Core\Enums\RolesEnum;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => config('custom.dashboard.prefix'), 'as' => 'dashboard.'], function () {
    require __DIR__.'/auth.routes.php';

    Route::group(['middleware' => ['auth', 'role:'.RolesEnum::admin()]], static function () {
        Route::view('/', 'dashboard.home')->name('home');

        require __DIR__.'/core.routes.php';
        require __DIR__.'/blog.routes.php';
        require __DIR__.'/portfolio.routes.php';
        require __DIR__.'/personal.routes.php';
        require __DIR__.'/business.routes.php';
    });
});
