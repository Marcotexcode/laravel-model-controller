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

Route::get('/', function () {
    return view('home');
})->name('homepage');


//CHARACTERS

Route::get('/characters', function () {
    return view('characters');
})->name('characterspage');


//COMICS

Route::get('/comics', function () {

    $comics = config('comics');

    $data = ['formati' => $comics];

    return view('comics', $data);

})->name('comicspage');


//MOVIE

Route::get('/movie', function () {
    return view('movie');
})->name('moviepage');


//TV

Route::get('/tv', function () {
    return view('tv');
})->name('tvpage');


//GAMES

Route::get('/games', function () {
    return view('games');
})->name('gamespage');


//COLLECTIBLES

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectiblespage');


//VIDEOS

Route::get('/videos', function () {
    return view('videos');
})->name('videospage');


//FANS

Route::get('/fans', function () {
    return view('fans');
})->name('fanspage');


//NEWS

Route::get('/news', function () {
    return view('news');
})->name('newspage');


//SHOP

Route::get('/shop', function () {
    return view('shop');
})->name('shoppage');
