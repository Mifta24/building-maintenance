<x-layouts.admin-app>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1 class="h3">Edit article</h1>
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

                        <form action="{{ route('admin.article.update', $article->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="image" class="form-label"><strong>image article:</strong></label>
                                <input type="file" name="image"
                                    class="form-control @error('image') is-invalid @enderror" id="image">
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                                {{-- Tampilkan image yang ada saat ini --}}
                                @if ($article->image)
                                    <div class="mt-2">
                                        <p>image saat ini:</p>
                                        <img src="{{ asset('images/article/' . $article->image) }}" alt="image article"
                                            class="img-thumbnail" width="200">
                                    </div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="headline" class="form-label"><strong>Headline:</strong></label>
                                <input type="text" name="headline" value="{{ old('headline', $article->headline) }}"
                                    class="form-control @error('headline') is-invalid @enderror" id="headline"
                                    placeholder="Masukkan Headline article">

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
                                <label for="lead" class="form-label"><strong>lead:</strong></label>
                                <textarea class="form-control @error('lead') is-invalid @enderror" style="height:150px" name="lead" id="lead"
                                    placeholder="Masukkan lead article">{{ old('lead', $article->lead) }}</textarea>

                                @error('lead')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="text-end">
                                <a href="{{ route('admin.article.index') }}" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin-app>
