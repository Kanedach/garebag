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

Route::get('/', 'GarbageController@index')->name('garbages');
Route::get('/new/{id}', 'GarbageController@create')->name('garbage.create');
Route::post('/new', 'GarbageController@store')->name('garbage.create');
