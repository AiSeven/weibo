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


/**
Route::get('/', function () {
    return view('home');
});
Route::get('/help', function () {
    return view('help');
});
Route::get('/about', function () {
    return view('about');
});
 **/

Auth::routes();

Route::get('/', 'StaticPagesController@home')->name('home');

Auth::routes();
Route::get('/help', 'StaticPagesController@help')->name('help');

Auth::routes();
Route::get('/about', 'StaticPagesController@about')->name('about');

Auth::routes();
Route::get('signup', 'UsersController@create')->name('signup');

Auth::routes();
Route::resource('users', 'UsersController');

Auth::routes();
Route::get('/users/{user}', 'UsersController@show')->name('users.show');

