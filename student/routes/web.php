<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('student')->group(function (){
    Route::get('/index','StudentController@index')->name('index');
    Route::get('/create','StudentController@create')->name('create');
    Route::post('/create','StudentController@store')->name('store');
    Route::get('/delete/{id}','StudentController@delete')->name('delete');
    Route::get('/update/{id}','StudentController@update')->name('update');
    Route::post('/update/{id}','StudentController@edit')->name('edit');
});
