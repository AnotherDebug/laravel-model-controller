@extends('layouts.main')

@section('content')
    <h1>Movies List</h1>

    <div class="container d-flex flex-wrap">

        @foreach ($movies as $movie)
            {{-- SINGOLA CARD --}}
            <div class="card mx-3 my-3 m-auto" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$movie->title}}</h5>
                    <p class="card-text">{{$movie->original_title}}</p>
                    <p class="card-text">{{$movie->nationality}}</p>
                    <p class="card-text">{{$movie->date}}</p>
                    <p class="card-text">{{$movie->vote}}</p>
                </div>
            </div>
        @endforeach



    </div>
@endsection


@section('title')
    | Movies Details
@endsection
