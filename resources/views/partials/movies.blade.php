@extends('layouts.main')

@section('main-content')
    <div class="container">
        <h2 class="mb-5">Movies</h2>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-3">
                    <div class="card p-4 text-center mb-4 text-dark">
                        <h3>{{$movie->title}}</h3>
                        <h4>Data: {{$movie->date}}</h4>
                        <h4>Voto: {{$movie->vote}}</h4>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection