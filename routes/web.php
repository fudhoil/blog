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

Auth::routes();

Route::get('/welcome', 'HomeController@index')->name('welcome');
Route::get('/home', 'HomeController@admin')->name('home');
Route::prefix('page')->group(function () {
    Route::get('/selayang-pandang', 'PageController@selayangPandang');
    Route::get('/visi-misi', 'PageController@visiMisi');
    Route::get('/iso-certificate', 'PageController@isoCertificate');
});
