@extends('layout.app')

@section('content')
    <div>

        <div class="d-flex justify-content-center align-items-center vh-100">

            <div class="container">
                <div class="row">
                    <div class="row">

                            <div class="card m-3" style="width: 18rem;">
                                    <h5 class="card-title">{{ $movie->title }} </h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary">Id: {{ $movie->id }}</h6>
                                    <p class="card-text">Titolo originale: {{ $movie->original_title }}</p>
                                   <p>{{ $movie->nationality }}</p>
                                   <p>{{ $movie->date }}</p>
                                   <p>{{ $movie->vote }}</p>
                            </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
