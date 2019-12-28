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

Route::get('/',  'TasksController@index')->name('tasks,index');

Route::group(['prefix' => 'tasks'], function () {
    Route::get('/{id}','TasksController@show')->name('tasks.show');
  
    Route::post('/','TasksController@store')->name('tasks.store');
       
    Route::put('/{id}', 'TasksController@update')->name('tasks.update');

    Route::delete('/{id}','TasksController@destroy')->name('tasks.destroy');
       
});
