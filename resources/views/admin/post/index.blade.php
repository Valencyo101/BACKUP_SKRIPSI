@extends('template_backend.home')
@section('sub-judul', 'Post')
@section('content')

@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session('success') }}
    </div>
@endif

<a href="{{ route('post.create') }}" class="btn btn-info btn-sm">Tambah Post</a>
<br><br>

<table class="table table-striped table-hover table-sm table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Post</th>
            <th>Kategori</th>
            <th>Daftar Tags</th>
            <th>Creator</th>
            <th>Thumbnail</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($post as $result => $hasil)
        <tr>
            <td>{{ $result + $post->firstitem() }}</td>
            <td>{{ $hasil->judul }}</td>

            <!-- Check if category exists before accessing its name -->
            <td>{{ $hasil->category ? $hasil->category->name : 'No category' }}</td>

            <!-- Check if tags exist before looping through them -->
            <td>
                @if($hasil->tags->count() > 0)
                    @foreach($hasil->tags as $tag)
                        <ul>
                            <h6><span class="badge badge-info">{{ $tag->name }}</span></h6>
                        </ul>
                    @endforeach
                @else
                    <p>No tags available</p>
                @endif
            </td>

            <!-- Check if user exists before accessing the name -->
            <td>{{ $hasil->users ? $hasil->users->name : 'No creator' }}</td>

            <!-- Handle image and check if it exists -->
            <td>
                @if($hasil->gambar && file_exists(public_path($hasil->gambar)))
                    <img src="{{ asset($hasil->gambar) }}" class="img-fluid" style="width:100px">
                @else
                    <p>No image available</p>
                @endif
            </td>

            <td>
                <form action="{{ route('post.destroy', $hasil->id )}}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{ route('post.edit', $hasil->id ) }}" class="btn btn-primary btn-sm">Edit</a>
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $post->links() }}

@endsection
