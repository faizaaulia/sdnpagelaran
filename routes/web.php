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

Route::prefix('admin')->middleware(['auth'])->group(function() {
    Route::get('/', 'DashboardController@index')->name('dashboard');
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/berita', 'HomeController@beritaIndex')->name('berita.index');
Route::get('/berita/detail', 'HomeController@beritaDetail')->name('berita.detail');