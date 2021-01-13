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

Auth::routes(['register' => false]);

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/berita', 'HomeController@beritaIndex')->name('berita.index');
Route::get('/berita/detail', 'HomeController@beritaDetail')->name('berita.detail');

Route::get('post', 'PostController@index');
Route::post('post', 'PostController@store')->name('post.store');