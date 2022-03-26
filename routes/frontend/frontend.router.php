<?php

use App\Http\Middleware\IsBlogActive;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/portfolio', 'PortfolioController')->name('portfolio');
Route::group(['prefix' => 'contact'],function(){
    Route::get('/', 'ContactController@index')->name('contact');
    Route::post('/', 'ContactController@contact')->name('contact');
});
Route::group(['prefix' => 'blog','middleware' => IsBlogActive::class],function(){
    Route::get('/','BlogController@index')->name('blog');
    Route::get('/{blog}/show','BlogController@show')->name('blog.show');
});
