@extends('layout.app')

@section('content')
    <div>

        <div class="d-flex justify-content-center align-items-center vh-100">

            <div class="container">
                <div class="row">
                    <div class="row">

                        @foreach ($movies as $movie)
                            <div class="card m-3" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $movie->title }} </h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary">Id: {{ $movie->id }}</h6>
                                    <p class="card-text">Titolo originale: {{ $movie->original_title }}</p>
                                    <a href="#" class="card-link">Vedi dettagli</a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
