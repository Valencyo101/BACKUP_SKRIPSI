@extends('layouts.blog')

@section('isi')
    <div class="col-md-8 hot-post-left">
        <!-- post -->
        <div class="post post-thumb">
            <a class="post-img"><img src="{{ asset('public/frontend/img/koperasi.jpg') }}" alt=""
                    class="left-image"></a>
        </div>
        <!-- /post -->
    </div>
    <div class="col-md-4 hot-post-right">
        <!-- post -->
        <div class="post post-thumb">
            <a class="post-img"><img src="{{ asset('public/frontend/img/srikandi-1.jpg') }}" alt=""
                    class="right-image"></a>
        </div>
        <!-- /post -->

        <!-- post -->
        <div class="post post-thumb">
            <a class="post-img"><img src="{{ asset('public/frontend/img/srikandi-2.jpg') }}" alt=""
                    class="right-image"></a>
        </div>
        <!-- /post -->
    </div>




    <!-- /container -->
    <!-- /SECTION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-8">
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2 class="title">Postingan Terbaru</h2>
                            </div>
                        </div>
                        <!-- post -->
                        @foreach ($data as $post_terbaru)
                            <div class="col-md-6">
                                <div class="post">
                                    <a class="post-img" href="{{ route('blog.isi', $post_terbaru->slug) }}"><img
                                            src="{{ $post_terbaru->gambar }}" alt="" style="height: 200px"></a>
                                    <div class="post-body">
                                        <div class="post-category">
                                            <a href="#">{{ $post_terbaru->category->name }}</a>
                                        </div>
                                        <h3 class="post-title"><a href="#">{{ $post_terbaru->judul }}</a></h3>
                                        <ul class="post-meta">
                                            <li><a href="#">{{ $post_terbaru->users->name }}</a></li>
                                            <li>{{ $post_terbaru->created_at->diffForHumans() }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- @include('template_blog.widget') --}}
            </div>
        </div>
    </div>
@endsection
