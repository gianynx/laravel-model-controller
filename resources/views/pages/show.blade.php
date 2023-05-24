@extends('layouts.app')

@section('page_title')
    {{ $movie['title'] }}
@endsection

@section('content')
    <section class="card_container mx-auto">
        <div class="row pt-5 pb-5">
            <div class="col-12 mt-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="card-image">
                            <img class="img-fluid" src="{{ $movie['image'] }}" alt="{{ $movie['title'] }}">
                        </div>
                        <div class="card-title text-center pt-3">
                            <h1 class="text-uppercase">{{ $movie['original_title'] }}</h1>
                            <h3>{{ $movie['title'] }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
