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

Route::resource('songCRUD','SongCRUDController');

Route::get('songCRUD', ['as' => 'songCRUD.index', 'uses' => 'SongCRUDController@index']);
Route::get('songCRUD/create', ['as' => 'songCRUD.create', 'uses' => 'SongCRUDController@create']);
Route::post('songCRUD/store', ['as' => 'songCRUD.store', 'uses' => 'SongCRUDController@store']);
Route::get('songCRUD/show/{id}', ['as' => 'songCRUD.show', 'uses' => 'SongCRUDController@show']);
Route::get('songCRUD/{id}/edit', ['as' => 'songCRUD.edit', 'uses' => 'SongCRUDController@edit']);
Route::patch('songCRUD/update/{id}', ['as' => 'songCRUD.update', 'uses' => 'SongCRUDController@update']);
Route::delete('songCRUD/destroy/{id}', ['as' => 'songCRUD.destroy', 'uses' => 'SongCRUDController@destroy']);
Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index');
