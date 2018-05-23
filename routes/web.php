<?php

/*
|--------------------------------------------------------------------------
| Web RouteServiceProvider
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
Route::get('/posts/create', 'PostController@create')->name('create');

Route::resource('posts','PostController')->middleware('CheckIfAuthForPost');

Route::get('/admin/logout', 'AuthController@logout');

Route::group(['middleware' => 'auth'] , function() {
	Route::get('/',function() {
		//uses Auth middleware
	});
	Route::get('/profile', function() {
		//uses Auth middleware

	});
});

Route::get('/profile/{username}', [
        'as'   => 'profile',
        'uses' => 'ProfileController@show',
    ]);

Route::get('/profile/{username}/showfollow', [
		'as' => 'profile',
        'uses' => 'ProfileController@showfollow',
	]);

Route::get('profile/{userid}/follow', 'ProfileController@followUser')->name('user.follow');

Route::get('/{userid}/unfollow', 'ProfileController@unFollowUser')->name('user.unfollow');

Auth::routes();
// Route::get('/', function () {
    //
// })->middleware('CheckIfAuthForPost');
// Route::get('/home', 'HomeController@index')->name('home');
