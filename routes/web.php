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

Route::group(
    ['prefix' => 'admin','as'=>'backend.','middleware' =>['auth','role:admin']],function () {
        Route::get('/', function () {
            return view('hallo');
        });
        Route::get('/home', function(){
            return view('backend.index');
        });
        Route::resource('user','UserController');
        Route::resource('bidang-studi','Bidang_studiController');
        Route::resource('kompetensi-keahlian','Kompetensi_keahlianController');
    }
);

Auth::routes(['register'=> false]);

Route::get('/home', 'HomeController@index')->name('home');
