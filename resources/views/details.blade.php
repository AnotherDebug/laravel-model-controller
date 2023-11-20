@extends('layouts.main')

@section('content')
    <h1 class="text-center">{{ $movie->title }}</h1>

    <div class="container d-flex flex-wrap">


        {{-- SINGOLA CARD --}}
        <div class="card m-auto" style="width: 18rem;">
            <div class="card-body">
                <p class="card-text"><span class="fw-bold">Titolo originale:</span> {{ $movie->original_title }}</p>
                <p class="card-text"><span class="fw-bold">Nazionalità:</span> {{ $movie->nationality }}</p>
                <p class="card-text"><span class="fw-bold">Uscita:</span> {{ $movie->date }}</p>
                <p class="card-text"><span class="fw-bold">Voto:</span> {{ $movie->vote }}</p>
            </div>
        </div>

    </div>
@endsection


@section('title')
    | Movies Details
@endsection
