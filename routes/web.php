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


//HOME

Route::get('/', 'ComicStaticController@index')->name('homepage');


//CHARACTERS

Route::get('/characters', 'ComicStaticController@characterspage')->name('characterspage');


//COMICS

Route::get('/comics', 'ComicDinamicController@comicspage')->name('comicspage');


//DETTAGLI

Route::get('/details/{id}', 'ComicDinamicController@detailspage')->name('detailspage');


//MOVIE

Route::get('/movie', 'ComicStaticController@moviepage')->name('moviepage');


//TV

Route::get('/tv', 'ComicStaticController@tvpage')->name('tvpage');


//GAMES

Route::get('/games', 'ComicStaticController@gamespage')->name('gamespage');


//COLLECTIBLES

Route::get('/collectibles', 'ComicStaticController@collectiblespage')->name('collectiblespage');


//VIDEOS

Route::get('/videos', 'ComicStaticController@videospage')->name('videospage');


//FANS

Route::get('/fans', 'ComicStaticController@fanspage')->name('fanspage');


//NEWS

Route::get('/news', 'ComicStaticController@newspage')->name('newspage');


//SHOP

Route::get('/shop', 'ComicStaticController@shoppage')->name('shoppage');
