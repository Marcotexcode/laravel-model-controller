<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicStaticController extends Controller
{

    //HOME

    public function index() 
    {
        return view('home');
    }


    //CHARACTERS
    
    public function characterspage() 
    {
        return view('characters');
    }


    //MOVIE

    public function moviepage() 
    {
        return view('movie');
    }


    //TV 

    public function tvpage() 
    {
        return view('tv');
    }

    //GAMES

    public function gamespage()
    {
        return view('games');
    }

    // COLLECTIBLES

    public function collectiblespage() 
    {
        return view('collectibles');
    }


    //VIDEOS

    public function videospage()
    {
        return view('videos');
    }
    
    
    //FANS

    public function fanspage()
    {
        return view('fans');
    }


    //NEWS

    public function newspage()
    {
        return view('news');
    }


    //SHOP

    public function shoppage()
    {
        return view('shop');
    }

}
