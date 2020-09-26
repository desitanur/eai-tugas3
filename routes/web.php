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
// Insert
Route::get('/insert', 'DataController@insert_view')->name('insert.view');
Route::post('/insert', 'DataController@insert_post')->name('insert.post');

// Update
Route::get('/update/{id}', 'DataController@update_view')->name('update.view');
Route::post('/update/{id}/post', 'DataController@update_post')->name('update.post');

Route::get('/showdata', 'DataController@showData')->name('show.data');
