<x-layouts.admin-app>
    <h1>Daftar article</h1>
    <a href="{{ route('admin.article.create') }}" class="btn btn-primary mb-3">Tambah article</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Headline</th>
            <th width="280px">Aksi</th>
        </tr>
        @foreach ($articles as $article)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    @if ($article->image)
                        <img src="{{ asset('images/article/' . $article->image) }}" alt="{{ $article->headline }}"
                            width="150px">
                    @else
                        <span>Tidak ada gambar</span>
                    @endif
                </td>
                <td>{{ $article->headline }}</td>
                {{-- <td>{{ $article->stok }}</td> --}}
                <td>
                    <form action="{{ route('admin.article.destroy', $article->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('admin.article.edit', $article->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

</x-layouts.admin-app>
