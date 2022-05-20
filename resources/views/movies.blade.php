@extends('layouts.main')

@section('title', 'Movies')

@section('movies')
    <main>



                    <h1>I miei Film</h1>

                        @dump($movies)




    </main>
@endsection
