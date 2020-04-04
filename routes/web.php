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
    return view('welcome');
});


//admin................

Route::get('admin/home','HomeController@adminhome')->name('admin.home');











Route::post('/image/store','ImageController@store')->name('image.store');

Route::get('/image/index','ImageController@index')->name('image.index');

Route::get('/image/destroy/{id}','ImageController@destroy')->name('image.destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
