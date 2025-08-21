<x-layouts.admin-app>
    <h1>Daftar article</h1>
    <a href="{{ route('article.create') }}" class="btn btn-primary mb-3">Tambah article</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama article</th>
            <th>Harga</th>
            <th>Stok</th>
            <th width="280px">Aksi</th>
        </tr>
        @foreach ($articles as $article)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $article->nama_article }}</td>
                <td>Rp {{ number_format($article->harga) }}</td>
                <td>{{ $article->stok }}</td>
                <td>
                    <form action="{{ route('article.destroy', $article->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('article.edit', $article->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

</x-layouts.admin-app>
