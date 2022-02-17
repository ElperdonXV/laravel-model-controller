@extends('layouts.base')

@section('content')
   @foreach ($movies as $movie)
       <div class="card">
           <h2>{{ $movie->title }}</h2>
           <h3>{{ $movie->original_title }}</h3>
           <h4>{{ $movie->date }}</h4>
           <span>{{ $movie->vote }}</span>
           <span>{{ $movie->nationality }}</span>
       </div>
   @endforeach
@endsection