@extends('layouts.blog')
@section('isi')
    <!-- Wrapper untuk judul -->
    <div class="d-flex justify-content-center mb-4 mt-4">
        @if (Route::is('blog.category'))
            <h1 class="text-center">Kategori</h1>
        @else
            <h1 class="text-center">Daftar Post</h1>
        @endif
    </div>


    <!-- Wrapper untuk Post List -->
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($data as $list_post)
            <div class="col">
                <div class="post post-col shadow-sm">
                    <a class="post-img" href="{{ route('blog.isi', $list_post->slug) }}">
                        <img style="width: 100%; height: 25vh; object-fit: cover; object-position: center;"
                            src="{{ asset($list_post->gambar) }}" alt="{{ $list_post->judul }}">
                    </a>
                    <div class="post-body">
                        <div class="post-category">
                            <a href="category.html">{{ $list_post->category->name }}</a>
                        </div>
                        <h3 class="post-title">
                            <a href="{{ route('blog.isi', $list_post->slug) }}">{{ $list_post->judul }}</a>
                        </h3>
                        <ul class="post-meta">
                            <li><a href="author.html">{{ $list_post->users->name }}</a></li>
                            <li>{{ $list_post->created_at }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Paginasi dengan style custom -->
    <div class="d-flex justify-content-center mt-4">
        {{ $data->links('pagination::bootstrap-4') }}
    </div>
@endsection
