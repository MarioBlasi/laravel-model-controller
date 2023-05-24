@extends('layouts.app')

@section('content')
<h1 class="">welcome movies</h1>


<div class="container">
    <div class="row row-cols-1 row-cols-lg-3">

        @forelse ($movies as $movie)
        <div class="col">
            <div class="card">
                <img src="{{ $movie->cover_image }}" alt="{{ $movie->name }}" class="card-img-top">
                <div class="card-body">
                    <h4>
                        {{ $movie->name }}
                    </h4>
                </div>
            </div>
        </div>
        @empty
        <div class="col">
            <div class="card"> we have no movies</div>
        </div>
        @endforelse
    </div>
</div>



@endsection   