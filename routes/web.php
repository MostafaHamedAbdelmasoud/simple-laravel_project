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


Route::get('/films','FilmController@index');
Route::get('/films/create','FilmController@create');
Route::post('/films/storeFilm','FilmController@store');
Route::get('/films/show/{id}','FilmController@show');
Route::get('/films/edit/{id}','FilmController@edit');
Route::post('/films/update/{id}','FilmController@update');
Route::get('/films/destroy/{id}','FilmController@destroy');
Route::get('/films/addse','FilmController@addse');
Route::get('/search','FilmController@search');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


$this->get('/verify-user/{code}', 'Auth\RegisterController@activateUser')->name('activate.user');



