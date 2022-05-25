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

Route::resource('/post', 'Guest\PostController');

Route::get('/home', 'Guest\HomePageController@index')->name('home');
Route::get('/list', 'Guest\PostController@index')->name('list');

Auth::routes();

Route::middleware('auth')
    ->namespace('Admin')
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::get('/', 'HomeController@index')->name('admin');
    });


//Route::get('/droga', 'HomeController@index')->name('droga');



