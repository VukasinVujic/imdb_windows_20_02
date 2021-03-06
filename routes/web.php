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

Route::get('/movies/{id}', 'MoviesController@show')->name('movie');
Route::post('/movies/{id}', 'CommentsController@store')->name('addingComment');
Route::get('/genre/{genre}', 'GenresController@show')->name('show_same_genre');

Route::get('/create', 'MoviesController@create');
Route::post('/create', 'MoviesController@store')->name('createMovie');
Route::get('movies', 'MoviesController@index')->name('allmovies');
