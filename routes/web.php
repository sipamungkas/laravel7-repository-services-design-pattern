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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'PostController@index');
Route::post('/post', 'PostController@create')->name('post.store');
Route::get('/post/{id}','PostController@read')->name('post.edit');
Route::put('/post/{id}','PostController@update')->name('post.update');
Route::delete('/post/{id}','PostController@delete')->name('post.destroy');