@extends('layouts.blog')

@section('isi')
    @foreach ($data as $isi_post)
        <div id="post-header" class="page-header">
            <div class="page-header-bg"
                style="
            background-image: url({{ asset($isi_post->gambar) }});
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        "
                data-stellar-background-ratio="0.5">
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <div class="post-category">
                            <a href="category.html">{{ $isi_post->category->name }}</a>
                        </div>

                        <h1>{{ $isi_post->judul }}</h1>
                        <ul class="post-meta">
                            <li><a href="author.html">{{ $isi_post->users->name }}</a></li>
                            <li>{{ $isi_post->created_at }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /PAGE HEADER -->

        <div class="col-md-8 hot-post-left">
            <br>
            <div class="section-row">
                {!! $isi_post->content !!}
            </div>
            <!-- Display Tags with Label -->
            @if ($isi_post->tags)
                <div style="display: flex; align-items: center; gap: 0.5rem; margin-top: 1rem;">
                    <strong>Tags:</strong> <!-- Text "Tags:" before displaying the list of tags -->
                    @foreach ($isi_post->tags as $tag)
                        <h6 style="margin: 0">
                            <span class="badge badge-info">{{ $tag->name }}</span>
                        </h6>
                    @endforeach
                </div>
            @endif
        </div>
        @include('template_blog.widget')
    @endforeach
@endsection
