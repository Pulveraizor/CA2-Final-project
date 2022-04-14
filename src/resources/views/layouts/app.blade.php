<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'DKSK8') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">

        <header>
            <nav class="justify-content-between navbar navbar-expand-md navbar-dark fixed-top bg-dark">


                <div class="col-7 px-3">
                    <a class="navbar-brand" href="{{ route('home') }}">DKSK8</a>
                    <ul class="navbar-nav mr-auto ">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('products') }}">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Park</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contacts</a>
                        </li>
                    </ul>
                </div>


                <div class="col-5 px-3 d-flex justify-content-end">
                    <ul class="navbar-nav ms-auto justify-content-between">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <div class="">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                            @endif

                            @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                </div>
                    @endif
                @else
                    @if (session('cart'))
                        <div>
                            <a href="{{ url('/cart') }}" class="btn btn-outline-light">
                                Cart {{ count((array) session('cart')) }}
                            </a>
                        </div>
                    @endif
                    @if (Auth::user()->admin)
                        <div>
                            <a href="{{ route('admin') }}" class="btn btn-success">Admin</a>
                        </div>
                    @endif
                    <div class="mx-3">
                        <small class="text-light">Logged in as</small>
                        <h4 class="text-light" type="button" aria-expanded="false">
                            <a class="text-decoration-none text-warning"
                                href="{{ route('profile') }}">{{ Auth::user()->username }}</a>
                        </h4>
                    </div>


                    <div>
                        <button class="btn btn-outline-secondary" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                                                                 document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </button>
                    </div>
                    </li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>


                @endguest
                <!-- End of Authentication Links -->
                </ul>
    </div>

    </nav>
    </header>

    <main class="py-4">
        @yield('content')
    </main>
    </div>

    <footer class="thefooter">
        <div class="container">
            <span class="text-muted">CodeAcademy2022</span>
        </div>
    </footer>
</body>

</html>

<!-- Scripts -->
<script src="{{ URL::asset('js/app.js') }}"></script>
</body>

</html>
