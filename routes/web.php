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

Route::get('/', 'IndexController@index')->name('garbages');
Route::get('/logout', 'IndexController@destroy')->name('logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('tenant')->group(function () {
    Route::get('create', 'TenantController@create')->name('tenant.create');
    Route::post('create', 'TenantController@store')->name('tenant.create');
    Route::get('{id}', 'TenantController@show')->name('tenant.show');
    Route::delete('{id}', 'HomeController@index')->name('tenant.delete');
});

Route::prefix('garbage')->group(function () {
    Route::get('/new', 'GarbageController@create')->name('garbage.create');
    Route::get('/new/{id}', 'IndexController@create')->name('garbage.create');
    Route::post('/new', 'IndexController@store')->name('garbage.create');
    Route::get('/{id}', 'GarbageController@show')->name('garbage.show');
    Route::get('/edit/{id}','GarbageController@edit')->name('garbage.edit');
    Route::post('/edit/{id}', 'GarbageController@update')->name('garbage.edit');
    Route::get('/delete/{id}', 'GarbageController@destroy')->name('garbage.delete');
});
