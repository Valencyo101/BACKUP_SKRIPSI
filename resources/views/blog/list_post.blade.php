@extends('layouts.blog')
@section('isi')
    <div class="row">
        <div class="d-flex justify-content-center">
            @if (Route::is('blog.category'))
                <h1 class="text-center">Daftar Post Kategori</h1>
            @else
                <h1 class="text-center">Daftar Post</h1>
            @endif
        </div>

        @foreach ($data as $list_post)
            <div class="col-md-4 post post-col shadow-sm">
                <a class="post-img" href="{{ route('blog.isi', $list_post->slug) }} "><img
                        style="width: 100%;
                    height: 25vh;
                    object-fit: cover;
                    object-position: center;"
                        src="{{ asset($list_post->gambar) }}" alt="{{ $list_post->judul }}"></a>
                <div class="post-body">
                    <div class="post-category">
                        <a href="category.html">{{ $list_post->category->name }}</a>

                    </div>
                    <h3 class="post-title"><a href="blog-post.html">{{ $list_post->judul }}</a></h3>
                    <ul class="post-meta">
                        <li><a href="author.html">{{ $list_post->users->name }}</a></li>
                        <li>{{ $list_post->created_at }}</li>
                    </ul>

                </div>
            </div>
        @endforeach
        <center>{{ $data->links() }}</center>
    </div>


    <!-- /post -->
@endsection
