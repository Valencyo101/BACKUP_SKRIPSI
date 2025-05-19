@extends('layouts.blog')

@section('isi')
    @include('blog.components.navbar')

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
            <div class="col-md-4 col-lg-4">
                <img class="img-fluid" src="{{ asset('public/frontend/img/Srikandi 33.jpg') }}" alt="Cerita KSU Srikandi">
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0" style="color: #999; font-weight: bold; font-size: 2.5rem;">Layanan Kami</h2>
            <hr class="divider">
            <div class="row gx-4 gx-lg-5">
                <!-- Catering Kopi -->
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-cup-hot fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Catering Kopi</h3>
                        <p class="text-muted mb-0">Kamu bisa membawa kopi Srikandi ke acara kantor, pameran, atau momen
                            spesial lainnya.</p>
                    </div>
                </div>
                <!-- Coffee Pack -->
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-bag fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Coffee Pack</h3>
                        <p class="text-muted mb-0">Dalam kemasan 200gr atau 1kg, nikmati cita rasa kopi robusta pilihan dari
                            petani Srikandi.</p>
                    </div>
                </div>
                <!-- Workshop -->
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-lightbulb fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Workshop</h3>
                        <p class="text-muted mb-0">Belajar mengenali cita rasa kopi, cara seduh manual, dan kisah petani
                            langsung dari sumbernya.</p>
                    </div>
                </div>
                <!-- Kemitraan -->
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-people fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Kemitraan</h3>
                        <p class="text-muted mb-0">Tertarik jadi mitra atau pasok kopi lokal berkualitas? Kami siap bekerja
                            sama.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GALLERY TITLE SECTION -->
    <section class="text-center my-5">
        <div class="text-primary" style="color: font-weight: bold; letter-spacing: 1px;">MOMENTS</div>
        <h2 style="color: #999; font-weight: bold; font-size: 2.5rem;">GALLERY PEMBUATAN KOPI</h2>
        {{-- <div class="bg-primary" style="width: 60px; height: 6px; margin: 0 auto;"></div> --}}
        <hr class="divider">
    </section>

    <!-- PORTFOLIO GRID SECTION -->
    <div id="portfolio">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('public/frontend/img/Step1.jpeg') }}" title="Project Name">
                        <img class="img-fluid fixed-img" src="{{ asset('public/frontend/img/Step1.jpeg') }}" alt="...">
                        <div class="portfolio-box-caption">
                            <div class="project-name">Harvest The Ripe Cherries</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('public/frontend/img/Step3.jpg') }}" title="Project Name">
                        <img class="img-fluid fixed-img" src="{{ asset('public/frontend/img/Step3.jpg') }}" alt="...">
                        <div class="portfolio-box-caption">
                            <div class="project-name">Dry The Parchment</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('public/frontend/img/step4.png') }}" title="Project Name">
                        <img class="img-fluid fixed-img" style="object-fit: cover"
                            src="{{ asset('public/frontend/img/step4.png') }}" alt="...">
                        <div class="portfolio-box-caption">
                            <div class="project-name">Sort The Defect Beans</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('public/frontend/img/Step5.png') }}" title="Project Name">
                        <img class="img-fluid fixed-img" style="object-fit: cover"
                            src="{{ asset('public/frontend/img/Step5.png') }}" alt="...">
                        <div class="portfolio-box-caption">
                            <div class="project-name">Roast Coffee Beans</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('public/frontend/img/step6.png') }}" title="Project Name">
                        <img class="img-fluid fixed-img" src="{{ asset('public/frontend/img/step6.png') }}"
                            alt="...">
                        <div class="portfolio-box-caption">
                            <div class="project-name">Packing</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('public/frontend/img/Step8.png') }}" title="Project Name">
                        <img class="img-fluid fixed-img" src="{{ asset('public/frontend/img/Step8.png') }}"
                            alt="...">
                        <div class="portfolio-box-caption p-3">
                            <div class="project-name">Ready To Sell</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bagian Kontak (Contact Us) -->
    <section style="background-color: #ff6a00; padding: 60px 0; text-align: center;">
        <div class="container">
            <h2 style="color: white; font-size: 36px; margin-bottom: 10px;">CONTACT US</h2>
            <hr style="width: 60px; border: 2px solid white; margin: 16px auto 40px auto;">

            <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 60px;">
                <!-- Instagram -->
                <div style="text-align: center; width: 180px;">
                    <a href="https://www.instagram.com/kopsen.srikandiulubelu/" target="_blank"
                        style="text-decoration: none;">
                        <img src="https://cdn-icons-png.flaticon.com/512/1384/1384015.png" alt="Instagram"
                            style="width: 48px; height: 48px; margin-bottom: 10px;">
                        <p style="color: white; margin: 0; font-weight: bold; font-size: 14px;">INSTAGRAM</p>
                        <p style="color: #fffde7; font-size: 16px; font-weight: 500;">@kopsensrikandiulubelu</p>
                    </a>
                </div>

                <!-- Facebook -->
                <div style="text-align: center; width: 180px;">
                    <a href="https://web.facebook.com/sriwahyunisienar.alumunium" target="_blank"
                        style="text-decoration: none;">
                        <img src="https://cdn-icons-png.flaticon.com/512/145/145802.png" alt="Facebook"
                            style="width: 48px; height: 48px; margin-bottom: 10px;">
                        <p style="color: white; margin: 0; font-weight: bold; font-size: 14px;">FACEBOOK</p>
                        <p style="color: #fffde7; font-size: 16px; font-weight: 500;">Sri Wahyuni</p>
                    </a>
                </div>

                <!-- Email -->
                <div style="text-align: center; width: 180px;">
                    <a href="mailto:KSUSrikandi@gmail.com" style="text-decoration: none;">
                        <img src="https://cdn-icons-png.flaticon.com/512/732/732200.png" alt="Email"
                            style="width: 48px; height: 48px; margin-bottom: 10px;">
                        <p style="color: white; margin: 0; font-weight: bold; font-size: 14px;">EMAIL</p>
                        <p style="color: #fffde7; font-size: 16px; font-weight: 500;">KSUSrikandi@gmail.com</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
