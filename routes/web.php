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

Route::get('/home', function () {
    return view('home');
});

Route::get('/user/{name}', function ($name) {
    echo "<h1>".$name."</h1>";
});

Route::get('/test/{name}', function ($name) {
    echo "<h1>".$name."</h1>";
})->where('name', '[0-9]+');

Route::get('/user', 'UserController@index');

Route::get('/user/login', 'UserController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/blog', 'BlogController')->middleware('auth');
