<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    Route::get('/borsya-akademi', 'PageController@borsyaAkademi');
    Route::get('/products', 'PageController@allPosts');
});

Route::get('/post', 'PostController@index')->name('post');
Route::post('/post', 'PostController@store')->name('post.store');
Route::get('/post/{id}', 'PostController@edit')->name('post.edit');
Route::post('/post/{id}', 'PostController@store')->name('post.edit');
Route::delete('/post/{id}', 'PostController@destroy')->name('post.destroy');

// project
Route::get('/project', 'ProjectController@index')->name('project');
Route::post('/project', 'ProjectController@store')->name('project.store');
Route::get('/project/{id}', 'ProjectController@edit')->name('project.edit');
Route::post('/project/{id}', 'ProjectController@store')->name('project.edit');
Route::delete('/project/{id}', 'ProjectController@destroy')->name('project.destroy');

// product
Route::get('/product', 'ProductController@index')->name('product');
Route::post('/product', 'ProductController@store')->name('product.store');
Route::get('/product/{id}', 'ProductController@edit')->name('product.edit');
Route::post('/product/{id}', 'ProductController@store')->name('product.edit');
Route::delete('/product/{id}', 'ProductController@destroy')->name('product.destroy');

// partner
Route::get('/client', 'ClientController@index')->name('client');
Route::post('/client', 'ClientController@store')->name('client.store');
Route::get('/client/{id}', 'ClientController@edit')->name('client.edit');
Route::post('/client/{id}', 'ClientController@store')->name('client.edit');
Route::delete('/client/{id}', 'ClientController@destroy')->name('client.destroy');
