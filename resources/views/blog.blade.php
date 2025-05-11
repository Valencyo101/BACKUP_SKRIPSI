@extends('layouts.blog')

@section('isi')
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">Srikandi</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Home</a></li>
                    <li class="nav-item">
                        <button class="nav-link dropdown-toggle" style="background-color: transparent;
    border: none;"
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Kategori
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1"
                            style="
                        left: auto;">
                            @foreach ($category_widget as $result)
                                <li>
                                    <a class="dropdown-item" href="{{ route('blog.category', $result->slug) }}">
                                        {{ $result->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{ route('blog.list') }}">Post</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- section --}}
    <header class="masthead"
        style="background: linear-gradient(to bottom, rgba(92, 77, 66, 0.8) 0%, rgba(92, 77, 66, 0.8) 100%), url({{ asset('public/frontend/img/Pohonkopi.jpg') }}) no-repeat center center fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-size: cover;;">
        <div class="container px-4 px-lg-5 h-100 text-white">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold font">Your Favorite Place for Free Bootstrap Themes</h1>
                    <hr class="divider">
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">Start Bootstrap can help you build better websites using the
                        Bootstrap framework! Just download a theme and start customizing, no strings attached!</p>
                    <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
                </div>
            </div>
        </div>
    </header>
@endsection
