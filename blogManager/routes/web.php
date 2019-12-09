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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('blog')->group(function (){
    Route::get('index','BlogController@index')->name('blog.index');
    Route::get('search','BlogController@search')->name('blog.search');
    Route::get('/{id}/delete','BlogController@delete')->name('blog.delete');
    Route::get('create','BlogController@create')->name('blog.create');
    Route::post('create','BlogController@store')->name('blog.store');
    Route::get('edit/{id}','BlogController@edit')->name('blog.edit');
    Route::post('edit/{id}','BlogController@update')->name('blog.update');

});
