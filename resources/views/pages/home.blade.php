@extends('layouts.app')

@section('page_title')
    Home
@endsection

@section('content')
    <section class="container">
        <div class="row pt-5 pb-5">
            @foreach ($movies as $movie)
                <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-image h-100">
                                <a href="{{ route('pages.show', ['id' => $movie->id]) }}"><img class="img-fluid h-100"
                                        src="{{ $movie['image'] }}" alt="{{ $movie['title'] }}">
                                </a>
                            </div>
                            <div class="card-title text-uppercase fw-bold small pt-3 text-center">
                                <a href="{{ route('pages.show', ['id' => $movie->id]) }}"
                                    class="text-decoration-none text-dark">{{ $movie['original_title'] }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
