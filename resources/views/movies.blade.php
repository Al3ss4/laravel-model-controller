@extends('layouts.main')

@section('title', 'Movies')

@section('movies')
    <main>
        <div class="container">
            <div class="row">
                <h1 class="text-center mt-4">I miei Film</h1>

                {{-- @dump($movies) --}}
                <div class="d-flex flex-wrap justify-content-center">
                @foreach ( $movies as $movie )

                <div class="card mt-4 mx-3" style="width: 18rem;">

                    <div class="card-body ">
                      <h5 class="card-title">Titolo: {{ $movie ->title}}</h5>
                      <p class="card-text">{{ $movie ->original_title}}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Nazionalita: {{ $movie ->nationality}}</li>
                      <li class="list-group-item">Anno: {{ $movie ->date}}</li>
                      <li class="list-group-item">Voto: {{ $movie ->vote}}</li>
                    </ul>
                    <div class="card-body">

                    </div>
                  </div>

                @endforeach
            </div>
            </div>
        </div>







    </main>
@endsection
