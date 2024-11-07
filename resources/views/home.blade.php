@extends('template_backend.home')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Struktur Organisasi</h3>
                    </div>

                    <div class="card-body">
                        <div class="row text-center mb-4">
                            <!-- Ketua 1 -->
                            <div class="col-md-6">
                                <img src="{{ asset('public/frontend/img/person.png') }}" class="rounded-circle mb-2"
                                    width="150" height="150" alt="Ketua 1">
                                <h5>Ketua 1</h5>
                                <p>SRI WAHYUNI</p>
                            </div>

                            <!-- Ketua 2 -->
                            <div class="col-md-6">
                                <img src="{{ asset('public/frontend/img/person.png') }}" class="rounded-circle mb-2"
                                    width="150" height="150" alt="Ketua 2">
                                <h5>Ketua 2</h5>
                                <p>INDRIYANI</p>
                            </div>
                        </div>

                        <div class="row text-center">
                            <!-- Sekretaris 1 -->
                            <div class="col-md-4">
                                <img src="{{ asset('public/frontend/img/person.png') }}" class="rounded-circle mb-2"
                                    width="120" height="120" alt="Sekretaris 1">
                                <h6>Sekertaris 1</h6>
                                <p>YULIASIH</p>
                            </div>

                            <!-- Sekretaris 2 -->
                            <div class="col-md-4">
                                <img src="{{ asset('public/frontend/img/person.png') }}" class="rounded-circle mb-2"
                                    width="120" height="120" alt="Sekretaris 2">
                                <h6>Sekertaris 2</h6>
                                <p>SUNDARI NINGRUM</p>
                            </div>

                            <!-- Bendahara -->
                            <div class="col-md-4">
                                <img src="{{ asset('public/frontend/img/person.png') }}" class="rounded-circle mb-2"
                                    width="120" height="120" alt="Bendahara">
                                <h6>Bendahara</h6>
                                <p>SREK WIYATI</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
