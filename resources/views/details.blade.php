

@extends('layouts.app')
@section('title', 'dettaglio')


@section('content')

    <hr>

    <img src="{{ $formati['thumb']}}" alt="{{$formati['series']}}">
    <h1>{{$formati['title']}}</h1>

    <div class="container-price-details">

        <p>U.S. Price: {{$formati['price']}}</p>

    </div>

    <div class="description">
        <p>{{$formati['description']}}</p>
    </div>

    <div class="container-talent-specs">

        <div class="container-talent">
  
            <h2>Talent</h2>
            
            <hr>
            
            <p>art by: </p>
            
            <hr>
            
            <p>written by: </p>
            
            <hr>

        </div>

        <div class="container-specs">

            <h2>Specs</h2>
            
            <hr>
            
            <p>Series: {{$formati['series']}}</p>
            
            <hr>
            
            <p>U.S. price: {{$formati['price']}}</p>
            
            <hr>
            
            <p>On Sale Date: {{$formati['sale_date']}}</p>
            
            <hr>

        </div>

    </div>


@endsection