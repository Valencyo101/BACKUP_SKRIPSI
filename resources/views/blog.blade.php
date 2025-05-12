@extends('layouts.blog')

@section('isi')
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">Srikandi</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Home</a></li>
                    <li class="nav-item dropdown">
                        <button class="nav-link dropdown-toggle" style="background-color: transparent; border: none;"
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Kategori
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="left: auto;">
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

    <!-- Header Section -->
    <header class="masthead"
        style="background: linear-gradient(to bottom, rgba(92, 77, 66, 0.8), rgba(92, 77, 66, 0.8)), url({{ asset('public/frontend/img/Pohonkopi.jpg') }}) no-repeat center center fixed; background-size: cover;">
        <div class="container px-4 px-lg-5 h-100 text-white">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Dari Hati Petani, Untuk Pecinta Kopi</h1>
                    <hr class="divider">
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">KSU Srikandi memproduksi kopi berkualitas tinggi langsung dari tangan
                        petani lokal. Kami mendukung pertanian berkelanjutan dan memberdayakan petani perempuan di lereng
                        Nusantara.</p>
                    <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section class="page-section bg-primary" id="about">
        <div class="row">
            <div class="col-md-6 col-lg-5 offset-lg-1 d-flex text-center text-md-left">
                <div class="align-self-center">
                    <h2 class="text-uppercase font-weight-bold">Cerita Kami</h2>
                    <div class="mb-4">
                        <p>Keberadaan KSU Srikandi mendorong warga Pekon Ngarip untuk terbiasa mengelola usaha pengolahan
                            kopi bubuk dan usaha simpan pinjam untuk kepentingan produktif. Kebiasaan menyimpan hasil panen
                            kopi untuk ditabung di KSU Srikandi sebagai simpanan kemudian diambil saat diperlukan,
                            menjadikan warga anggotanya memiliki kepastian pendapatan sepanjang tahun.</p>
                    </div>
                    <a class="btn btn-light btn-xl" href="{{ route('about') }}">Find Out More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <img class="img-fluid"
                    src="https://tse4.mm.bing.net/th/id/OIP.5LmX5YaqjoGaFpyqJed5XwHaFj?cb=iwp2&rs=1&pid=ImgDetMain"
                    alt="Cerita KSU Srikandi">
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Layanan Kami</h2>
            <hr class="divider">
            <div class="row gx-4 gx-lg-5">
                <!-- Catering Kopi -->
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-cup-hot fs-1 text-warning"></i></div>
                        <h3 class="h4 mb-2">Catering Kopi</h3>
                        <p class="text-muted mb-0">Kamu bisa membawa kopi Srikandi ke acara kantor, pameran, atau momen
                            spesial lainnya.</p>
                    </div>
                </div>
                <!-- Coffee Pack -->
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-bag fs-1 text-warning"></i></div>
                        <h3 class="h4 mb-2">Coffee Pack</h3>
                        <p class="text-muted mb-0">Dalam kemasan 200gr atau 1kg, nikmati cita rasa kopi robusta pilihan dari
                            petani Srikandi.</p>
                    </div>
                </div>
                <!-- Workshop -->
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-lightbulb fs-1 text-warning"></i></div>
                        <h3 class="h4 mb-2">Workshop</h3>
                        <p class="text-muted mb-0">Belajar mengenali cita rasa kopi, cara seduh manual, dan kisah petani
                            langsung dari sumbernya.</p>
                    </div>
                </div>
                <!-- Kemitraan -->
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-people fs-1 text-warning"></i></div>
                        <h3 class="h4 mb-2">Kemitraan</h3>
                        <p class="text-muted mb-0">Tertarik jadi mitra atau pasok kopi lokal berkualitas? Kami siap bekerja
                            sama.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
