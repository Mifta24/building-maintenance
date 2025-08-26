<x-layouts.admin-app>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1 class="h3">Tambah article Baru</h1>
                    </div>
                    <div class="card-body">
                        {{-- Menampilkan error validasi --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> Ada masalah dengan input Anda.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('admin.article.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="image" class="form-label"><strong>image Article:</strong></label>
                                <input type="file" name="image"
                                    class="form-control @error('image') is-invalid @enderror" id="image">
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="headline" class="form-label"><strong>Headline
                                        article:</strong></label>
                                <input type="text" name="headline" value="{{ old('headline') }}"
                                    class="form-control @error('headline') is-invalid @enderror" id="headline"
                                    placeholder="Masukkan headline article">

                                @error('headline')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="body" class="form-label"><strong>Article body:</strong></label>
                                <x-forms.tinymce-editor />

                                @error('body')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="lead" class="form-label"><strong>Lead:</strong></label>
                                <textarea class="form-control @error('lead') is-invalid @enderror" style="height:150px" name="lead" id="lead"
                                    placeholder="Masukkan lead article">{{ old('lead') }}</textarea>

                                @error('lead')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="text-end">
                                <a href="{{ route('admin.article.index') }}" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin-app>
