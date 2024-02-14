@extends('layout.app')

@section('content')
    <div>
        @foreach ($movies as $movie)
        <div class="d-flex">
            <div class="mx-2"> {{ $movie->id }} </div>
            <div> {{ $movie->title }} </div>
        </div>
            
        @endforeach
    </div>
@endsection