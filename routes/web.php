<?php

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

Route::group(
    ['prefix' => 'admin','middleware' =>['auth']],
    function () {
        Route::get('/', function () {
            return view('backend');
        });
        Route::resource('bidang_studi','Bidang_studiController');
        // Route::resource('tag','Api\TagController');
        // Route::resource('artikel','Api\ArtikelController');
    }
);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
