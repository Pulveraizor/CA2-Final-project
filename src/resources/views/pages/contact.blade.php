@extends('layouts.app')

@section('content')
    <div class="container-fluid ">
        <div class="card col-6 offset-3">
            <div class="card-header">Reach out to us</div>
            <div class="card-body">
                <form action="{{ route('message') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Your name" name="name" value="{{old('name')}}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            placeholder="name@example.com" name="email" value="{{old('email')}}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Your message</label>
                        <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="3" value="{{old('message')}}"></textarea>
                        @error('message')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button class="btn btn-dark">Send</button>
                </form>
            </div>
        </div>
    </div>
@endsection
