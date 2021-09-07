<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicDinamicController extends Controller
{

    // COMICS

    public function comicspage() 
    {


        //Prova Query:  $formati = Comic::where('id', '=', 4)->get();

        $formati = Comic::all();  
        
        // $comics = config('comics');
    
        // $data = ['formati' => $comics];
    
        return view('comics', compact('formati'));
    
    }

    // DETTAGLI

    PUBLIC function detailspage($id) {

        $formati = Comic::where('id', $id)->first();

        // $comics = config('comics');

        // $data = ['formati' => $comics[$id]];

        return view('details', compact('formati'));

    }

}
