@extends('layouts.app')

@section('content')
<div class="container-flex bg-primary  p-2">
    <div class="row">
        <div class="col">
            <div class="card text-center">
                <h1 >Movies</h1>
                
            </div>
        </div>
    </div>
</div>


<div class="container mt-5">
    <div class="row row-cols-1  row-cols-md-2 row-cols-lg-3 ">

        @forelse ($movies as $movie)
        <div class="col">
            <div class="card ">
                {{-- <img src="https://www.vintagemovieposters.co.uk/wp-content/uploads/2020/11/IMG_5878-scaled.jpeg" alt=""> --}}
                <img src="https://m.media-amazon.com/images/M/MV5BN2VhZGI0NjAtOGI5Ni00NDQ1LWEyZWYtZTg3Mzg5YzViOTVmXkEyXkFqcGdeQXVyODc0ODI0ODQ@._V1_.jpg" alt="">
                <img src="{{ $movie->cover_image }}" alt="{{ $movie->name }}" class="card-img-top">
                <div class="card-body ">
                    <h4>{{ $movie->title }}</h4>
                    <h5 class="pt-4">Original Title: {{ $movie->original_title }}</h5>
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