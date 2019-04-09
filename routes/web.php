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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'TodoController@index');
Route::get('/todos/{todo}/edit', 'TodoController@edit')->name('todo.edit');
Route::post('/todos', 'TodoController@store')->name('todo.store');
Route::put('/todos/{todo}', 'TodoController@update')->name('todo.update');
