<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
    <title>SkateAcademy</title>
</head>
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="{{route('home')}}">DKSK8</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('products')}}">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Park</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about')}}">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact')}}">Contacts</a>
                </li>
            </ul>
            <form class="row form mt-2 mt-md-0">
                <div class="col">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                </div>
                <div class="col">
                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
            </div>
            </form>
            <div class="col-1">
                <a href="{{route('signIn')}}" class="btn btn-success">Sign In</a>
            </div>
        </div>
    </nav>
</header>
