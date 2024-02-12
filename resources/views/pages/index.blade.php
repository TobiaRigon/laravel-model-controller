@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Movies</h1>
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
            <div class=" col-md-4 mb-4">
                <div class="card h-100  bg-dark">
                    <div class="card-body text-white">
                        <h5 class="card-title font-weight-bold text-uppercase">{{$movie->title}}</h5>
                        <p class="card-text">Nationality: {{$movie->nationality}}</p>
                        <p class="card-text font-weight-light">Vote: {{$movie->vote}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
