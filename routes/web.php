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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('posts','PostController')->middleware('CheckIfAuthForPost');

// Route::get('/admin/logout', 'AuthController@logout');

Auth::routes();
// Route::get('/', function () {
    //
// })->middleware('CheckIfAuthForPost');
Route::get('/home', 'HomeController@index')->name('home');
