@extends('layouts.base')

@section('content')
<div class="container">
   @foreach ($movies as $movie)
       <div class="card">
           <div class="title">
                <h2>{{ $movie->title }}</h2>
           </div>
           <h3>Titolo originale: {{ $movie->original_title }}</h3>
           <h4>Data: {{ $movie->date }}</h4>
           <span>Voto: {{ $movie->vote }}</span>
           <span>Nazionalità: {{ $movie->nationality }}</span>
       </div>  
   @endforeach
</div>    
@endsection