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

Route::get('aes', 'AESController@index');
Route::get('enkripsi', 'AESController@enkripsi')->name('enkripsi');
Route::get('dekripsi', 'AESController@dekripsi')->name('dekripsi');

Route::get('data-api', 'ApiController@index');
Route::post('data-api', 'ApiController@store');

Route::get('result', 'DataApiController@index')->name('result');
