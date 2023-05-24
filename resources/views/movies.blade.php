@extends('layouts.app')

@section('content')
<div class="container bg-primary  p-5">
    <div class="row">
        <div class="col">
            <div class="card text-center">

                <h1 >Welcome new movies</h1>
            </div>
        </div>
    </div>
</div>


<div class="container mt-5">
    <div class="row row-cols-1 row-cols-lg-3">

        @forelse ($movies as $movie)
        <div class="col">
            <div class="card shadow ">
                <img src="{{ $movie->cover_image }}" alt="{{ $movie->name }}" class="card-img-top">
                <div class="card-body shadow">
                    <h4>{{ $movie->title }}</h4>
                    <p>Original Title: {{ $movie->original_title }}</p>
                    <p>Nationality: {{ $movie->nationality }}</p>
                    <p>Date: {{ $movie->date }}</p>
                    <p>Vote: {{ $movie->vote }}</p>
                </div>
            </div>
        </div>
        @empty
        {{-- <div class="col">
            <div class="card"> we have no movies</div>
        </div> --}}
        @endforelse
    </div>
</div>



@endsection   