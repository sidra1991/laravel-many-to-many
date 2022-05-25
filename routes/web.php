<?php

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

Route::get('/', function () {
   return view('guest.welcome');
});

Route::get('/login', function () {
    return view('auth.login');
 });

//Route::resource('/post', 'Guest\PostController');

//Route::get('/home', 'Guest\HomePageController@index')->name('home');
Route::get('/show', 'Guest\PostGuestController@show')->name('show');
Route::get('/list', 'Guest\PostGuestController@index')->name('list');


Auth::routes();

Route::middleware('auth')
    ->namespace('Admin')
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::get('/', 'HomeController@index')->name('home');
        Route::get('/private', 'UserInfoController@index')->name('admin.home');
        Route::resource('/info', 'UserInfoController');
        Route::resource('/post', 'PostController');
    });


//Route::get('/droga', 'HomeController@index')->name('droga');



