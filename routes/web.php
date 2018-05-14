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

Route::get('contact', 'PagesController@getContact');
Route::get('about', 'PagesController@getAbout')->name('about');
Route::get('welcome', 'PagesController@getWelcome')->name('home');
Route::get('/home', 'HomeController@index');
Route::get('/create', 'PostController@create')->name('posts.create');
Route::resource('posts', 'PostController');




Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Auth::routes();

Route::prefix('manage')->middleware('role:superadministrator|administrator|editor|author|contributor')->group(function () {
    Route::get('/', 'ManageController@index');
    Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
    Route::resource('/users', 'UserController');
    Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
    Route::resource('/roles', 'RoleController', ['except' => 'destroy']);

});
