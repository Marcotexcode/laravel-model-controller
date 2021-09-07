<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicDinamicController extends Controller
{

    // COMICS

    public function comicspage() 
    {

        $comics = config('comics');
    
        $data = ['formati' => $comics];
    
        return view('comics', $data);
    
    }

    // DETTAGLI

    PUBLIC function detailspage($id) {

        $comics = config('comics');

        $data = ['formati' => $comics[$id]];

        return view('details', $data);

    }

}
