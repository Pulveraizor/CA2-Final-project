@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0">
                    

                    <div class="card-body">
                        @if (!$posts)
                            <div class="alert alert-danger" role="alert">
                                Nothing new here
                            </div>
                        @else
                            @foreach ($posts as $post)
                                <div class="card mb-5">
                                    <div class="card-header">{{ $post->title }}</div>
                                <div class="card-body">
                                    <p class="card-text">{{ $post->body }}</p>
                                    <p class="card-text"><small
                                            class="text-muted">{{ $post->created_at }}</small>
                                    </p>
                                </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
