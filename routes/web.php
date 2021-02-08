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

Route::prefix('cms-auth')->group(function() {
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::prefix('cms-admin')->middleware(['auth'])->group(function() {
    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::get('lihat', 'AdminController@indexPost')->name('show-post');
    Route::get('tambah', 'AdminController@create')->name('create-post');
    Route::post('tambah-{type}', 'AdminController@store')->where('type', 'berita|pengumuman|agenda')->name('store-post');
    Route::get('detail-{type}/{id}', 'AdminController@detail')->where('type', 'berita|pengumuman|agenda')->name('detail-post');
    Route::get('edit', 'AdminController@edit')->name('edit-post');
    Route::put('edit-{type}/{id}', 'AdminController@update')->name('update-post');
    Route::delete('delete-{type}/{id}', 'AdminController@destroy')->name('delete-post');
});

Route::get('/', 'HomeController@index')->name('home');
Route::group([
    'prefix' => '{type}',
    'where' => ['type' => 'berita|pengumuman|agenda']], function() {
        Route::get('/', 'HomeController@postIndex')->name('post.index');
        Route::get('{slug}', 'HomeController@postDetail')->name('post.detail');
    });
