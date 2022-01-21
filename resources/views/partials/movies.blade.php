@extends('layouts.main')

@section('main-content')
    <div class="container">
        <h2>Movies</h2>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-3">
                    <div class="card mb-2">
                        <h3>{{$movie->title}}</h3>
                        <h4>{{$movie->date}}</h4>
                        <h4>{{$movie->vote}}</h4>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection