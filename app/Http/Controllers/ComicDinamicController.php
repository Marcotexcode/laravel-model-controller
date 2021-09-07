<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicDinamicController extends Controller
{

    // COMICS

    public function comicspage() 
    {

        $formati = Comic::all();
        
        // $comics = config('comics');
    
        // $data = ['formati' => $comics];
    
        return view('comics', compact('formati'));
    
    }

    // DETTAGLI

    PUBLIC function detailspage($id) {

        $comics = config('comics');

        $data = ['formati' => $comics[$id]];

        return view('details', $data);

    }

}
