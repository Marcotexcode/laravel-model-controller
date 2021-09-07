<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicDinamicController extends Controller
{

    public function comicspage() 
    {

        $comics = config('comics');
    
        $data = ['formati' => $comics];
    
        return view('comics', $data);
    
    }

}
