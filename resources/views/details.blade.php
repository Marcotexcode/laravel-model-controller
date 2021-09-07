

@extends('layouts.app')
@section('title', 'dettaglio')


@section('content')

@include('partials.jumbotron')

    <div class="container-details">

    
        <img class="image-details" src="{{ $formati['thumb']}}" alt="{{$formati['series']}}">
       
        <div class="container-description-details">

            <h1>{{$formati['title']}}</h1>

            <div class="container-price-details">

                <p>U.S. Price: {{$formati['price']}}</p>
                <span>available</span>

                <div class="list-check">
                    <ul>Check Anvailability</ul>
                </div>

            </div>

            <div class="description">
                <p>{{$formati['description']}}</p>
            </div>

            <div class="container-talent-specs">

                <div class="container-specs">

                    <h2>Specs</h2>
                    
                    <hr>
                    
                    <p><strong>Series:</strong>  {{$formati['series']}}</p>
                    
                    <hr>
                    
                    <p><strong>U.S. price:</strong> {{$formati['price']}}</p>
                    
                    <hr>
                    
                    <p><strong>On Sale Date:</strong> {{$formati['sale_date']}}</p>
                    
                    <hr>

                </div>

            </div>

        </div>

    </div>



@endsection