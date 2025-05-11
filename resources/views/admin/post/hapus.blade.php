@extends('template_backend.home')
@section('sub-judul', 'Post')
@section('content')

    @if (Session::has('success'))
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
                    <td>{{ $hasil->category ? $hasil->category->name : 'No category' }}</td>
                    <td>
                        @if ($hasil->tags->count() > 0)
                            @foreach ($hasil->tags as $tag)
                                <ul>
                                    <h6><span class="badge badge-info">{{ $tag->name }}</span></h6>
                                </ul>
                            @endforeach
                        @else
                            <p>No tags available</p>
                        @endif
                    </td>
                    <td>{{ $hasil->users ? $hasil->users->name : 'No creator' }}</td>
                    <td>
                        @if ($hasil->gambar && file_exists(public_path($hasil->gambar)))
                            <img src="{{ asset($hasil->gambar) }}" class="img-fluid" style="width:100px">
                        @else
                            <p>No image available</p>
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('post.kill', $hasil->id) }}" method="POST" class="d-inline delete-form">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('post.restore', $hasil->id) }}" class="btn btn-info btn-sm">Restore</a>
                            <button type="button" class="btn btn-danger btn-sm delete-post"
                                data-id="{{ $hasil->id }}">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $post->links() }}

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('.delete-post').forEach(button => {
                button.addEventListener('click', function() {
                    var form = this.closest('form');

                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: 'Data yang dihapus permanen tidak bisa dikembalikan!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
@endsection
