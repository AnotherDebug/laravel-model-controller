@extends('layouts.main')

@section('content')
    <h1>Movies List</h1>

    <div class="container d-flex flex-wrap">

        @foreach ($movies as $movie)
            {{-- SINGOLA CARD --}}
            <div class="card mx-3 my-3 m-auto" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$movie->title}}</h5>
                    <a href="{{route('details', ["id" => $movie->id])}}" class="btn btn-primary">Vai</a>
                </div>
            </div>
        @endforeach



    </div>
@endsection


@section('title')
    | Movies List
@endsection
