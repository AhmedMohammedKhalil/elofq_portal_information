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


Route::get('/', 'HomeController@index')->name('home');
Route::get('/books', 'HomeController@allBooks')->name('books');
Route::get('/search', 'HomeController@search')->name('search');
Route::get('/services', 'HomeController@services')->name('services');


Route::middleware(['guest:admin'])->group(function () {
    Route::get('/admin/login', 'AdminController@showLoginForm')->name('admin.login');
});


Route::middleware(['auth:admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('/profile', 'AdminController@profile')->name('profile');
    Route::get('/settings', 'AdminController@settings')->name('settings');
    Route::get('/changePassword', 'AdminController@changePassword')->name('changePassword');
    Route::get('/logout', 'AdminController@logout')->name('logout');


    Route::prefix('/service')->name('service.')->group(function () {
        Route::get('/index', 'ServiceController@index')->name('index');
        Route::get('/edit', 'ServiceController@edit')->name('edit');
    });


    Route::prefix('/book')->name('book.')->group(function () {
        Route::get('/index', 'BookController@index')->name('index');
        Route::get('/create', 'BookController@create')->name('create');
        Route::get('/show', 'BookController@show')->name('show');
        Route::get('/edit', 'BookController@edit')->name('edit');
        Route::delete('/delete', 'BookController@delete')->name('delete');
    });


    Route::prefix('/about')->name('about.')->group(function () {
        Route::get('/index', 'AboutsController@index')->name('index');
        Route::get('/edit', 'AboutsController@edit')->name('edit');
    });

    Route::prefix('/slider')->name('slider.')->group(function () {
        Route::get('/index', 'SlidersController@index')->name('index');
        Route::get('/create', 'SlidersController@create')->name('create');
        Route::get('/edit', 'SlidersController@edit')->name('edit');
        Route::delete('/delete', 'SlidersController@delete')->name('delete');
    });

});

